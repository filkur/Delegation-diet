<?php

namespace App\Factory\DelegationDietImmutableFactory\DelegationDietWithDecreaseBaseAmountImmutableFactory;

use App\Factory\DelegationDietImmutableFactory\DelegationDietImmutableFactoryInterface;
use App\Immutable\DelegationDiet\DelegationDietWithDecreaseBaseAmountImmutable\DelegationDietWithDecreaseBaseAmountImmutableAbstract;

interface DelegationDietImmutableWithDecreaseBaseAmountFactoryInterface extends DelegationDietImmutableFactoryInterface
{
    /**
     * @return DelegationDietWithDecreaseBaseAmountImmutableAbstract
     */
    public static function create(): DelegationDietWithDecreaseBaseAmountImmutableAbstract;
}
