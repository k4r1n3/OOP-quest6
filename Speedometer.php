<?php

class Speedometer {

    public const CONVERSION_MILESTOKM = 1.609344;
    public const CONVERSION_KMTOMILES = 0.621371;

    private int $miles;
    private int $km;

    public static function convertMilesToKm (float $miles): float {
        return $miles / self::CONVERSION_MILESTOKM;
    }

    public static function convertKmToMiles (float $km): float {
        return $km * self::CONVERSION_KMTOMILES;
    }
}