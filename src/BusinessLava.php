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

    private $secretKey;

    private $secretKey2;

    private $shopID;


    /**
     * @param $token
     */
    public function __construct($shopID, $secretKey, $secretKey2)
    {
        $this->secretKey = $secretKey;
        $this->secretKey2 = $secretKey2;
        $this->shopID = $shopID;

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
        $data = $this->signature($data);
        return $this->request($data->toArray(), '/business/invoice/create', 'post');
    }

    public function invoiceInfo($orderID, $invoiceID)
    {
        $data = [
            'shopId' => $this->shopID,
            'orderId' => $orderID,
            'invoiceId' => $invoiceID
        ];
        $data = $this->signature($data);

        return $this->request($data, '/business/invoice/status', 'post');
    }

    private function signature(BusinessInvoiceCreateData $obj)
    {
        $data=$obj->toArray();
        ksort($data);
        $signature = hash_hmac("sha256", json_encode($data), $this->secretKey);
        $obj->setSignature($signature);
        return $obj;
    }

    private function checkSignature()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        ksort($data);

        $signature = hash_hmac("sha256", json_encode($data), $this->secretKey2);
        $hookSignature = $_SERVER['HTTP_AUTHORIZATION'];

        if ($signature === $hookSignature) {
            return true;
        }
        throw new LavaException("Invalid signature");
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
            //'form_params' => $params,
           // 'json'=>$params,
            'body' => json_encode($params),
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