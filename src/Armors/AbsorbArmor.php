<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

class AbsorbArmor extends Armor
{

    public function absorbDamage($damage, Unit $unit)
    {
        if (!rand(0, 10) ) {
            $damage = $this->getAbsorbDamage($damage);
            show("{$unit->getActualHp()} {$unit->getName()} absorb {$damage} hit points");
            return -$damage;
        }
        return $damage;
    }

    public function getAbsorbDamage($damage)
    {
        return floor($damage/2);
    }

}