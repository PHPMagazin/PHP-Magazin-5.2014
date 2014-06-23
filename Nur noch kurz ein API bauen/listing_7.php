<?php
namespace WM2014Bet\Service;

use Zend\Http\Client;
use Zend\Json\Json;

abstract class AbstractService
{
    [...]

    public function sendPostRequest($route, array $postData)
    {
        $client = new Client($route);
        $client->setMethod('POST');
        $client->setParameterPost($postData);
        $client->setEncType(Client::ENC_FORMDATA);
        $client->setAuth('wm2014', 'wm2014', Client::AUTH_BASIC);
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
