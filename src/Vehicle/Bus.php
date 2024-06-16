<?php

namespace App\Vehicle;

class Bus extends AbstractVehicle {
    protected string $name = 'Bus';
    protected int $maxPassengers = 32;
    protected int $maxCargoWeight = 300;
    protected float $fuelConsumptionPer100km = 20;
    protected float $maxDistance = 200;
    protected float $depreciationRate = 2;
    protected float $driverCategoryCoefficient = 2;
}
