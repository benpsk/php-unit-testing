<?php

use App\StringTransformer;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class StringTransformerTest extends TestCase
{
  public static function additionProvider(): array
  {
    return [
      ['helloWorld', 'HELLO+WORLD'],
      ['helloWorld', 'hello_world'],
      ['helloWorld', 'hello-world'],
      ['helloWorld', 'hello--world'],
      ['helloWorld', 'hello__world'],
    ];
  }

  #[DataProvider('additionProvider')]
  public function test_the_input_string_return_camel_case(string $expected, string $input): void
  {
    $stringTransformer = new StringTransformer();
    $this->assertEquals($expected, $stringTransformer->toCamelCase($input));
  }
}
