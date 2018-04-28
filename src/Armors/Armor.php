<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:49 PM
 */

namespace Game\Armors;

use Game\Units\Unit;
use Game\Weapons\Attack;

abstract class Armor
{

    public function getAbsorbDamage(Attack $attack){
        if( $attack->isMagical()){
            return $this->getAbsorbMagicalDamage($attack);
        }
        return $this->getAbsorbPhysicalDamage($attack);
    }

    public function absorbDamage(Attack $attack, Unit $unit)
    {
        $damage = $this->getAbsorbDamage($attack);
        show("{$unit->getName()} {$unit->getActualHp()} absorb {$damage} damage");
        return $damage;
    }

    public function getAbsorbMagicalDamage( Attack $attack ){
        return $attack->getDamage();
    }

    public function getAbsorbPhysicalDamage( Attack $attack ){
        return $attack->getDamage();
    }

}