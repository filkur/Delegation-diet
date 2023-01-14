<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietImmutableFactoryInterface;

interface DelegationDietStrategy
{
    /**
     * @param int $daysOnDelegation
     * @return float
     */
    public function calculate(int $daysOnDelegation): float;

    public function getDelegationDietImmutableFactory(): DelegationDietImmutableFactoryInterface;
}