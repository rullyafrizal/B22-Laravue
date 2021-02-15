<?php

trait Hewan
{
    private string $name;
    private int $baseHealth = 50;
    private int $legs;
    private string $skill;
    private bool $status = true;


    public function getName(): string
    {
        return $this->name;
    }


    public function atraksi()
    {
        return "$this->name sedang $this->skill";
    }

    abstract public function getInfoHewan();

    public function getBaseHealth(): int
    {
        return $this->baseHealth;
    }

    public function getLegs(): int
    {
        return $this->legs;
    }

    public function getSkill(): string
    {
        return $this->skill;
    }

}
