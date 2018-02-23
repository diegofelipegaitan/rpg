<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:54 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

class SilverArmor implements Armor
{

    public function absorbDamage($damage, Unit $unit)
    {
        return $damage / 3;
    }

}