<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:55 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

class GoldenArmor extends Armor
{

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        $damage = $attack->isPhysical() ? $this->getAbsorbDamage($attack->getDamage()) : $attack->getDamage() * 2;
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }

    public function getAbsorbDamage($damage)
    {
        return $damage / 5;
    }

}