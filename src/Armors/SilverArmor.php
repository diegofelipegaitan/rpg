<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:54 PM
 */

namespace Game\Armors;

class SilverArmor extends Armor
{

    public function getAbsorbDamage($damage)
    {
        return floor($damage / 3);
    }

}