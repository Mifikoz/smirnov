<?php


namespace smirnov;


class Linear {
protected $x;
public function linearEquation($a,$b) {
    if ($a==0) {
        throw new SmirnovException('Equation doesn`t exists\n\r');
    }
    SmirnovLog::log("Entered equation is an linear equation\n\r");
    return $this->x=array(-$b/$a);
}
}