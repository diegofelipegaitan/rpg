<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:56 PM
 */

class CursedArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage * 2;
    }

}