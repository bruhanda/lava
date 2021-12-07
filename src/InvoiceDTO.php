<?php

namespace Brukhanda\Lava;

class InvoiceDTO extends DTO
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $order_id;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $sum;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $success_url;

    /**
     * @var string
     */
    public $fail_url;

    /**
     * @var string
     */
    public $hook_url;

    /**
     * @var string
     */
    public $custom_fields;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @return int
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * @return string
     */
    public function getFailUrl()
    {
        return $this->fail_url;
    }

    /**
     * @return string
     */
    public function getHookUrl()
    {
        return $this->hook_url;
    }

    /**
     * @return string
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }



}