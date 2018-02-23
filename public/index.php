<?php

include "../vendor/autoload.php";
include "../src/utils.php";


$felipe = new \Game\Units\Soldier("Felipe", new \Game\Weapons\BasicSword);
$diego  = new \Game\Units\Archer("Diego", new \Game\Weapons\BasicBow);

$diego->setArmor(new \Game\Armors\EvasionArmor);
$felipe->setArmor(new \Game\Armors\SilverArmor);

try {
    while (true) {
        $felipe->attack($diego);
        $diego->attack($felipe);
    }
} catch (\Exception $exception) {
    show($exception->getMessage());
}
