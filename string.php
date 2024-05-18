<?php
// Example input data
$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u'];

// Iterate over each string
foreach ($strings as $string) {
    // Initialize total count for the current string
    $total_count = 0;
    // Reverse the string
    $reverse_string = strrev($string);
    // Count occurrences of target alphabets in the string
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (in_array($char, $vowels)) {
            $total_count++; // Increment total count for the current string
        }
    }
    
    // Print total count for the current string
    echo "Original String: '$string' , Vowel Count: $total_count , Reversed String: $reverse_string \n";
}
?>
