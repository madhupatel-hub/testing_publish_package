<?php

namespace Bigcommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class BigcommerceController extends Controller {

    public function showText()
    {
       print_r("hello");die;
    }

    public function getCatApi()
    {
        $client = new Client(); //GuzzleHttp\Client
        $request = $client->get('https://api.thecatapi.com/v1/breeds');
        $response = $request->getBody();
       
        dd($response);
    }


}