<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons\Bow;

use Game\Units\Unit;
use Game\Weapons\Weapon;

class BasicBow extends Weapon
{

    protected $damage = 10;

    public function getDescription(Unitt $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throws an arrow to {$opponent->getName()} and makes {$this->getDamage()} damage";

    }

}