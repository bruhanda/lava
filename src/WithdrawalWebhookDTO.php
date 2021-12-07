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
    public function getPayoffId()
    {
        return $this->payoff_id;
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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return null
     */
    public function getOrderId()
    {
        return $this->order_id;
    }



}