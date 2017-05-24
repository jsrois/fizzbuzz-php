<?php
/**
 * Created by PhpStorm.
 * User: jsrois
 * Date: 24/5/17
 * Time: 20:27
 */

namespace FizzBuzz;


class FizzBuzz
{
    public function of($number) {
        if ($number % 3 == 0)
        {
            return "Fizz";
        }
        return (string) $number;
    }
}