<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Constant\DelegationDietCountries;

class GreatBritainDelegationDietImmutable extends DelegationDietWithMultiplierBaseAmountImmutableAbstract
{
    const BASE_AMOUNT = 75;
    const BASE_AMOUNT_DAYS = 7;
    const MULTIPLIER = 4;

    public function __construct()
    {
        parent::__construct(
            DelegationDietCountries::GREAT_BRITAIN,
            self::BASE_AMOUNT,
            self::BASE_AMOUNT_DAYS,
            self::MULTIPLIER
        );
    }
}
