<?php

namespace Brukhanda\Lava;

class WithdrawalWebhookDTO extends DTO
{

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $payoff_id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var null
     */
    public $order_id = null;

}