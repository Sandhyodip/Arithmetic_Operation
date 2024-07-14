<?php
namespace Vendor\ArithmeticOperation;

Class MathOperation {
    const ADDITION='Mathematical operation --> Addition';
    const SUBSTRACTION='Mathematical operation --> Substraction';

    public function addition($a,$b){
        $addition=(int)$a+(int)$b;
        $result= sprintf("Addition of %d and %d is %d.", $a, $b, $addition);
        return $result;
    }

    public function substraction($a,$b){
        $substraction=(int)$a-(int)$b;
        $result= sprintf("Substraction of %d and %d is %d.", $a, $b, $substraction);
        return $result;
    }
}