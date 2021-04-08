<?php


use smirnov\Linear;
use smirnov\SmirnovException;
use PHPUnit\Framework\TestCase;

class LinearTest extends TestCase {

    public function testLinearEquation() {

        $linear = new Linear();

        $this->assertEquals([-25], $linear->linearEquation(5, 125));
        $this->assertEquals([4], $linear->linearEquation(6, -24));
        $this->assertEquals([62], $linear->linearEquation(2, -124));


        $this->expectException(SmirnovException::class);
        $linear->linearEquation(0, 15421841035132035121);

    }
}
