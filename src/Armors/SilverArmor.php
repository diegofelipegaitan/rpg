<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:54 PM
 */

namespace Game\Armors;

use Game\Weapons\Attack;

class SilverArmor extends Armor
{

    public function getAbsorbPhysicalDamage(Attack $attack)
    {
        return floor($attack->getDamage() / 3);
    }

}