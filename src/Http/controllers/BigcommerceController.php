<?php

namespace Bigcommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class BigcommerceController extends Controller {

    public function showText()
    {
       print_r("hello");die;
    }

    public function getGitGuzzle()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    }


}