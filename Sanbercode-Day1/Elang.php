<?php

class Elang
{
    use Hewan;
    use Fight;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 2;
        $this->skill = "terbang tinggi";
        $this->attackPower = 10;
        $this->defensePower = 5;
    }

    public function getInfoHewan()
    {
        return $str =   "Tipe : " .  __CLASS__ . '<br>' .
                        "Nama : {$this->getName()} <br>" .
                        "Jumlah Kaki : {$this->getLegs()} <br>" .
                        "Keahlian : {$this->getSkill()} <br>" .
                        "Base Health : {$this->getBaseHealth()} <br>" .
                        "Attack Power : {$this->getAttackPower()} <br>" .
                        "Defense Power : {$this->getDefensePower()} <br><br>";
    }
}