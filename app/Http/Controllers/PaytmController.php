<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Paytm\PaytmChecksum;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderedItem;
use App\Models\Payment;
use App\Models\Rate;
// use GuzzleHttp\Client;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class PaytmController extends Controller
{
    public function makePayment(Request $request)
    {
        // return $request->all();
        $orderId = now()->timestamp;
        $callbackUrl = 'http://127.0.0.1:8000/api/response-handler';
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
        return redirect($response);



        // if ($response->status == 'TXN_SUCCESS') {
        //     return 'success';
        // } else {
        //     return 'failed';
        // }
    }

    public function responseHandler(Request $request)
    {
        // return 'hello';
        $payment = new Payment();
        $payment->transaction_id = $request->transactionId;
        $payment->order_id = $request->orderId;
        $payment->currency = $request->currency;
        $payment->status = $request->status;
        $payment->amount = $request->amount;
        $payment->callback_url = 'url';
        $payment->save();

        if ($request->status == 'TXN_SUCCESS') {
            return 'success';
        } else {
            return 'failed';
        }
    }
}
