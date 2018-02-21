<?php
/**
 * User: Diego Gaitán
 * Date: 21/02/18
 * Time: 9:50 AM
 */

namespace Test;

require "../index.php";

use PHPUnit\Framework\TestCase;

class InitialTest extends TestCase
{

    public function testInitial(){
        $soldier = new \Soldier("Diego");
        $this->assertTrue( $soldier instanceof \Unit);
    }

}
