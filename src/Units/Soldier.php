<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:44 PM
 */

namespace Game\Units;

use Game\Weapons\Sword;

class Soldier extends Unit
{

    public function __construct($name, Sword $weapon = null)
    {
        parent::__construct($name, $weapon);
    }

}