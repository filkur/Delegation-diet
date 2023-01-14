<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable\DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface;
use App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable\DelegationDietWithMultiplierBaseAmountImmutableAbstract;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietStrategy;

abstract class DelegationDietWithMultiplierBaseAmountStrategyAbstract implements DelegationDietStrategy
{
    /**
     * @param int $daysOnDelegation
     * @return float
     */
    public function calculate(int $daysOnDelegation): float
    {
        $delegationDietImmutable = $this->getDelegationDietImmutable();

        $baseAmountDays = $delegationDietImmutable->getBaseAmountDays();
        $baseAmount = $delegationDietImmutable->getBaseAmount();
        $multiplier = $delegationDietImmutable->getMultiplier();

        if ($daysOnDelegation > $baseAmountDays) {
            $bonusDays = $daysOnDelegation - $baseAmountDays;

            return $baseAmountDays * $baseAmount + $bonusDays * ($baseAmount * $multiplier);
        }

        return $daysOnDelegation * $baseAmount;
    }

    /**
     * @return DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface
     */
    abstract public function getDelegationDietImmutableFactory(): DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface;

    /**
     * @return DelegationDietWithMultiplierBaseAmountImmutableAbstract
     */
    private function getDelegationDietImmutable(): DelegationDietWithMultiplierBaseAmountImmutableAbstract
    {
        return $this->getDelegationDietImmutableFactory()::create();
    }
}
