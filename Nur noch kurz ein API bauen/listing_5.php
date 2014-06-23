<?php
namespace WM2014Bet\Service;

use Zend\Http\Client;
use Zend\Json\Json;

abstract class AbstractService
{
    public function sendGetRequest($route)
    {
        $client = new Client($route);
        $client->setMethod('get');
        $client->setHeaders(
            array(
                'Accept' => 'application/json',
            )
        );

        $response = $client->send();
        $response = $response->getContent();
        $data     = Json::decode($response);

        return $data;
    }
}
