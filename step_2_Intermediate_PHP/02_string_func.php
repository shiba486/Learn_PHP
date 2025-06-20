<?php

    #PHP String Functions

# 1. strlen() — String Length:

$str = "Hello, World!";
echo strlen($str); 

#2. str_word_count() — Word Count:

$str = "Hello, beautiful world!";
echo str_word_count($str); 

#3. strrev() — Reverse String:

$str = "Hello";
echo strrev($str);  

#4. strpos() — Find Position of Substring:

$str = "I love PHP";
echo strpos($str, "PHP");  

#5. str_replace() — Replace Substring:

$str = "I love PHP";
echo str_replace("PHP", "JavaScript", $str);  

#6. str_repeat() — Repeat String:

echo str_repeat("Hello ", 3);  

#7. substr() — Extract Part of a String:
#substr(string, start, length)

$str = "Hello, World!";
echo substr($str, 7, 5);  

#8. trim() — Remove Whitespace:

$str = "  Hello World!  ";
echo trim($str);  

#9. strtolower() — Convert to Lowercase:

$str = "HELLO WORLD";
echo strtolower($str); 

#10. strtoupper() — Convert to Uppercase:

$str = "hello world";
echo strtoupper($str);

#11. ucfirst() — Uppercase First Character:

$str = "hello world";
echo ucfirst($str);  

#12. lcfirst() — Lowercase First Character:

$str = "Hello World";
echo lcfirst($str);  

#13. ucwords() — Uppercase First Letter of Each Word:

$str = "hello world";
echo ucwords($str);  

#14. explode() — Split String to Array:

$str = "apple,banana,orange";
$fruits = explode(",", $str);
print_r($fruits);

#15. implode() — Join Array to String:

$fruits = ["apple", "banana", "orange"];
echo implode(", ", $fruits);  

#16. number_format() — Format Number as String:

$num = 1234567.89;
echo number_format($num, 2);  

#17. str_shuffle() — Shuffle Characters Randomly:

$str = "abcdef";
echo str_shuffle($str);  

#18. str_split() — Convert String to Array by Characters:

$str = "Hello";
print_r(str_split($str));

#19. md5() — Hash a String (One-way encryption):

$password = "1234";
echo md5($password);

#20. similar_text() — Compare Similarity Between Strings:
$str1 = "Hello";
$str2 = "Hallo";
similar_text($str1, $str2, $percent);
echo $percent;  


?>