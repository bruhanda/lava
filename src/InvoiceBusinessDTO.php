<?php


namespace Brukhanda\Lava;


class InvoiceBusinessDTO extends DTO
{
    /**
     * @var string
     */
    public $sum;
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var string
     */
    public $signature;
    /**
     * @var string
     */
    public $shopId;
    /**
     * @var string
     */
    public $hookUrl;
    /**
     * @var string
     */
    public $failUrl;
    /**
     * @var string
     */
    public $successUrl;
    /**
     * @var int
     */
    public $expire;
    /**
     * @var string
     */
    public $customFields;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var array
     */
    public $includeService;
    /**
     * @var array
     */
    public $excludeService;

    /**
     * @return string
     */
    public function getSum(): string
    {
        return $this->sum;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @return string
     */
    public function getShopId(): string
    {
        return $this->shopId;
    }

    /**
     * @return string
     */
    public function getHookUrl(): string
    {
        return $this->hookUrl;
    }

    /**
     * @return string
     */
    public function getFailUrl(): string
    {
        return $this->failUrl;
    }

    /**
     * @return string
     */
    public function getSuccessUrl(): string
    {
        return $this->successUrl;
    }

    /**
     * @return int
     */
    public function getExpire(): int
    {
        return $this->expire;
    }

    /**
     * @return string
     */
    public function getCustomFields(): string
    {
        return $this->customFields;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return array
     */
    public function getIncludeService(): array
    {
        return $this->includeService;
    }

    /**
     * @return array
     */
    public function getExcludeService(): array
    {
        return $this->excludeService;
    }


}