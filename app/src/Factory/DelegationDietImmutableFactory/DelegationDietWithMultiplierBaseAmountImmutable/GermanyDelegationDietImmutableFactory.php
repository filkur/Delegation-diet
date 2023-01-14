<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable\GermanyDelegationDietImmutable;

class GermanyDelegationDietImmutableFactory implements DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface
{
    /**
     * @return GermanyDelegationDietImmutable
     */
    public static function create(): GermanyDelegationDietImmutable
    {
        return new GermanyDelegationDietImmutable();
    }
}
