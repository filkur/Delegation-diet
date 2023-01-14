<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithDecreaseBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithDecreaseBaseAmountImmutableFactory\DelegationDietImmutableWithDecreaseBaseAmountFactoryInterface;
use App\Immutable\DelegationDiet\DelegationDietWithDecreaseBaseAmountImmutable\DelegationDietWithDecreaseBaseAmountImmutableAbstract;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietStrategy;

abstract class DelegationDietWithDecreaseBaseAmountStrategyAbstract implements DelegationDietStrategy
{
    /**
     * @param int $daysOnDelegation
     * @return float
     */
    public function calculate(int $daysOnDelegation): float
    {
        $delegationDietImmutable = $this->getDelegationDietImmutable();

        $baseAmount = $delegationDietImmutable->getBaseAmount();
        $cyclicalDecreaseDays = $delegationDietImmutable->getCyclicalDecreaseDays();
        $firstDecreaseDays = $delegationDietImmutable->getFirstDecreaseDays();
        $cyclicalReduction = $delegationDietImmutable->getCyclicalReduction();

        $firstReduction = $delegationDietImmutable->getFirstReduction();

        $daysWithCyclicalDecrease = $daysOnDelegation - ($cyclicalDecreaseDays + $firstDecreaseDays);

        if ($daysOnDelegation > ($firstDecreaseDays + $cyclicalDecreaseDays)) {
            return $baseAmount * $firstDecreaseDays + ($cyclicalDecreaseDays * ($baseAmount - $firstReduction)) + $this->prepareCalculatedCyclicalDecrease($daysWithCyclicalDecrease, $baseAmount - ($firstReduction + $cyclicalReduction), $cyclicalReduction);
        }

        if ($daysOnDelegation > $firstDecreaseDays) {
            $daysWithDecrease = $daysOnDelegation - $firstDecreaseDays;
            return $baseAmount * $firstDecreaseDays + ($daysWithDecrease * ($baseAmount - $firstReduction));
        }

        return $baseAmount * $daysOnDelegation;
    }

    /**
     * @return DelegationDietImmutableWithDecreaseBaseAmountFactoryInterface
     */
    abstract public function getDelegationDietImmutableFactory(): DelegationDietImmutableWithDecreaseBaseAmountFactoryInterface;

    /**
     * @param int $daysWithCyclicalDecrease
     * @param int $startAmount
     * @param int $cyclicalReduction
     * @return int
     */

    /**
     * @return DelegationDietWithDecreaseBaseAmountImmutableAbstract
     */
    private function getDelegationDietImmutable(): DelegationDietWithDecreaseBaseAmountImmutableAbstract{
        return $this->getDelegationDietImmutableFactory()::create();
    }

    /**
     * @param int $daysWithCyclicalDecrease
     * @param int $startAmount
     * @param int $cyclicalReduction
     * @return int
     */
    private function prepareCalculatedCyclicalDecrease(int $daysWithCyclicalDecrease, int $startAmount, int $cyclicalReduction): int
    {
        $fullDecrease = 0;

        for ($i = 0; $i < $daysWithCyclicalDecrease; $i++) {
            $fullDecrease = $fullDecrease + $startAmount;
            if ($i % 2) {
                $startAmount = $startAmount - $cyclicalReduction;
            }
        }

        return $fullDecrease;
    }
}
