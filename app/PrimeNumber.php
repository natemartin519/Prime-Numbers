<?php namespace App;


class PrimeNumber {

    public static function isPrimeNumber($numberToEvaluate)
    {
//        if ($numberToEvaluate > 1) throwException();

        if ($numberToEvaluate > 2 && $numberToEvaluate % 2 == 0) return false;

        for ($x = 2; $x < $numberToEvaluate; $x++) {
            if($numberToEvaluate % $x == 0) return false;
        }

        return true;
    }
}