<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 10:36 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

class Bow implements Weapon
{

    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throws an arrow to {$opponent->getName()}";

    }

}