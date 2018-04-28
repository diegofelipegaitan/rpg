<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:49 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

abstract class Armor
{

    abstract public function getAbsorbDamage($damage);

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        $damage = $this->getAbsorbDamage($attack->getDamage());
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }
}