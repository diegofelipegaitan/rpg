<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:57 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

class EvasionArmor extends Armor
{

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        if (!rand(0, 10)) {
            show("{$unit->getName()} evaded the attack");
            return 0;
        }
        return $this->getAbsorbDamage($attack->getDamage());
    }

    public function getAbsorbDamage($damage)
    {
        return $damage;
    }

}