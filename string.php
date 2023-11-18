<?php
// Sample string
$originalString = "Hello, World!";

// String length
$length = strlen($originalString);
echo "Original String: $originalString\n";
echo "String Length: $length\n\n";

// Convert to lowercase and uppercase
$lowercase = strtolower($originalString);
$uppercase = strtoupper($originalString);
echo "Lowercase: $lowercase\n";
echo "Uppercase: $uppercase\n\n";

// Substring
$substring = substr($originalString, 7, 5); // Starting from index 7, take 5 characters
echo "Substring: $substring\n\n";

// Replace
$newString = str_replace("Hello", "Hi", $originalString);
echo "Replace 'Hello' with 'Hi': $newString\n\n";

// Trim whitespace
$whitespaceString = "   Trim me!   ";
$trimmedString = trim($whitespaceString);
echo "Original String with Whitespace: '$whitespaceString'\n";
echo "Trimmed String: '$trimmedString'\n\n";

// String to array
$stringToArray = str_split($originalString);
echo "String to Array: ";
print_r($stringToArray);
echo "\n\n";

// String position
$position = strpos($originalString, "World");
echo "Position of 'World': $position\n";

// String comparison
$compareResult = strcmp("abc", "ABC");
echo "String Comparison ('abc' vs 'ABC'): $compareResult\n";

// Check if a string contains another string
$contains = strpos($originalString, "Hello") !== false ? "Yes" : "No";
echo "Does the string contain 'Hello'? $contains\n";
?>
