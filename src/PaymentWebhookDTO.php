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

}