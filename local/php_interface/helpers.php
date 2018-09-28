<?php

use Bitrix\Main\Type\DateTime;

function is_working_hour($workdayStart = 9, $workdayEnd = 18, $dateTime = null)
{
    if (!$dateTime) {
        $dateTime = new DateTime();
    }
    $currentHour = $dateTime->toUserTime()->format('H');
    if ($currentHour >= $workdayStart && $currentHour < $workdayEnd) {
        return true;
    }
    return false;
}