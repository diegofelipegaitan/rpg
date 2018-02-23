<?php
/**
 * Created by PhpStorm.
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:57 PM
 */

class EvasionArmor implements Armor
{

    public function absorbDamage($damage)
    {
        if (rand(0, 10)) {
            show("The attack was evaded");
            return 0;
        }
        return $damage;
    }

}