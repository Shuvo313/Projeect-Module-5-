<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiou]/i', $str);

    // Reverse the string
    $reverse = strrev($str);

    // Print the result
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reverse\n";
}
