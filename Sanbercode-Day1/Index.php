<?php

spl_autoload_register(function ($class)
{
    require_once $class . '.php';
});


$elang1 = new Elang("Elang_1");
$harimau1 = new Harimau("Harimau_1");
echo $elang1->atraksi(). '<br>';
echo $harimau1->atraksi(). '<br><hr style="border: 2px solid black">';

echo $elang1->getInfoHewan();
echo $harimau1->getInfoHewan() . '<hr style="border: 2px solid black">';

echo $elang1->serang($harimau1). '<br>';
$harimau1->diserang($elang1);

echo $harimau1->serang($elang1). '<br>';
$elang1->diserang($harimau1);

echo '<br>';

