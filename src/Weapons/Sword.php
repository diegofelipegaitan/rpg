<?php
/**
 * Created by PhpStorm.
 * User: diegogaitan
 * Date: 22/02/18
 * Time: 10:42 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

class Sword implements Weapon
{

    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} swings his sword to {$opponent->getName()}";

    }

}