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
        if (!rand(0, 10) ) {
            $damage = $this->getAbsorbDamage($attack->getDamage());
            show("{$unit->getActualHp()} {$unit->getName()} absorb {$damage} hit points");
            return -$damage;
        }
        return $attack->getDamage();
    }

    public function getAbsorbDamage($damage)
    {
        return floor($damage/2);
    }

}