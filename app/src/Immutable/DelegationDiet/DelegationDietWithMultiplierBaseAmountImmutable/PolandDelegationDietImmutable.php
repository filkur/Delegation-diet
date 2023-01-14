<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Constant\DelegationDietCountries;

class PolandDelegationDietImmutable extends DelegationDietWithMultiplierBaseAmountImmutableAbstract
{
    const BASE_AMOUNT = 10;
    const BASE_AMOUNT_DAYS = 7;
    const MULTIPLIER = 2;

    public function __construct()
    {
        parent::__construct(
            DelegationDietCountries::POLAND,
            self::BASE_AMOUNT,
            self::BASE_AMOUNT_DAYS,
            self::MULTIPLIER
        );
    }
}
