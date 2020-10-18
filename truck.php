<?php


// truck.php



class Truck extends Vehicle {
    /*
    * string
    */
    private $energy;

    /*
     * integer
     */
    private $loadCapacity;


    /*
     * integer
     */
    private $loading;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity) {
        parent::__construct($color, $nbSeats);
        $this->loadCapacity = $loadCapacity;
        $this->setEnergy($energy);
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getLoadCapacity(): Truck
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(string $loadCapacity): Truck
    {
        if($loadCapacity >= 0){
            $this->loadCapacity = $loadCapacity;
        }
        return $this;
    }

    public function getLoading(): Truck
    {
        return $this->loading;
    }

    public function setLoading(string $loading): Truck
    {
        if($loading >= 0){
            $this->loading = $loading;
        }
        return $this;
    }

    public function isLoaded(): string
    {
        if($this->loading <= $this->loadCapacity)
        {
            return 'Is filling';
        }
        return 'Is Full';
    }



}