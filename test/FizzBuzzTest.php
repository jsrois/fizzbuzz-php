<?php


namespace FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    
    private $fizzBuzz;
    
    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }
    
    public function testReturnsTheSameNumberByDefault()
    {
        $this->assertEquals("1", $$this->fizzBuzz->of(1));
        $this->assertEquals("2", $this->fizzBuzz->of(2));
    }

    public function testReturnsFizzIfTheNumberIsAMultipleOfThree()
    {
        $this->fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $this->fizzBuzz->of(3));
        $this->assertEquals("Fizz", $this->fizzBuzz->of(6));
    }

    public function testReturnsBuzzIfTheNumberIsAMultipleOfFive()
    {
        $this->fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $this->fizzBuzz->of(5));
    }

    
}