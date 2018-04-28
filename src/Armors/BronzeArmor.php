<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:53 PM
 */

namespace Game\Armors;

class BronzeArmor extends Armor
{

    public function getAbsorbDamage($damage)
    {
        return floor( $damage / 2 );
    }

}