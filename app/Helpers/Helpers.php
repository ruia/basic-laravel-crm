<?php

use Carbon\Carbon;
  
if (! function_exists('dateTimeToLocal')) {
    function dateTimeToLocal($date)
    {
        // POTENTIAL CHANGE: static timezone to a value stored on the user table?
        return Carbon::parse($date)->setTimezone('Europe/Lisbon')->toDateTimeString();
    }
}

if (! function_exists('formatMoney')) {
    function formatMoney($value)
    {
        return number_format($value, 2, ",");          
    }
}