<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PWDController extends Controller
{

    private $local = 'http://10.180.243.14:8000/';
    private $prod = 'https://pwdroadcutting.mizoram.gov.in/';
    public function getLocalCouncil()
    {
        // return 'local council';

        // $local = 'http://10.180.243.14:8000/';
        // $prod = 'https://pwdroadcutting.mizoram.gov.in/';



        $client = new \GuzzleHttp\Client();
        $council = $client->get($this->local.'/api/auth/localcouncil');
        $district = $client->get($this->prod.'/api/auth/district');

        return response()->json([
            'councils' => json_decode($council->getBody())->localcouncils,
            'districts' => json_decode($district->getBody())->districts
        ],200);

    }

    public function store(Request $request)
    {
        // return $request->all();
        // $customer = json_encode($customer);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $this->local.'api/auth/form', [
            'form_params' => 
                $request->all()
            
        ]);

        // $response = json_decode($response->getBody());
        return $response;
    }
}
