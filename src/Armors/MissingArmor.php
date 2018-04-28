<?php
/**
 * Created by PhpStorm.
 * User: diegogaitan
 * Date: 27/04/18
 * Time: 11:31 PM
 */

namespace Game\Armors;


use Game\Weapons\Attack;

class MissingArmor extends Armor
{

    public function getAbsorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}