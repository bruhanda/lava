<?php

namespace Brukhanda\Lava;

class WithdrawCreateData
{
    /**
     * @var string
     */
    private $account;

    /**
     * Number
     * Сумма, с указанием двух знаков после точки
     * Пример: 10.00
     *
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $order_id;

    /**
     * @var string
     */
    private $hook_ulr;

    /**
     * От куда списывать комиссию
     * 1 - с баланса, 0 - с суммы
     *
     * @var int
     */
    private $subtract = 0;

    /**
     * Сервис вывода
     * Пример: card
     *
     * @var string
     */
    private $service;

    /**
     * Номер счета получателя
     *
     * @var string
     */
    private $wallet_to;

    /**
     * @var string
     */
    private $comment;

    /**
     * @param $account
     * @param $amount
     * @param $service
     * @param $wallet_to
     */
    public function __construct($account, $amount, $service, $wallet_to)
    {
        $this->account = $account;
        $this->amount = $amount;
        $this->service = $service;
        $this->wallet_to = $wallet_to;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId(string $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param string $hook_ulr
     */
    public function setHookUlr(string $hook_ulr): void
    {
        $this->hook_ulr = $hook_ulr;
    }

    /**
     * @param int $subtract
     */
    public function setSubtract(int $subtract): void
    {
        $this->subtract = $subtract;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        return (array) $this;
    }



}