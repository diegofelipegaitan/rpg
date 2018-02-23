<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:54 PM
 */

class SilverArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 3;
    }

}