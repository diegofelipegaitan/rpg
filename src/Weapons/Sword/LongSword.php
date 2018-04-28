<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:58 PM
 */

namespace Game\Weapons\Sword;

use Game\Units\Unit;
use Game\Weapons\Weapon;

class LongSword extends Weapon
{

    protected $damage = 30;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} swings his long sword to {$opponent->getName()} and makes {$this->getDamage()} damage";

    }

}