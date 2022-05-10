<?php

namespace App\Services;

use Faker\Provider\DateTime;

class DateCheck
{
    public function isValid($strDate, $strFormat = "d/m/Y", $strTimeZone = FALSE)
    {
        $date = \DateTime::createFromFormat($strFormat, $strDate);

        if ($date && (int)$date->format('Y') < 1900) {
            return false;
        }

        return $date && \DateTime::getLastErrors()["warning_count"] == 0 && \DateTime::getLastErrors()['error_count'] == 0;
    }
}
