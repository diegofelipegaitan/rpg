<?php

include "../vendor/autoload.php";
include "../src/utils.php";


$felipe = new \Game\Units\Soldier("Felipe", new \Game\Weapons\Sword\LongSword);
$diego  = new \Game\Units\Archer("Diego", new \Game\Weapons\Bow\CrossBow);

$felipe->setArmor(new \Game\Armors\EvasionArmor);
$diego->setArmor(new \Game\Armors\AbsorbArmor);

try {
    while (true) {
        $felipe->attack($diego);
        $diego->attack($felipe);
    }
} catch (\Exception $exception) {
    show($exception->getMessage());
}
