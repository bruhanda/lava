<?php

namespace Brukhanda\Lava;

class InvoiceDTO extends DTO
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $order_id;

    /**
     * @var int
     */
    private $expire;

    /**
     * @var string
     */
    private $sum;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $success_url;

    /**
     * @var string
     */
    private $fail_url;

    /**
     * @var string
     */
    private $hook_url;

    /**
     * @var string
     */
    private $custom_fields;

}