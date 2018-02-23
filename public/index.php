<?php

include "../vendor/autoload.php";
include "../src/utils.php";

use Game\Armors\GoldenArmor;
use Game\Armors\EvasionArmor;
use Game\Units\Soldier;


$felipe = new Soldier("Felipe");
$diego  = new Soldier("Diego");
$diego->setArmor(new GoldenArmor);
$felipe->setArmor(new EvasionArmor);

while (true) {
    $diego->attack($felipe);
    $felipe->attack($diego);
}
