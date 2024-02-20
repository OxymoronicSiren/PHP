
<?php 
//PHP Strings

$zdravo = "Hellooo";
$ime = "Petre";
echo "Zdravo $ime";
echo "<br>";

echo 'Zdravo pak $ime';
strlen("Zdravo pak");
echo "<br>";
// Ime na funkcija(Argument)
echo strlen("Zdravo pak");
$broj_na_karakteri = strlen("Zdravo pak");
echo "<br>";


echo strtoupper($ime);

// Concatanations

// operator .

// dvata navodnici se prazno mesto

$cel_pozdrav = "<p><span style ='color:red'>".$zdravo."</span> <span style ='color:green'>".$ime."</span></p> ";
echo $cel_pozdrav;
//vo title vrednost dokument da se napravat dve promenlivi i da se dodeli vrednost - ime i prezime
// Vo dokument da se ispise slednata vrednost moeto ime prezime ima tolku bukvi 

$moetoime = "Sandra";
$moetoprezime = "Gjukikj";
$ime_i_prezime = $moetoime.$moetoprezime;
$zbir = strlen($moetoime .$moetoprezime);
echo "$zbir";

?>
<title>
    <?php echo "$moetoime $moetoprezime ima $zbir bukvi ";
    ?>
</title>