<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Immutable\DelegationDiet\DelegationDietImmutableAbstract;

abstract class DelegationDietWithMultiplierBaseAmountImmutableAbstract extends DelegationDietImmutableAbstract
{
    /**
     * @param string $country
     * @param int $baseAmount
     * @param int $baseAmountDays
     * @param float $multiplier
     */
    public function __construct(
        string                 $country,
        int                    $baseAmount,
        private readonly int   $baseAmountDays,
        private readonly float $multiplier
    )
    {
        parent::__construct($country, $baseAmount);
    }

    /**
     * @return int
     */
    public function getBaseAmountDays(): int
    {
        return $this->baseAmountDays;
    }

    /**
     * @return float
     */
    public function getMultiplier(): float
    {
        return $this->multiplier;
    }
}
