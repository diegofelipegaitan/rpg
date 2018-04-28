<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

class CursedArmor extends Armor
{

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        $damage = $this->getAbsorbDamage($attack);
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }

    public function getAbsorbMagicalDamage(Attack $attack)
    {
        return floor($attack->getDamage() * 2);
    }

    public function getAbsorbPhysicalDamage(Attack $attack)
    {
        return floor($attack->getDamage() * 1.5);
    }

}