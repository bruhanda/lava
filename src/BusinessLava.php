<?php

namespace Brukhanda\Lava;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\GuzzleException;

class BusinessLava
{
    /**
     * @var string
     */
    private $host = 'https://api.lava.ru';

    /**
     * @var int
     */
    private $connectionTimeout = 10;


    /**
     * @param $token
     */
    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => $this->host,
            'timeout' => $this->connectionTimeout,
        ]);
    }

    /**
     * @return mixed
     * @throws GuzzleException
     */
    public function ping()
    {
        return $this->request([], '/test/ping', 'get');
    }

    /**
     * @param BusinessInvoiceCreateData $data
     * @return mixed
     * @throws GuzzleException
     */
    public function businessInvoiceCreate(BusinessInvoiceCreateData $data)
    {
        return $this->request($data->toArray(), '/business/invoice/create', 'post');
    }

    /**
     * @param array $params
     * @param $uri
     * @param string $method
     * @return mixed
     * @throws GuzzleException
     */
    private function request($params, $uri, $method = 'get')
    {
        $options = [
            'verify' => false,
            'form_params' => $params,
            //'json'=>$params,
            'body'=>json_encode($params),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
        ];

        try {
            $response = $this->httpClient->request($method, $uri, $options);
        } catch (ClientException $exc) {
            $response = $exc->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode((string)$responseBodyAsString, true);
        } catch (RequestException $exc) {
            $response = $exc->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return json_decode((string)$responseBodyAsString, true);
        }

        return json_decode((string)$response->getBody(), true);
    }

}