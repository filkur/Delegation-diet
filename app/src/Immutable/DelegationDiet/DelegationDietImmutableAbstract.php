<?php

namespace App\Immutable\DelegationDiet;

abstract class DelegationDietImmutableAbstract
{

    /**
     * @param string $country
     * @param int $baseAmount
     */
    public function __construct(
        private readonly string $country,
        private readonly int    $baseAmount
    )
    {
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return int
     */
    public function getBaseAmount(): int
    {
        return $this->baseAmount;
    }
}
