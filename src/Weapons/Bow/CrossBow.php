<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:57 PM
 */

namespace Game\Weapons\Bow;

use Game\Weapons\Weapon;

class CrossBow extends Weapon
{

    protected $damage      = 25;
    protected $description = ":unit throws many arrows with his CrossBow to :opponent and makes :damage damage";
    protected $magical     = true;


}