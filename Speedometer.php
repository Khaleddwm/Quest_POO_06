<?php

// Speedometer.php

class Speedometer {

    /**
     * @var float
     */
    protected const MILE_TO_KM = 1.609;
    /**
     * @var float
     */
    protected const KM_TO_MILE = 0.6215;

    /**
     * @return float
     */
    public static function mileToKm($miles) :float
    {
        return number_format($miles * self::MILE_TO_KM, 2);
    }

    /**
     * @return float
     */
    public static function kmToMile($km) :float
    {
        return number_format($km * self::KM_TO_MILE, 2);
    }
}