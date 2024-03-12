<?php
$string="Ova e chas po ucenje funkcii";
echo strlen($string);
$search_string = "ucenje";
echo "<br>";
echo strpos($string, $search_string);

//Najdete ja funkcijata substring

$rest = substr("abcdef", 3, 1); //returns d
echo $rest;
echo "<br>";
$rest1 = substr("Ova e chas po ucenje funkcii", 0, 5); 
$string2 = substr($string, 20,9);
echo $rest1.$string2;
echo "<br>";
echo str_replace("funkcii", "strukturi", $string);
//search and replace

$string3 = "Ova e zadaca";
echo "<br>";
echo strtoupper("$string3");
echo "<br>";
echo strtolower("$string3");
echo "<br>";
echo lcfirst("$string3");
echo "<br>";
echo ucfirst("$string3");
echo "<br>";
echo str_shuffle($search_string);
echo "<br>";

//Da napravime funkcija 

$data = "1234567890ZXCVBNMASDFGHJKLQWERTYUIOPzxcvbnmasdfghjklqwertyuiop";
$izmesanibukvi = str_shuffle($data);
$dolzina_na_password = substr($izmesanibukvi,0, 5);
echo $dolzina_na_password;
echo "<br>";

//funkcija koja sto ke go svrti stringot naopaku
$string5 = "sandra";
strrev($string5);
echo "$string5";

?>