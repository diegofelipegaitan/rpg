<?php
/**
 * User: Diego Gaitán
 * Date: 22/02/18
 * Time: 9:55 PM
 */

namespace Game\Weapons;


class Weapon
{

    protected $damage      = 0;
    protected $magical     = false;
    protected $description = ":unit attacks :opponent";

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }

}