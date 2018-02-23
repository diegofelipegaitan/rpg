<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throw an arrow to {$opponent->getName()}";

    }

}