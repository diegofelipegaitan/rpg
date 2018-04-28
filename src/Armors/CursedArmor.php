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
        $damage = $$this->getAbsorbDamage($attack->getDamage());
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }

    public function getAbsorbDamage($damage)
    {
        return floor($damage * 2);
    }


}