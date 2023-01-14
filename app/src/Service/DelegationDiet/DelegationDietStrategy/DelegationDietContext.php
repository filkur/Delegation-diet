<?php

namespace App\Service\DelegationDiet\DelegationDietStrategy;

use App\Constant\DelegationDietCountries;
use App\Exception\DelegationCountryUnprocessableEntityHttpException;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithDecreaseBaseAmountStrategy\SpainDelegationDietStrategy;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy\GermanyDelegationDietStrategy;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy\GreatBritainDelegationDietStrategy;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietWithMultiplierBaseAmountStrategy\PolandDelegationDietStrategy;

class DelegationDietContext
{
    private ?DelegationDietStrategy $delegationDietStrategy = null;

    /**
     * @param int $daysOnDelegation
     * @param string $country
     * @return int
     */
    public function calculateDelegationDiet(int $daysOnDelegation, string $country): int
    {
        match ($country) {
            DelegationDietCountries::POLAND => $this->setDelegationDietStrategy(new PolandDelegationDietStrategy()),
            DelegationDietCountries::GERMANY => $this->setDelegationDietStrategy(new GermanyDelegationDietStrategy()),
            DelegationDietCountries::GREAT_BRITAIN => $this->setDelegationDietStrategy(new GreatBritainDelegationDietStrategy()),
            DelegationDietCountries::SPAIN => $this->setDelegationDietStrategy(new SpainDelegationDietStrategy()),
            default => DelegationCountryUnprocessableEntityHttpException::throw()
        };

        return $this->delegationDietStrategy->calculate($daysOnDelegation);
    }

    /**
     * @param DelegationDietStrategy $delegationDietStrategy
     * @return void
     */
    private function setDelegationDietStrategy(DelegationDietStrategy $delegationDietStrategy): void
    {
        $this->delegationDietStrategy = $delegationDietStrategy;
    }
}
