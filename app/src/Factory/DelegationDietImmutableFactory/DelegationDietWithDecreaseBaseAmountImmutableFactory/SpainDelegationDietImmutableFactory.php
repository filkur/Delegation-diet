<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithDecreaseBaseAmountImmutableFactory;

use App\Immutable\DelegationDiet\DelegationDietWithDecreaseBaseAmountImmutable\SpainDelegationDietImmutable;

class SpainDelegationDietImmutableFactory implements DelegationDietImmutableWithDecreaseBaseAmountFactoryInterface
{
    /**
     * @return SpainDelegationDietImmutable
     */
    public static function create(): SpainDelegationDietImmutable
    {
        return new SpainDelegationDietImmutable();
    }
}
