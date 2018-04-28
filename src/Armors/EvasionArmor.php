<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:57 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

class EvasionArmor extends Armor
{

    public function absorbDamage($damage, Unit $unit)
    {
        if (!rand(0, 10)) {
            show("{$unit->getName()} evaded the attack");
            return 0;
        }
        return $this->getAbsorbDamage($damage);
    }

    public function getAbsorbDamage($damage)
    {
        return $damage;
    }

}