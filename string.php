<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    $vowelCount = 0;
    $lowerStr = strtolower($str); // lowercase conversion

    // Count vowels manually
    for ($i = 0; $i < strlen($lowerStr); $i++) {
        if (in_array($lowerStr[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vowelCount++;
        }
    }

    // Reverse the string
    $reversedStr = strrev($str);

    // Output
    echo "Original String: {$str}, Vowel Count: {$vowelCount}, Reversed String: {$reversedStr}\n";
}
?>
