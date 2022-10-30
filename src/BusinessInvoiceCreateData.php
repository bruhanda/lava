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
    public function setSum($sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @param mixed $signature
     */
    public function setSignature($signature): void
    {
        $this->signature = $signature;
    }

    /**
     * @param mixed $shopId
     */
    public function setShopId($shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @param mixed $hookUrl
     */
    public function setHookUrl($hookUrl): void
    {
        $this->hookUrl = $hookUrl;
    }

    /**
     * @param mixed $failUrl
     */
    public function setFailUrl($failUrl): void
    {
        $this->failUrl = $failUrl;
    }

    /**
     * @param mixed $successUrl
     */
    public function setSuccessUrl($successUrl): void
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @param mixed $expire
     */
    public function setExpire($expire): void
    {
        $this->expire = $expire;
    }

    /**
     * @param mixed $customFields
     */
    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param mixed $includeService
     */
    public function setIncludeService($includeService): void
    {
        $this->includeService = $includeService;
    }

    /**
     * @param mixed $excludeService
     */
    public function setExcludeService($excludeService): void
    {
        $this->excludeService = $excludeService;
    }





}