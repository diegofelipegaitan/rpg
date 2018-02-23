<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:55 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

abstract class Weapon
{
    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    abstract public function getDescription(Unit $attacker,Unit $opponent);

}