<?php

namespace Brukhanda\Lava;

class BusinessPaymentWebhookDTO extends DTO
{
    public $invoice_id;

    public $status;

    public $pay_time;

    public $amount;

    public $order_id;

    public $pay_service;

    public $payer_details;

    public $custom_fields;

    public $credited;

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @return mixed
     */
    public function getPayService()
    {
        return $this->pay_service;
    }

    /**
     * @return mixed
     */
    public function getPayerDetails()
    {
        return $this->payer_details;
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }

    /**
     * @return mixed
     */
    public function getCredited()
    {
        return $this->credited;
    }



}