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


    public function initiateTransaction(Request $request)
    {
        return $request->all();
        // $orderId = $request->order_id;
        // $order_detail = OrderDetail::where('order_id', $orderId)->first();

        $callbackUrl = 'https://thenzawlgolfresort.com/api/response-handler';

        $paytmParams = array();

        $paytmParams["body"] = array(
            "requestType" => "Payment",
            "mid" => $this->mid,
            "websiteName" => $this->websiteName,
            "orderId" => $this->orderId,
            "callbackUrl" => $this->callbackUrl,
            "txnAmount" => array(
                "value" => $request->amount,
                "currency" => "INR",
            ),
            "userInfo" => array(
                "custId" => $order_detail->id,
                "mobile" => $order_detail->contact,
                "email" => $order_detail->email,
                "firstName" => $order_detail->name,
            ),
        );

        /*
      * Generate checksum by parameters we have in body
      * Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys
      */

        $checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"]), $this->merchantKey);
        // $url = "https://securegw-stage.paytm.in/theia/api/v1/initiateTransaction?mid=$this->mid&orderId=$orderId";

        /* for Production */
        $url = "https://securegw.paytm.in/theia/api/v1/initiateTransaction?mid=$this->mid&orderId=$orderId";

        $paytmParams["head"] = array(
            "signature" => $checksum,
            "requestTimestamp" => now()->timestamp,
            "channelId" => $this->channel,
        );

        $response = Http::withHeaders([
            "accept" => "application/json",
            "content-type" => "application/json"
        ])->post($url, $paytmParams);

        if ($response->status() == 200) {
            $result = json_decode($response->body(), true);
            $head = $result['head'];
            $body = $result['body'];
            $resultInfo = $body['resultInfo'];

            if ($resultInfo['resultStatus'] === 'S') {
                return response()->json([
                    'token' => $body['txnToken'],
                    'orderId' => $orderId,
                    'amount' => $request->amount,
                    "checksum" => $checksum
                ], 200);
            };
            dd($resultInfo);
            return $resultInfo['resultMsg'];
        } else {
            dd($response->body());
            throw new \Exception("Something went wrong");
        }

        $post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        $response = curl_exec($ch);
        $res = json_decode($response);
        return $res;
    }

    public function makePayment(Request $request)
    {
        // return $this->saveApplication($request);
        

        $this->orderId = now()->timestamp;
        // return $request->all();
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

        $this->saveApplication($request);


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
            // "orderId" => "1642774999", //test
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

        // return $result;

        // $payment_status = 'success';

        if ($result->body->resultInfo->resultStatus == 'TXN_SUCCESS') {

            $order = Order::query()->firstWhere('order_id', $request->get('orderId'));

            $order && $order->application()->update([
                'paid' => true
            ]);

            $payment = new Payment();
            // $payment->transaction_id = ;
            $payment->order_id = $request->get('orderId');
            $payment->currency = $request->currency;
            $payment->status = $result->body->resultInfo->resultStatus;
            $payment->amount = $result->body->txnAmount;
            $payment->callback_url = $this->callbackUrl;
            $payment->save();
            return view('transaction.success', ['status' => 'success']);



            // $this->submitApplication($this->application);
        } else
            return view('transaction.success', ['status' => 'failure']);
        // return redirect()->away('http://localhost:8080/investor/commerce-and-industries/allotment-of-industrial-plot?status=' . $payment_status);
        //  return redirect()->away("http://localhost:8001/test?$responseParameters");


    }
    public function saveApplication(Request $request)
    {

        $this->validate($request, [
            'application_code' => ['required'],
            'department_id' => ['required'],
        ]);

        $appProfile = ApplicationProfile::query()
            ->where('code', $request->get('application_code'))
            ->where('published', true)
            ->first();

        $application = Application::query()->create([
            'application_code' => $request->get('application_code'),
            'regn_no' => NumberGenerator::fakeIdGenerator($request->get('application_code')),
            'application_profile_id' => $appProfile->id,
            'user_id' => Auth::id(),
            'department_id' => $request->get('department_id'),
            'current_state' => 'submitted',
        ]);

        $order = new Order();
        $order->application_id = $application->id;
        $order->order_id = $this->orderId;
        $order->save();

        $application->states()->create([
            'name' => 'submitted',
            'remark' => 'Application submitted at ' . now()->toDateString()
        ]);
        $application->office()->attach($appProfile->office_id);

        if ($request->application_code == 'LAND_REVENUE_LSC' || $request->application_code == 'LAND_REVENUE_PATTA' || $request->application_code == 'ENV_FOREST_BAMBOO' || $request->application_code == 'C&E_POWER_SUBSIDY') {
            if ($request->application_code == 'ENV_FOREST_BAMBOO') {
                $arrs = (array) json_decode($request->bamboo_particulars, true);
                $application->bamboos()->createMany($arrs);
            } else if ($request->application_code == 'C&E_POWER_SUBSIDY') {
                $arrs = (array) json_decode($request->machineries, true);
                $application->powerSubsidyMachineries()->createMany($arrs);
            } else {
                $arrs =  (array)json_decode($request->lsc_details, true);
                $application->lscDetails()->createMany($arrs);
            }
        }

        DB::transaction(function ($cb) use ($appProfile, $request, $application) {
            $keysArr = KeysUtil::getApplicationKeys($request->get('application_code'));
            foreach ($keysArr as $key) {
                $application->applicationValues()->create([
                    'field_key' => $key,
                    'field_value' => $request->get($key),
                    'field_label' => KeysUtil::getApplicationLabel($key),
                ]);
            }
            $flow = $appProfile->processFlows()
                ->orderBy('step')
                ->first();

            $movement = ApplicationMovement::query()->create([
                'application_id' => $application->id,
                'staff_id' => $flow->staff_id,
                'status' => 'dealing',
                'step' => $flow->step,
            ]);
        });
        //Attachment upload
        foreach ($request->file() as $key => $file) {
            $attachmentProfile = AttachmentUtils::getAttachment($key);
            if (!blank($attachmentProfile)) {
                $disk = $attachmentProfile['disk'];
                $folder = $attachmentProfile['folder'];
                $path = Storage::disk($disk)->put($folder, $file);
                $application->attachments()->create([
                    'original_name' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                    'label' => $attachmentProfile['label'],
                    'size' => $file->getSize(),
                    'path' => $path
                ]);
            }
        }

        // return view('transaction.success', ['status' => 'failure']);
        // $views = view('bamboo.table', ["details" => $details, 'code' => $model->application_code, 'total' => $total])->render();

        // return response()->json([
        //     'message' => 'Application submitted successfully'
        // ], 200);
    }
}
