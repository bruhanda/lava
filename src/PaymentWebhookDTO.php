<?php

namespace Brukhanda\Lava;

class PaymentWebhookDTO extends DTO
{
    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $invoice_id;

    /**
     * @var string
     */
    private $order_id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $pay_time;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $custom_fields;

}