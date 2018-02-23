<?php

function show($message)
{
    //echo "<p>$message</p>";
    echo "$message\n";
}

interface Armor
{
    public function absorbDamage($damage);
}

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

class Soldier extends Unit
{

    protected $damage = 40;
    protected $armor  = null;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(Unit $opponent)
    {
        show("{$this->name} swing his sword to {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

}

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} throw an arrow to {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }


}

class BronzeArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}

class SilverArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 3;
    }

}

class GoldArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 5;
    }

}

class CursedArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage * 2;
    }

}

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

$felipe = new Soldier("Felipe");
$diego  = new Soldier("Diego");
$diego->setArmor(new GoldArmor);
$felipe->setArmor(new EvasionArmor);

while (true) {
    $diego->attack($felipe);
    $felipe->attack($diego);
}