<?php

namespace App\Vehicle;

interface VehicleInterface {
    public function getName(): string;
    public function getMaxPassengers(): int;
    public function getMaxCargoWeight(): int;
    public function getFuelConsumptionPer100km(): float;
    public function getMaxDistance(): float;
    public function getDepreciationRate(): float;
    public function getDriverCategoryCoefficient(): float;
    public function calculateCost(float $distance, float $fuelPricePerLiter, float $driverRatePerKm): float;
}
