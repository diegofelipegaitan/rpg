<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:53 PM
 */

namespace Game\Armors;

class BronzeArmor extends Armor
{

    public function getAbsorbPhysicalDamage($attack)
    {
        return floor( $attack->getDamage() / 2 );
    }

}