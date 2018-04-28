<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:55 PM
 */

namespace Game\Armors;

class GoldenArmor extends Armor
{

    public function getAbsorbDamage($damage)
    {
        return $damage / 5;
    }

}