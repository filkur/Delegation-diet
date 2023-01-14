<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithDecreaseBaseAmountImmutable;

use App\Immutable\DelegationDiet\DelegationDietImmutableAbstract;

abstract class DelegationDietWithDecreaseBaseAmountImmutableAbstract extends DelegationDietImmutableAbstract
{
    /**
     * @param string $country
     * @param string $baseAmount
     * @param int $firstDecreaseDays
     * @param int $cyclicalDecreaseDays
     * @param int $firstReduction
     * @param int $cyclicalReduction
     */
    public function __construct(
        string               $country,
        string               $baseAmount,
        private readonly int $firstDecreaseDays,
        private readonly int $cyclicalDecreaseDays,
        private readonly int $firstReduction,
        private readonly int $cyclicalReduction
    )
    {
        parent::__construct($country, $baseAmount);
    }

    /**
     * @return int
     */
    public function getFirstDecreaseDays(): int
    {
        return $this->firstDecreaseDays;
    }

    /**
     * @return int
     */
    public function getCyclicalDecreaseDays(): int
    {
        return $this->cyclicalDecreaseDays;
    }

    /**
     * @return int
     */
    public function getFirstReduction(): int
    {
        return $this->firstReduction;
    }

    /**
     * @return int
     */
    public function getCyclicalReduction(): int
    {
        return $this->cyclicalReduction;
    }
}
