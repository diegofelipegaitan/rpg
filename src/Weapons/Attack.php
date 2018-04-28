<?php
/**
 * Created by PhpStorm.
 * User: diegogaitan
 * Date: 27/04/18
 * Time: 10:19 PM
 */

namespace Game\Weapons;


use Game\Units\Unit;

class Attack
{

    protected $damage;
    protected $magical;
    protected $description;

    public function __construct($damage, bool $magical, $description)
    {
        $this->damage      = $damage;
        $this->magical     = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace(
                [':unit', ':opponent', ':damage'],
                [$attacker->getName(), $opponent->getName(), $this->getDamage()],
                $this->description
        );
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isPhysical()
    {
        return !$this->isMagical();
    }

    public function isMagical()
    {
        return $this->magical;
    }

}