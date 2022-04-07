<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PWDController extends Controller
{

    // private $url = 'http://10.180.243.14:8000/';
    private $url = 'https://pwdroadcutting.mizoram.gov.in/';
    public function getLocalCouncil()
    {
        // return 'url council';

        // $url = 'http://10.180.243.14:8000/';
        // $prod = 'https://pwdroadcutting.mizoram.gov.in/';



        $client = new \GuzzleHttp\Client();
        $council = $client->get($this->url.'api/auth/localcouncil');
        $district = $client->get($this->url.'api/auth/district');

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
        $response = $client->request('POST', $this->url.'api/auth/form', [
            'form_params' => 
                $request->all()
            
        ]);

        // $response = json_decode($response->getBody());
        return $response;
    }
}
