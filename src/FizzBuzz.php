<?php

namespace App;

class FizzBuzz
{
  public function convert(int $number): string|int
  {
    if ($number % 5 == 0 && $number % 3 == 0) return "fizzbuzz";
    if ($number % 3 == 0) return "fizz";
    if ($number % 5 == 0) return "buzz";
    return $number;
  }
}
