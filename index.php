<?php

// index.php

require_once 'Speedometer.php';

echo '<div style="text-align:center">';
echo '<h1 style="background-color:black; color:white">' . "Quest POO 6" . '</h1>';
echo '<h3 style="background-color:yellow; color:black">100 km représente ' . Speedometer::kmToMile(100) . ' miles.</h3>';
echo '<h3 style="background-color:yellow; color:black">50 miles représente ' . Speedometer::mileToKm(50) . ' km.</h3>';
echo '</div>';