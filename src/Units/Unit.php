<?php
/**
 * Created by PhpStorm.
 * User: diegogaitan
 * Date: 22/02/18
 * Time: 8:42 PM
 */

abstract class Unit
{
    protected $hp = 100;
    protected $name;
    protected $armor;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;
    }

    abstract function attack(Unit $opponent);

    public function move($direction)
    {
        show("{$this->name} walks towards $direction");
    }

    public function takeDamage($damage)
    {

        $this->hp -= $this->absorbDamage($damage);
        show("{$this->getName()} has {$this->getHp()} points");

        if ($this->hp <= 0) {
            $this->die();
        }

    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;
    }

    public function getName()
    {
        return $this->name;
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

}