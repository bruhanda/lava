<?php


namespace Brukhanda\Lava;


class InvoiceBusinessCreateData
{

    /**
     * Number
     * Сумма, с указанием двух знаков после точки
     * Пример: 10.00
     *
     * @var string
     */
    private $sum;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var string
     */
    private $signature;

    /**
     * @var string
     */
    private $shopId;

    /**
     * @var string
     */
    private $hookUrl;

    /**
     * @var string
     */
    private $failUrl;

    /**
     * @var string
     */
    private $successUrl;

    /**
     * @var int
     */
    private $expire;

    /**
     * @var string
     */
    private $customFields;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var array
     */
    private $includeService;

    /**
     * @var array
     */
    private $excludeService;

    public function __construct($sum, $orderId, $shopId)
    {
        $this->sum=$sum;
        $this->orderId=$orderId;
        $this->shopId=$shopId;
    }

    /**
     * @param string $signature
     */
    public function setSignature(string $signature)
    {
        $this->signature = $signature;
    }

    /**
     * @param string $hookUrl
     */
    public function setHookUrl(string $hookUrl)
    {
        $this->hookUrl = $hookUrl;
    }

    /**
     * @param string $failUrl
     */
    public function setFailUrl(string $failUrl)
    {
        $this->failUrl = $failUrl;
    }

    /**
     * @param string $successUrl
     */
    public function setSuccessUrl(string $successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @param int $expire
     */
    public function setExpire(int $expire)
    {
        $this->expire = $expire;
    }

    /**
     * @param string $customFields
     */
    public function setCustomFields(string $customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param array $includeService
     */
    public function setIncludeService(array $includeService)
    {
        $this->includeService = $includeService;
    }

    /**
     * @param array $excludeService
     */
    public function setExcludeService(array $excludeService)
    {
        $this->excludeService = $excludeService;
    }


}