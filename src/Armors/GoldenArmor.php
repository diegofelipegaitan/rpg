<?php
/**
 * Created by PhpStorm.
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:55 PM
 */

class GoldenArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 5;
    }

}