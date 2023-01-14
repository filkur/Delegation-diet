<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithDecreaseBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithDecreaseBaseAmountImmutableFactory\SpainDelegationDietImmutableFactory;

class SpainDelegationDietStrategy extends DelegationDietWithDecreaseBaseAmountStrategyAbstract
{
    /**
     * @return SpainDelegationDietImmutableFactory
     */
    public function getDelegationDietImmutableFactory(): SpainDelegationDietImmutableFactory
    {
        return new SpainDelegationDietImmutableFactory();
    }
}
