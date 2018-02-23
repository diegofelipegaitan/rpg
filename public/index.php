<?php

include "../vendor/autoload.php";
include "../src/utils.php";


$felipe = new \Game\Units\Soldier("Felipe");
$diego  = new \Game\Units\Archer("Diego");

$diego->setArmor(new \Game\Armors\EvasionArmor);
$diego->setWeapon(new \Game\Weapons\BasicBow);

$felipe->setArmor(new \Game\Armors\SilverArmor);
$felipe->setWeapon(new \Game\Weapons\BasicSword);

while (true) {
    $diego->attack($felipe);
    $felipe->attack($diego);
}
