<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:58 PM
 */

namespace Game\Weapons\Sword;

use Game\Weapons\Weapon;

class BasicSword extends Weapon
{

    protected $damage      = 15;
    protected $description = ":unit swings his sword to :opponent and makes :damage damage";


}