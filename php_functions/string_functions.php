<?php
#Trimming Functions

//trim()
//example 1
$str= "  Hey, it's me    ";
echo (trim($str));

echo "\n";


//example2
$str = "++Hello, World!--";
$characters = "+-";
$trimmed = trim($str, $characters);
echo $trimmed; // Output: "Hello, World!"


echo "\n";

// ltrim()
//example 1
$str= "  Hey, it's me    ";
echo (ltrim($str));

echo "\n";


//example2
$str = "++Hello, World!--";
$characters = "+-";
$trimmed = ltrim($str, $characters);
echo $trimmed; // Output: "Hello, World!"

echo "\n";



//rtrim()
//example 1
$str= "  Hey, it's me    ";
echo (rtrim($str));

echo "\n";

//example2
$str = "++Hello, World!--";
$characters = "+-";
$trimmed = rtrim($str, $characters);
echo $trimmed; // Output: "Hello, World!"

echo "\n";

//chop()
//example 1
$str= "  Hey, it's me    ";
echo (chop($str));

echo "\n";

//example2
$str = "++Hello, World!--";
$characters = "+-";
$trimmed = chop($str, $characters);
echo $trimmed; // Output: "Hello, World!"

echo "\n";


#padding and repeating functions
//str_pad()
$input = "Hello";
$padded = str_pad($input, 10, "*", STR_PAD_BOTH);
echo $padded; // Output: "**Hello***"

echo "\n";

//str_repeat()
$input = "Hello";
$repeated = str_repeat($input, 3);
echo $repeated; // Output: "HelloHelloHello"

echo "\n";

#string length and word count functions
//strlen()
$string = "Hello, World!";
$length = strlen($string);
echo $length; // Output: 13

echo "\n";

//str_word_count()
$string = "Hello, World! How are you?";

// Count the number of words
$word_count = str_word_count($string);
echo $word_count; // Output: 5

echo "\n";

// Return an array of words
$words_array = str_word_count($string, 1);
print_r($words_array); 
// Output: Array ( [0] => Hello [1] => World [2] => How [3] => are [4] => you )

echo "\n";

// Return an associative array with positions
$words_assoc = str_word_count($string, 2);
print_r($words_assoc);
// Output: Array ( [0] => Hello [7] => World [14] => How [18] => are [22] => you )

echo "\n";

#substring and position functions
//substr_count()
$string = "Hello, world! Hello, everyone!";
$count = substr_count($string, "Hello");
echo $count; // Output: 2

echo "\n";

//strpos()
$string = "Hello, world!";
$position = strpos($string, "world");
echo $position; // Output: 7

echo "\n";

//strrpos()
$string = "Hello, world! Hello, everyone!";
$position = strrpos($string, "Hello");
echo $position; // Output: 13

echo "\n";

//stripos()
$string = "Hello, World!";
$position = stripos($string, "world");
echo $position; // Output: 7

echo "\n";

//strripos()
$string = "Hello, World! Hello, everyone!";
$position = strripos($string, "hello");
echo $position; // Output: 13

echo "\n";

//strstr()
$string = "Hello, world!";
$found = strstr($string, "world");
echo $found; // Output: "world!"

echo "\n";

//stristr()
$string = "Hello, World!";
$found = stristr($string, "world");
echo $found; // Output: "World!"

echo "\n";

//strrchr()
$string = "Hello, world! How are you?";
$found = strrchr($string, "o");
echo $found; // Output: "ou?"

echo "\n";

//strpbrk()
$string = "Hello, world!";
$found = strpbrk($string, "oe");
echo $found; // Output: "ello, world!"

#string to array and array to string functions
//explode()
$string = "Hello, world, how, are, you";
$array = explode(", ", $string);
print_r($array);
// Output:
// Array
// (
//     [0] => Hello
//     [1] => world
//     [2] => how
//     [3] => are
//     [4] => you
// )

//implode()
$array = ["Hello", "world", "how", "are", "you"];
$string = implode(", ", $array);
echo $string; // Output: "Hello, world, how, are, you"

?>