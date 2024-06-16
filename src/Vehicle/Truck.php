<?php

namespace App\Vehicle;

class Truck extends AbstractVehicle {
    protected string $name = 'Truck';
    protected int $maxPassengers = 2;
    protected int $maxCargoWeight = 1000;
    protected float $fuelConsumptionPer100km = 25;
    protected float $maxDistance = 500;
    protected float $depreciationRate = 3;
    protected float $driverCategoryCoefficient = 1.5;
}
