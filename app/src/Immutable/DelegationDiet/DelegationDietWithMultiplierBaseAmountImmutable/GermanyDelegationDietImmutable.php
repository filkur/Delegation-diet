<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithMultiplierBaseAmountImmutable;

use App\Constant\DelegationDietCountries;

class GermanyDelegationDietImmutable extends DelegationDietWithMultiplierBaseAmountImmutableAbstract
{
    const BASE_AMOUNT = 50;
    const BASE_AMOUNT_DAYS = 7;
    const MULTIPLIER = 1.75;

    public function __construct()
    {
        parent::__construct(
            DelegationDietCountries::GERMANY,
            self::BASE_AMOUNT,
            self::BASE_AMOUNT_DAYS,
            self::MULTIPLIER
        );
    }
}
