<?php

function haversineDistance($latitude1, $longitude1, $latitude2, $longitude2)
{
    $earthRadius = 6371; // Earth radius in kilometers

    $latDelta = deg2rad($latitude2 - $latitude1);
    $lonDelta = deg2rad($longitude2 - $longitude1);

    $a = sin($latDelta / 2) * sin($latDelta / 2) +
        cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) *
        sin($lonDelta / 2) * sin($lonDelta / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    return $earthRadius * $c;
}