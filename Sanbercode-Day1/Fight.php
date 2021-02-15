<?php
trait Fight
{
    use Hewan;
    private $attackPower;
    private $defensePower;
    private $damage;

    public function serang($musuh)
    {
        return "$this->name sedang menyerang " . $musuh->getName();
    }

    public function diserang($musuh): void
    {
        $damage = $musuh->getAttackPower();
        echo $this->name . " sedang diserang oleh " . $musuh->getName() . " dengan damage $damage" . '<br>';
        $this->defense($damage, $this);
        echo $this->name . " Current Health : " . $this->getHealth() . ",  Status : {$this->getStatus()} <br><br>";
    }

    public function defense($damage, $musuh): void
    {

        $deltaDamage = $damage / $musuh->getDefensePower();
        $this->damage += $deltaDamage;

        if ($this->getHealth() <= 0)
        {
            $this->status = false;
            $this->damage = $this->maxHealth();
        }
    }

    public function maxHealth()
    {
        return $this->baseHealth;
    }

    public function getHealth()
    {
        return $this->maxHealth() - $this->damage;
    }


    public function getAttackPower()
    {
        return $this->attackPower;
    }


    public function getDefensePower()
    {
        return $this->defensePower;
    }

    public function getStatus()
    {
        if($this->status)
        {
            return "Hidup";
        } else {
            return "Mati";
        }
    }

}
