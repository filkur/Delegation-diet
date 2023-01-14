<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Factory\DelegationDietImmutableFactory\DelegationDietImmutableFactoryInterface;
use App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable\DelegationDietWithMultiplierBaseAmountImmutableAbstract;

interface DelegationDietImmutableWithMultiplierBaseAmountImmutableFactoryInterface extends DelegationDietImmutableFactoryInterface
{
    /**
     * @return DelegationDietWithMultiplierBaseAmountImmutableAbstract
     */
    public static function create(): DelegationDietWithMultiplierBaseAmountImmutableAbstract;
}
