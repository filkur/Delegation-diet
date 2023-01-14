<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy;

use App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable\PolandDelegationDietImmutableFactory;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietStrategy;

class PolandDelegationDietStrategy extends DelegationDietWithMultiplierBaseAmountStrategyAbstract
{
    public function getDelegationDietImmutableFactory(): PolandDelegationDietImmutableFactory
    {
        return new PolandDelegationDietImmutableFactory();
    }
}
