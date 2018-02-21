<?php

abstract class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "{$this->name} walks towards $direction\n";
    }

    abstract function attack($opponent);


}

class Soldier extends Unit
{

    public function attack($opponent)
    {
        echo "{$this->name} cut $opponent in half\n";
    }

}

class Archer extends Unit
{

    public function attack($opponent)
    {
        echo "{$this->name} throw an arrow to $opponent\n";
    }



}

$diego = new Archer("Diego");
// $diego->move("North");
$diego->attack("Felipe");
