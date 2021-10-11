<?php

class Car {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $typeOfEnergy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $typeOfEnergy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeOfEnergy = $typeOfEnergy;
    }

    public function start() : string
    {
        $this->currentSpeed = 0;
        return "La voiture démarre!";
    }

    public function forward() : string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake() : string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
   
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function getEnergy() :string 
    {
        return $this->typeOfEnergy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}