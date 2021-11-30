<?php

namespace Brukhanda\Lava;

class WithdrawalWebhookDTO extends DTO
{

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $payoff_id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var null
     */
    private $order_id = null;

}