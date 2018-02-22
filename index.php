<?php

function show($message)
{
    //echo "<p>$message</p>";
    echo "$message\n";
}

abstract class Unit
{
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function attack(Unit $opponent);

    public function move($direction)
    {
        show("{$this->name} walks towards $direction");
    }

    public function takaDamage($damage)
    {

        $this->setHp($this->hp - $damage);
        if ($this->hp <= 0) {
            $this->die();
        }

    }

    private function setHp($hp)
    {
        $this->hp = $hp;
        show("{$this->getName()} has {$this->getHp()} points");
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
    }

}

class Soldier extends Unit
{

    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->name} swing his sword to {$opponent->getName()}");
        $opponent->takaDamage($this->damage);
    }

    public function takaDamage($damage)
    {
        parent::takaDamage($damage / 2);
    }

}

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} throw an arrow to {$opponent->getName()}");
        $opponent->takaDamage($this->damage);
    }

    public function takaDamage($damage)
    {
        if(!rand(0,2)) {
            parent::takaDamage($damage );
        }
    }

}

$felipe = new Soldier("Felipe");
$diego  = new Archer("Diego");
$diego->attack($felipe);
$felipe->attack($diego);
