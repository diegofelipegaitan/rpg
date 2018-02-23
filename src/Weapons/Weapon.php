<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:55 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

interface Weapon
{

    public function getDamage();

    public function getDescription(Unit $attacker,Unit $opponent);

}