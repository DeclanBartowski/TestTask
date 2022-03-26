<?php

namespace Lib\Adapter;

abstract class Delivery
{

    abstract function getPrice(): float;

    abstract function getDate(): float;

    abstract function getError(): string;

    public function calculate(): array
    {
        return [
            'price' => $this->getPrice(),
            'date' => $this->getDate(),
            'error' => $this->getError(),
        ];
    }

}