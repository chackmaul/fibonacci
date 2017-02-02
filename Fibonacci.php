<?php
namespace Fibonacci;
use IFibonacci\iFibonacci;
class Fibonacci implements iFibonacci
{
   private $firstValue;
   private $validatedValue;
   /**
    * Fibonacci constructor.
    * @param mixed $value
    */
   public function __construct($value)
   {
      $this->validatedValue = $this->validateValue($value);
      if ($this->validatedValue === true) {
         $this->setFirst($value);
      } else {
         throw new \InvalidArgumentException('Error, numeric value mus be supplied');
      }
   }
   /**
    *getFibonacci obtain the Fibonacci sequence for a given number and prints it
    */
   public function getFibonacci()
   {
   }
   private function setFirst($firstValue)
   {
      $this->firstValue = $firstValue;
   }
   private function getFirst()
   {
      return $this->firstValue;
   }
   private function getNext($actual, $next)
   {
    return $nextValue = $actual + $next;
   }
   private function validateValue($value)
   {
      $success = false;
      if (is_int($value)) {
         $success = true;
      } elseif ((int) $value){
         $success = true;
      } else {
         $success = false;
      }
      return $success;
   }
}