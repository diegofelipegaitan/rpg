<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons\Bow;

use Game\Weapons\Weapon;

class FireBow extends Weapon
{

    protected $damage      = 15;
    protected $magical     = true;
    protected $description = ":unit throws a fire arrow to :opponent and makes :damage damage";


}