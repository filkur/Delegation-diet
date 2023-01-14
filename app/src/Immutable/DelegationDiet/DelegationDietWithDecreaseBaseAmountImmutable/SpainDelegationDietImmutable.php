<?php

namespace App\Immutable\DelegationDiet\DelegationDietWithDecreaseBaseAmountImmutable;

use App\Constant\DelegationDietCountries;
use App\Immutable\DelegationDiet\DelegationDietImmutableAbstract;

/**
 * W systemie consty powinny być tak naprawdę przerzucone do .enva i je pobierać z kontenera serwisowego aby można było je konfigurować lub wrzucić do bazy
 */
class SpainDelegationDietImmutable extends DelegationDietWithDecreaseBaseAmountImmutableAbstract
{
    const BASE_AMOUNT = 150;
    const FIRST_DECREASE_DAYS = 3;
    const CYCLICAL_DECREASE_DAYS = 2;
    const FIRST_REDUCTION = 50;
    const CYCLICAL_REDUCTION = 25;

    public function __construct()
    {
        parent::__construct(
            DelegationDietCountries::SPAIN,
            self::BASE_AMOUNT,
            self::FIRST_DECREASE_DAYS,
            self::CYCLICAL_DECREASE_DAYS,
            self::FIRST_REDUCTION,
            self::CYCLICAL_REDUCTION
        );
    }
}
