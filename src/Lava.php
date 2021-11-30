<?php

namespace Brukhanda\Lava;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\GuzzleException;

class Lava
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
     * @var string
     */
    private $token;

    /**
     * @param $token
     */
    public function __construct($token)
    {

        $this->token = $token;
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
     * @param InvoiceCreateData $data
     * @return mixed
     * @throws GuzzleException
     */
    public function invoiceCreate(InvoiceCreateData $data)
    {
        return $this->request($data->toArray(), '/invoice/create', 'post');
    }

    /**
     * @param $invoiceID
     * @return mixed
     * @throws GuzzleException
     */
    public function invoiceInfo($invoiceID)
    {
        return $this->request(['id' => $invoiceID], '/invoice/info', 'post');
    }

    /**
     * @param WithdrawCreateData $data
     * @return mixed
     * @throws GuzzleException
     */
    public function withdrawCreate(WithdrawCreateData $data)
    {
        return $this->request($data->toArray(), '/withdraw/create', 'post');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GuzzleException
     */
    public function withdrawInfo($id)
    {
        return $this->request(['id'=>$id], '/withdraw/info', 'post');
    }

    /**
     * @return mixed
     * @throws GuzzleException
     */
    public function walletList()
    {
        return $this->request([], '/wallet/list', 'get');
    }

    /**
     * @param $orderID
     * @return mixed
     * @throws GuzzleException
     */
    public function invoiceInfoByOrder($orderID)
    {
        return $this->request(['order_id' => $orderID], '/invoice/info', 'post');
    }

    /**
     * @param $url
     * @return mixed
     * @throws GuzzleException
     */
    public function invoiceSetWebhook($url)
    {
        return $this->request(['url' => $url], '/invoice/set-webhook', 'post');
    }

    /**
     * @param array $params
     * @param $uri
     * @param string $method
     * @return mixed
     * @throws GuzzleException
     */
    private function request(array $params, $uri, string $method = 'get')
    {
        $rowData = http_build_query($params);
        $options = [
            'verify' => false,
            'query' => $rowData,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $this->token
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



