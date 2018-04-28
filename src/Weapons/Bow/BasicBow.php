<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons\Bow;

use Game\Weapons\Weapon;

class BasicBow extends Weapon
{

    protected $damage      = 10;
    protected $description = ":unit throws an arrow to :opponent and makes :damage damage";


}