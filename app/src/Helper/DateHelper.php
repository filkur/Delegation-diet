<?php

namespace App\Helper;

class DateHelper
{
    /**
     * @param string $date
     * @return bool
     */
    public static function isWeekend(string $date): bool
    {
        return (date('N', strtotime($date)) >= 6);
    }
}
