<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable\GermanyDelegationDietImmutableFactory;

class GermanyDelegationDietStrategy extends DelegationDietWithMultiplierBaseAmountStrategyAbstract
{
    /**
     * @return GermanyDelegationDietImmutableFactory
     */
    public function getDelegationDietImmutableFactory(): GermanyDelegationDietImmutableFactory
    {
        return new GermanyDelegationDietImmutableFactory();
    }
}
