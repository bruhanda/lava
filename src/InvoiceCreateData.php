<?php

namespace Brukhanda\Lava;

class InvoiceCreateData
{
    /**
     * @var string
     */
    private $wallet_to;

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
    private $order_id;

    /**
     * @var string
     */
    private $hook_url;

    /**
     * @var string
     */
    private $success_url;

    /**
     * @var string
     */
    private $fail_url;

    /**
     * @var int
     */
    private $expire;

    /**
     *  С кого списывать комиссию
     *  1 - Списывать с клиента
     *  0 - Списывать с магазина
     *  По умолчанию: 0
     *
     * @var int
     */
    private $subtract;

    /**
     * @var string
     */
    private $custom_fields;

    /**
     * @var string
     */
    private $comment;

    /**
     * @param $wallet_to
     * @param $sum
     */
    public function __construct($wallet_to, $sum)
    {
        $this->wallet_to = $wallet_to;
        $this->sum = $sum;
    }

    /**
     * @param int $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @param string $hook_url
     */
    public function setHookUrl($hook_url)
    {
        $this->hook_url = $hook_url;
    }

    /**
     * @param string $success_url
     */
    public function setSuccessUrl($success_url)
    {
        $this->success_url = $success_url;
    }

    /**
     * @param string $fail_url
     */
    public function setFailUrl($fail_url)
    {
        $this->fail_url = $fail_url;
    }

    /**
     * @param int $expire
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
    }

    /**
     * @param int $subtract
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;
    }

    /**
     * @param string $custom_fields
     */
    public function setCustomFields($custom_fields)
    {
        $this->custom_fields = $custom_fields;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

}