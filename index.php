<?php


$felipe = new Soldier("Felipe");
$diego  = new Soldier("Diego");
$diego->setArmor(new GoldenArmor());
$felipe->setArmor(new EvasionArmor);

while (true) {
    $diego->attack($felipe);
    $felipe->attack($diego);
}