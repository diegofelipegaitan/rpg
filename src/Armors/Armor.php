<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:49 PM
 */

namespace Game\Armors;

use Game\Units\Unit;

interface Armor
{
    public function absorbDamage($damage , Unit $unit);
}