<?php

namespace App\Service\DelegationDiet;

interface DelegationDietServiceInterface
{
    public function getDelegationDiet(array $requestData): int;
}
