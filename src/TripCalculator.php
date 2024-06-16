<?php

namespace App;

use App\Vehicle\VehicleInterface;

class TripCalculator {
    private array $vehicles = [];
    private float $fuelPricePerLiter;
    private float $driverRatePerKm;

    public function __construct(float $fuelPricePerLiter, float $driverRatePerKm) {
        $this->fuelPricePerLiter = $fuelPricePerLiter;
        $this->driverRatePerKm = $driverRatePerKm;
    }

    public function addVehicle(VehicleInterface $vehicle): void {
        $this->vehicles[] = $vehicle;
    }

    public function calculate(int $numPassengers, float $cargoWeight, float $distance): array {
        $results = [];

        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getMaxPassengers() >= $numPassengers &&
                $vehicle->getMaxCargoWeight() >= $cargoWeight &&
                $vehicle->getMaxDistance() >= $distance) {

                $cost = $vehicle->calculateCost($distance, $this->fuelPricePerLiter, $this->driverRatePerKm);
                $results[] = [$vehicle->getName() => $cost];
            }
        }

        return $results;
    }
}
