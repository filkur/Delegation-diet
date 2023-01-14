<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable\PolandDelegationDietImmutable;

class PolandDelegationDietImmutableFactory implements DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface
{
    /**
     * @return PolandDelegationDietImmutable
     */
    public static function create(): PolandDelegationDietImmutable
    {
        return new PolandDelegationDietImmutable();
    }
}
