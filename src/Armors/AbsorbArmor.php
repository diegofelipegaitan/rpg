<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

class AbsorbArmor extends Armor
{

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        if (!rand(0, 10)) {
            $damage = $this->getAbsorbDamage($attack);
            show("{$unit->getActualHp()} {$unit->getName()} absorb {$damage} hit points");
            return -$damage;
        }
        return $attack->getDamage();
    }

    public function getAbsorbPhysicalDamage(Attack $attack)
    {
        return floor($attack->getDamage() / 2);
    }

    public function getAbsorbMagicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 4;
    }

}