<?php

require_once 'Speedometer.php';

echo '1 km = ' . Speedometer::convertKmToMiles(10) . ' miles.' . '<br>'; 

echo '260 miles = ' . Speedometer::convertMilesToKm(260) . ' km.' . '<br>'; 