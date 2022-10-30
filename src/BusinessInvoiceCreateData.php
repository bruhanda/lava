<?php
namespace Brukhanda\Lava;

class BusinessInvoiceCreateData
{

    private $sum;

    private $orderId;

    private $signature;

    private $shopId;

    private $hookUrl;

    private $failUrl;

    private $successUrl;

    private $expire;

    private $customFields;

    private $comment;

    private $includeService;

    private $excludeService;


    /**
     * @param mixed $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param mixed $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @param mixed $shopId
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * @param mixed $hookUrl
     */
    public function setHookUrl($hookUrl)
    {
        $this->hookUrl = $hookUrl;
    }

    /**
     * @param mixed $failUrl
     */
    public function setFailUrl($failUrl)
    {
        $this->failUrl = $failUrl;
    }

    /**
     * @param mixed $successUrl
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @param mixed $expire
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
    }

    /**
     * @param mixed $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param mixed $includeService
     */
    public function setIncludeService($includeService)
    {
        $this->includeService = $includeService;
    }

    /**
     * @param mixed $excludeService
     */
    public function setExcludeService($excludeService)
    {
        $this->excludeService = $excludeService;
    }





}