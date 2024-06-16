<?php

require 'vendor/autoload.php';

use App\TripCalculator;
use App\Vehicle\Bus;
use App\Vehicle\Truck;
use App\Vehicle\Bicycle;

$fuelPricePerLiter = 1.2;
$driverRatePerKm = 0.5;

$tripCalculator = new TripCalculator($fuelPricePerLiter, $driverRatePerKm);

// Add vehicles to the trip calculator
$tripCalculator->addVehicle(new Bus());
$tripCalculator->addVehicle(new Truck());
$tripCalculator->addVehicle(new Bicycle());

// Example trip parameters
$numPassengers = 1;
$cargoWeight = 100;
$distance = 50;

$results = $tripCalculator->calculate($numPassengers, $cargoWeight, $distance);

foreach ($results as $result) {
    foreach ($result as $vehicle => $cost) {
        echo "$vehicle: $$cost\n";
    }
}
