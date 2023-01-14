<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable\GreatBritainDelegationDietImmutable;

class GreatBritainDelegationDietImmutableFactory implements DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface
{
    /**
     * @return GreatBritainDelegationDietImmutable
     */
    public static function create(): GreatBritainDelegationDietImmutable
    {
        return new GreatBritainDelegationDietImmutable();
    }
}
