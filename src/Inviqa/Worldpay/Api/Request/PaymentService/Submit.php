<?php

namespace Inviqa\Worldpay\Api\Request\PaymentService;

use Inviqa\Worldpay\Api\Request\PaymentService\Submit\Order;
use Inviqa\Worldpay\Api\XmlNodeDefaults;

class Submit extends XmlNodeDefaults
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function xmlChildren()
    {
        return [$this->order];
    }
}
