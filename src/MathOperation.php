<?php
namespace Vendor\ArithmeticOperation;

Class MathOperation {
    const ADDITION='Mathematical operation --> Addition';

    public function addition($a,$b){
        $addition=(int)$a+(int)$b;
        $result= sprintf("Addition of %d and %d is %d.", $a, $b, $addition);
        return $result;
    }
}