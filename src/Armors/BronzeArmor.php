<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:53 PM
 */

class BronzeArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}