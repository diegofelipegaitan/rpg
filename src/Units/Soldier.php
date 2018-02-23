<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:44 PM
 */

namespace Game\Units;

class Soldier extends Unit
{

    protected $damage = 40;
    protected $armor  = null;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(Unit $opponent)
    {
        show("{$this->name} swing his sword to {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

}