<?php

namespace Lib\Delivery;

class FastDelivery
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

    private function getPrice(): float
    {

        return 505.4;
    }

    private function getPeriod(): int
    {

        return 4;
    }

    private function getError(): string
    {
        return '';
    }

    public function calculate()
    {
        return json_encode([
            'price' => $this->getPrice(),
            'period' => $this->getPeriod(),
            'error' => $this->getError(),
        ]);
    }


}