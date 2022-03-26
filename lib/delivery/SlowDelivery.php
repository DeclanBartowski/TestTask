<?php

namespace Lib\Delivery;


class SlowDelivery
{

    /**
     * @var string
     */
    private $baseUrl = '';

    private $sourceKlads;
    private $targetKladr;
    private $weight;

    public function __construct(string $sourceKladr, string $targetKladr, float $weight)
    {
        $this->sourceKlads = $sourceKladr;
        $this->targetKladr = $targetKladr;
        $this->weight = $weight;
    }

    private function getCoefficient(): float
    {

        return 5;
    }

    private function getDate()
    {

        return rand(0, 100);
    }

    private function getError(): string
    {

        return '';
    }

    public function calculate()
    {
        return json_encode([
            'price' => $this->getCoefficient(),
            'date' => $this->getDate(),
            'error' => $this->getError(),
        ]);
    }


}