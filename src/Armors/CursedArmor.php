<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

class CursedArmor implements Armor
{

    public function absorbDamage($damage, Unit $unit)
    {
        $damage *= 2;
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }

}