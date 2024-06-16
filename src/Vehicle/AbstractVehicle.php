<?php

namespace App\Vehicle;

abstract class AbstractVehicle implements VehicleInterface {
    protected string $name;
    protected int $maxPassengers;
    protected int $maxCargoWeight;
    protected float $fuelConsumptionPer100km;
    protected float $maxDistance;
    protected float $depreciationRate;
    protected float $driverCategoryCoefficient;

    public function getName(): string {
        return $this->name;
    }

    public function getMaxPassengers(): int {
        return $this->maxPassengers;
    }

    public function getMaxCargoWeight(): int {
        return $this->maxCargoWeight;
    }

    public function getFuelConsumptionPer100km(): float {
        return $this->fuelConsumptionPer100km;
    }

    public function getMaxDistance(): float {
        return $this->maxDistance;
    }

    public function getDepreciationRate(): float {
        return $this->depreciationRate;
    }

    public function getDriverCategoryCoefficient(): float {
        return $this->driverCategoryCoefficient;
    }

    public function calculateCost(float $distance, float $fuelPricePerLiter, float $driverRatePerKm): float {
        $fuelCost = ($distance / 100) * $this->fuelConsumptionPer100km * $fuelPricePerLiter;
        $driverCost = 3 * $driverRatePerKm * $this->driverCategoryCoefficient;
        return $driverCost + ($fuelCost * $this->depreciationRate);
    }
}
