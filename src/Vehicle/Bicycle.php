<?php

namespace App\Vehicle;

class Bicycle extends AbstractVehicle {
    protected string $name = 'Bicycle';
    protected int $maxPassengers = 1;
    protected int $maxCargoWeight = 20;
    protected float $fuelConsumptionPer100km = 0;
    protected float $maxDistance = 50;
    protected float $depreciationRate = 0.1;
    protected float $driverCategoryCoefficient = 1;
}
