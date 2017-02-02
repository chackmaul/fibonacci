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
      $fibonacci->getFibonacci();
   }
}