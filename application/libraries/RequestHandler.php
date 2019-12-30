<?php

use GuzzleHttp\Client;

/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/30/2019
 * Time: 3:19 PM
 */

class RequestHandler
{
    public static function sendRequest($method, $url)
    {
        $client = new Client();
        $result = $client->request($method, $url);
        return $result->getBody();
    }
}