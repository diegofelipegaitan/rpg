<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:58 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

class BasicSword extends Sword
{

    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} swing his sword to {$opponent->getName()}";

    }

}