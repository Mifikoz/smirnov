<?php


namespace smirnov;
use core\Equationinterface;
//require_once 'smirnov/Linear.php';

class Quadratic extends Linear implements EquationInterface
{

    public function solve($a,$b,$c) {
        if($a==0){
            return $this->linearEquation($b,$c);
        }

        $D=$this->discriminant($a,$b,$c);

        SmirnovLog::log("This is a quadratic equation\n\r");

        if ($D > 0) {
            return $this->x=[
                (-$b-sqrt($D))/(2*$a),
                (-$b+sqrt($D))/(2*$a)
            ];
        }
        if ($D == 0) {
            return $this->x=[(-$b-sqrt($D))/(2*$a)];
        }
        throw new SmirnovException("Equation has no roots\n\r");
    }
    protected function discriminant($a,$b,$c) {
        return (pow($b,2)-4*$a*$c);
    }
}