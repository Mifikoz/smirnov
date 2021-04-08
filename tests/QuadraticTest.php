<?php


use smirnov\Quadratic;
use smirnov\SmirnovException;
use PHPUnit\Framework\TestCase;

class QuadraticTest extends TestCase
{

    public function testSolve() {
        $quadratic = new Quadratic();

        $this->assertEquals([-0.5], $quadratic->solve(0, 2, 1));        //линейное

        $this->assertEquals([-4, -1], $quadratic->solve(1, 5, 4));     //общий случай

        $this->assertEquals([-1.5, -0.5], $quadratic->solve(4, 8, 3));       //общий случай

        $this->expectExceptionMessage('Equation doesn`t exists');               //исключение с несуществующим уравнением
        $quadratic->solve(0, 0, 0);


        $this->expectExceptionMessage('Equation has no roots');                 //Уравнение не существует - D<0
        $quadratic->solve(4, 6, 3);

    }
}
