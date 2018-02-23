<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:44 PM
 */

namespace Game\Units;

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} throw an arrow to {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }


}