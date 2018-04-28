<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons\Bow;

use Game\Units\Unit;
use Game\Weapons\Weapon;

class CrossBow extends Weapon
{

    protected $damage = 25;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throws many arrows with his CrossBow to {$opponent->getName()} and makes {$this->getDamage()} damage";

    }

}