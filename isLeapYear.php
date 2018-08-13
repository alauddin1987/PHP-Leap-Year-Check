<?php
/**
 * check is the given year is leap year
 * @param int $year
 * @throws Exception
 * @return bool
 */
function isTheYearIsLeapYear($year)
{
    if(!is_int($year) || $year <= '1970') {
        throw new Exception('The given year seems to be not a valid year');
    }

    if($year % 4 == 0 && ($year % 400 == 0 || $year % 100 != 0)) {
        return true;
    }

    return false;
}

//use the function
try{
    if(isTheYearIsLeapYear(1800)) {
        echo "Leap year";
    } else {
        echo "Not a leap year";
    }
} catch(Exception $e) {
    echo $e->getMessage();
}



