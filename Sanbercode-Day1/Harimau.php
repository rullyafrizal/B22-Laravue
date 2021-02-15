<?php

class Harimau
{
    use Hewan;
    use Fight;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->skill = "lari cepat";
        $this->attackPower = 7;
        $this->defensePower = 8;
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
