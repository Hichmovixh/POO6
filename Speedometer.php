<?php

class Speedometer
{
    const CONVERSION_MULTIPLIER = 6.21;

    static public function convertKmToMiles(float $speed): float
    {
        return $speed * self::CONVERSION_MULTIPLIER;
    }

    static public function convertMilesToKm(float $speed): float
    {
        return $speed / self::CONVERSION_MULTIPLIER;
    }
}
