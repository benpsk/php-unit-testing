<?php

namespace App;


class StringTransformer
{
  public function toCamelCase(string $input): string
  {
    $inputString = preg_replace('/[^a-zA-Z0-9]/', ' ', $input);  // hello-world => hello world, hello_world => hello world

    $words = explode(" ", strtolower($inputString));
    $camelCase = $words[0];

    for ($i = 1; $i < count($words); $i++) {
      $camelCase .= ucfirst($words[$i]);
    }
    /*
    foreach ($words as $index => $word) {
      if ($index == 0) continue;
      $camelCase .= ucfirst($word);
    }
     */
    return $camelCase;
  }
}
