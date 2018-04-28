<?php

include "../vendor/autoload.php";
include "../src/utils.php";


$felipe = new \Game\Units\Unit("Felipe", new \Game\Weapons\Sword\LongSword);
$diego  = new \Game\Units\Unit("Diego", new \Game\Weapons\Bow\FireBow);

$felipe->setArmor(new \Game\Armors\GoldenArmor);
//$diego->setArmor(new \Game\Armors\SilverArmor);

try {
    while (true) {
        $felipe->attack($diego);
        $diego->attack($felipe);
    }
} catch (\Exception $exception) {
    show($exception->getMessage());
}
