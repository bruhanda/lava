<?php

namespace Brukhanda\Lava;

class PaymentWebhookDTO extends DTO
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $invoice_id;

    /**
     * @var string
     */
    public $order_id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $pay_time;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $custom_fields;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }



}