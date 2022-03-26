<?php

namespace Lib\Adapter;

use Lib\Delivery\SlowDelivery;

class SlowDeliveryAdapter extends Delivery
{

    private $data;

    public function __construct(SlowDelivery $slowDelivery)
    {
        $this->data = $slowDelivery->calculate();
    }

    public function getPrice() :float
    {
        return 1;
    }

    function getDate():float
    {
        return  2;
    }

    function getError():string
    {
        return '';
    }
}