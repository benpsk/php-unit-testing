<?php

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  protected $fizzBuzz;

  protected function setUp(): void
  {
    $this->fizzBuzz = new FizzBuzz();
  }

  public static function additionProvider(): array
  {
    return [
      ['fizz', [3, 6, 9, 12]],
      ['buzz', [5, 10, 20, 25]],
      ['fizzbuzz', [15, 30, 45, 60]],
    ];
  }

  #[DataProvider('additionProvider')]
  public function test_it_return_fizz_for_multiples_of_three(string $expacted, array $input): void
  {
    foreach ($input as $number) {
      $this->assertEquals($expacted, $this->fizzBuzz->convert($number));
    }
  }

  public function test_it_return_the_original_number_if_not_divisible_by_three_or_five(): void
  {
    foreach ([1, 2, 4, 7, 8, 11] as $number) {
      $this->assertEquals($number, $this->fizzBuzz->convert($number));
    }
  }
}
