<?php

use PHPUnit\Framework\TestCase;
use App\TripCalculator;
use App\Vehicle\Bus;

class TripCalculatorTest extends TestCase {
    public function testCalculate() {
        $fuelPricePerLiter = 1.2;
        $driverRatePerKm = 0.5;
        $tripCalculator = new TripCalculator($fuelPricePerLiter, $driverRatePerKm);

        $tripCalculator->addVehicle(new Bus());

        $results = $tripCalculator->calculate(10, 100, 150);
        $this->assertCount(1, $results);
        $this->assertArrayHasKey('Bus', $results[0]);
    }
}
