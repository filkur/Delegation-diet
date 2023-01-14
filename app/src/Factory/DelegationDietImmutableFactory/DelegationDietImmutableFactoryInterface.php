<?php

namespace App\Factory\DelegationDietImmutableFactory;

use App\Immutable\DelegationDiet\DelegationDietImmutableAbstract;

interface DelegationDietImmutableFactoryInterface
{
    /**
     * @return DelegationDietImmutableAbstract
     */
    public static function create(): DelegationDietImmutableAbstract;
}
