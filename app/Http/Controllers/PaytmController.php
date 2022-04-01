<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Paytm\PaytmChecksum;
use App\Models\Application;
use App\Models\ApplicationMovement;
use App\Models\ApplicationProfile;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderedItem;
use App\Models\Payment;
use App\Models\Rate;
use App\Utils\AttachmentUtils;
use App\Utils\KeysUtil;
use App\Utils\NumberGenerator;
use Auth;
use Carbon\Carbon;
use DB;
// use GuzzleHttp\Client;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Route;
use Storage;

class PaytmController extends Controller
{
    private $orderId = '';
    private $callbackUrl = 'http://127.0.0.1:8000/api/response-handler';

    private $mid = "Mizora49434774766128";
    private $merchantKey = "Ljli6x1KDfxEZc6q";
    private $websiteName = "DEFAULT";
    private $channel = "WEB";

    protected Request $application;


    public function makePayment(Request $request, Application $model)
    {
        // return $request->amount;

        $this->orderId = now()->timestamp;
        //Added
        $order = $model->order()->create([
            'order_id' => $this->orderId
        ]);

        $payment = new Payment();
        $payment->callback_url = $this->callbackUrl;
        $payment->order_id = $this->orderId;
        $payment->txn_date = Carbon::now();
        $payment->txn_id = '-';
        // $payment->payment_mode = $result->body->paymentMode;
        $payment->amount = $request->amount;
        $payment->status = 'Unpaid';
        // $payment->owner()->associate($order->application);
        $payment->owner()->associate($model);
        $payment->save();
        //Added

        // $model->order()->create([
        //     'order_id' => $this->orderId
        // ]);
        $orderId = $this->orderId;
        $callbackUrl = $this->callbackUrl;
        $amount = $request->amount;
        $departmentId = 2;
        $customer = 'EODB(staging)';

        $customer = json_encode($customer);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://paymentgw.mizoram.gov.in/api/initiate-payment', [
            'form_params' => [
                'callback_url' => $callbackUrl,
                'order_id' => $orderId,
                'amount' => $amount,
                'department_id' => $departmentId,
                'customer' => $customer,
            ]
        ]);

        $response = json_decode($response->getBody());
        return $response;
        // return redirect($response);
    }

    public function responseHandler(Request $request)
    {


        $paytmParams = array();

        /* body parameters */
        $paytmParams["body"] = array(

            /* Find your MID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
            "mid" => "Mizora49434774766128",

            /* Enter your order id which needs to be check status for */
            // "orderId" => "1648106989", //correct
            "orderId" => $request->get('orderId'),
            // "orderId" => "164277499", //test
        );

        /**
         * Generate checksum by parameters we have in body
         * Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
         */
        $checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), "Ljli6x1KDfxEZc6q");

        /* head parameters */
        $paytmParams["head"] = array(

            /* put generated checksum value here */
            "signature"    => $checksum
        );

        /* prepare JSON string for request */
        $post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);
        $url = "https://securegw.paytm.in/v3/order/status";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($ch);
        // $response = json_decode($response->getBody());
        $result =  json_decode($response);


        if ($result->body->resultInfo->resultStatus == 'TXN_SUCCESS') {

            $status = $result->body->resultInfo->resultStatus;

            $order = Order::query()->firstWhere('order_id', $request->get('orderId'));

            $order && $order->application()->update([
                'paid' => true
            ]);

            $order->application->payment->update([
                'txn_date' => $result->body->txnDate,
                'txn_id' => $result->body->txnId,
                'payment_mode' => $result->body->paymentMode,
                'status' => $status,
            ]);

            // $order = Order::query()->findOrFail($request->get('orderId'));
            // $payment = new Payment();
            // $payment->callback_url = $this->callbackUrl;
            // $payment->order_id = $request->get('orderId');
            // $payment->txn_date = $result->body->txnDate;
            // $payment->txn_id = $result->body->txnId;
            // $payment->payment_mode = $result->body->paymentMode;
            // $payment->amount = $result->body->txnAmount;
            // $payment->status = $status;
            // $payment->owner()->associate($order->application);
            // $payment->save();
            //  return $payment;

            return view('transaction.success', ['status' => 'success']);
        } else
            return view('transaction.success', ['status' => 'failure']);
        // return redirect()->away('http://localhost:8080/investor/commerce-and-industries/allotment-of-industrial-plot?status=' . $payment_status);
        //  return redirect()->away("http://localhost:8001/test?$responseParameters");


    }
}
