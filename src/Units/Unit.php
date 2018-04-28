<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 8:42 PM
 */

namespace Game\Units;

use Game\Armors\Armor;
use Game\Weapons\Attack;
use Game\Weapons\Weapon;

class Unit
{
    protected $hp = 100;
    protected $name;

    /**
     * @var Armor|null
     */
    protected $armor = null;

    /**
     * @var Weapon|null
     */
    protected $weapon = null;


    public function __construct($name, Weapon $weapon = null)
    {
        $this->name   = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;
    }

    /**
     * @param Unit $opponent
     * @throws \Exception
     */
    public function attack(Unit $opponent)
    {
        if (!$this->weapon) {
            throw new \Exception("{$this->getName()} can not attack without an Weapon");
        }

        $attack = $this->weapon->createAttack();
        show($attack->getDescription($this, $opponent));
        $opponent->takeDamage($attack);
    }

    public function getName()
    {
        return $this->name;
    }

    public function takeDamage(Attack $attack)
    {

        $this->hp -= round($this->absorbDamage($attack));
        if ($this->hp < 0) {
            $this->hp = 0;
        }
        show("{$this->getName()} has {$this->getHp()} points");

        if (!$this->hp) {
            $this->die();
        }

    }

    protected function absorbDamage(Attack $attack)
    {
        if ($this->armor) {
            return $this->armor->absorbDamage($attack, $this);
        }
        return $attack->getDamage();
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function die()
    {
        show("{$this->getName()} dies");

        exit();
    }

    public function getActualHp()
    {
        return "have {$this->getHp()} hit points and";
    }

    public function move($direction)
    {
        show("{$this->name} walks towards $direction");
    }

}