<?php

namespace Fibonacci;

use Fibonacci\Fibonacci;

class Fibonacci extends \PHPUnit_Framework_TestCase
{
   /**
    * shouldSucceed
    *
    * @test
    */
   public function shouldSucceed()
   {
      $fibonacci = new Fibonacci(10);
      $this->assertInstanceOf(\Fibonacci\Fibonacci::class, $fibonacci);
   }
   /**
    * shouldSucceedWithAValidNumericStringCastedToInt
    *
    * @test
    */
   public function shouldSucceedWithAValidNumericStringCastedToInt()
   {
      $fibonacci = new Fibonacci(10);
      $this->assertInstanceOf(\Fibonacci\Fibonacci::class, $fibonacci);
   }
   /**
    * shouldFailWithNonNumericValue
    *
    * @test
    */
   public function shouldFailWithNonNumericValue()
   {
      $fibonacci = new Fibonacci('ASDF');
      $this->expectException(\InvalidArgumentException::class);
   }
}