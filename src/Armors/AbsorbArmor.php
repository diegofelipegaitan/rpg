<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

class AbsorbArmor implements Armor
{

    public function absorbDamage($damage, Unit $unit)
    {
        if (true or !rand(0, 4) ) {

            show("{$unit->getName()} absorb the damage");
            die();
            return -$damage;
        }
        return $damage;
    }

}