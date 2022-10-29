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

    private $secretKey;

    public function __construct($secretKey)
    {
        $this->secretKey=$secretKey;
    }

    private function signature($data){
        ksort($data);
        $signature= hash_hmac("sha256", json_encode($data), $this->secretKey);

        return json_encode($data + ['signature' => $signature]);
    }

    private function checkSignature(){
        $data =  json_decode(file_get_contents('php://input'), true);
        ksort($data);

        $signature = hash_hmac("sha256", json_encode($data), $this->secretKey);
        $hookSignature = $_SERVER['HTTP_AUTHORIZATION'];

        if($signature != $hookSignature)
            return "Invalid signature";
    }

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