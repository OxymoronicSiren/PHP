<?php


//Variables
// $ 
// Syntax
//Variables always start with $
//Variables can not start with number
//Variables are case sensitive
//Variables can only contain (A-z, 0-9)
/* Moze i vaka komentar */


$x = 5;
$y = "pet";
$text = "Zdravo Mladi";
$TEXT = "Zdravo Stari";
?> 
<h1>
<?php    
echo  $x;
?>

<h1>
<? 

echo "Zdravo";
echo $text;
echo "Prijatno";
echo $TEXT;
?>

<?php 
echo "<h3>";
echo $text;
echo "</h3>";

echo "<p>".$TEXT."</p>";

echo "Ej $text !";

// String
$a = "hello";
// Integer
$c = 1290;

// Float
$d = 1.2;
// Boolean

$e = true;
$f = false;
// Array 

$g = array("1","2","3","4","5","6");
// Object

//NULL
$h = NULL;
echo $a;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $f;
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($c);

echo "Hello";
echo "<br>";

echo "<hr>";
$a = 5;
echo "<hr>";
$a = "hello";
var_dump($g);
var_dump($a);
?>
