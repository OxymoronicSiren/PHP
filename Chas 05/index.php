<?php 

//Increment Decrement Operators

/*++$a
$a++
--$a
$a--

a= 5 i da napravime echo ++a
a++*/

$a = 5;
echo ++$a;
echo "<br>";
echo $a++;
echo "<br>";
/* Mora da se dodade

echo '$a = '.$a; na kraj za da se dodade vrednosta*/

// Logical Operators

 /*and(&&)| $a and $b | True if both $a and $b are true
 or (||) | $a or $b | True if either $a or $b is true
 xor | $a xor $b | True if either $a or $b is true but not both
! | !$a | true if $a not true*/

$x = 3;
$y = 4;

if($x > $y) {
    echo $x. "e pogolemo od " .$y;
} else {
    echo $y. "e pogolemo od " .$x;
}

//String Operators 

$txt = 10;
$txt1 = 11;

concatanacija. $txt.$txt1 
.= $txt.=$txt1;
