<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable\GreatBritainDelegationDietImmutableFactory;

class GreatBritainDelegationDietStrategy extends DelegationDietWithMultiplierBaseAmountStrategyAbstract
{
    /**
     * @return GreatBritainDelegationDietImmutableFactory
     */
    public function getDelegationDietImmutableFactory(): GreatBritainDelegationDietImmutableFactory
    {
        return new GreatBritainDelegationDietImmutableFactory();
    }
}
