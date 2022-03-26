<?php

namespace Lib\Adapter;

use Lib\Delivery\FastDelivery;

class FastDeliveryAdapter extends Delivery
{

    private $data;

    public function __construct(FastDelivery $fastDelivery)
    {
        $this->data = $fastDelivery->calculate();
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