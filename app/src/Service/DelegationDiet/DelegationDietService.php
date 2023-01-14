<?php

namespace App\Service\DelegationDiet;

use App\Constant\DelegationDietRequest;
use App\Helper\DateHelper;
use App\Service\DelegationDiet\DelegationDietStrategy\DelegationDietContext;

class DelegationDietService implements DelegationDietServiceInterface
{
    /**
     * @param DelegationDietContext $delegationDietContext
     */
    public function __construct(
        private readonly DelegationDietContext $delegationDietContext
    )
    {
    }

    /**
     * @param array $requestData
     * @return int
     */
    public function getDelegationDiet(array $requestData): int
    {
        return $this->delegationDietContext->calculateDelegationDiet(
            $this->prepareDaysOnDelegation($requestData[DelegationDietRequest::DELEGATION][DelegationDietRequest::DAYS]),
            $requestData[DelegationDietRequest::DELEGATION][DelegationDietRequest::COUNTRY]
        );
    }

    /**
     * @param array $delegationDays
     * @return int
     */
    private function prepareDaysOnDelegation(array $delegationDays): int
    {
        return count(array_filter($delegationDays, function ($day) {
            return !DateHelper::isWeekend($day[DelegationDietRequest::DATE]) && $day[DelegationDietRequest::HOURS] >= DelegationDietRequest::MIN_HOURS_TO_CALCULATE;
        }));
    }
}
