<?php
//funkcija sto ke ja vrati apsolutnata vrednost na eden broj

// PHP Date/ Time Functions
//date();

//PHP Arrays
//Indeksirani, asocijativni, multidimenzionalni
//1.Indexed

$niza= array(1,2,3,4,5,6,6,7,"ako e string se stava vo navodnici");

var_dump($niza);
echo "<hr>";

echo $niza[5];
echo "<hr>";

$niza[5] = "blue"; //da se smeni vrednost na niza
echo "<hr>";
var_dump($niza);
echo "<hr>";
echo $niza[5];
echo "<hr>";
foreach ($niza as $element){
    echo $element;
    echo "<br>"; // za sekoj element vo nizata da se isprinta
}

$brojnaelementivonizata = count($niza);
echo "broj na elementi vo nizata: ".$brojnaelementivonizata;
echo "<br>"; 

for ($x=0; $x < $brojnaelementivonizata; $x++) {
    echo "<br>"; 
    echo $niza[$x];
    
}
echo "<br>"; 
array_push($niza, "violet");
echo "<br>"; 
$brojnaelementivonizata = count($niza);
echo "broj na elementi vo nizata: ".$brojnaelementivonizata;
echo "<br>"; 

foreach ($niza as $element){
    echo $element;
    echo "<br>"; // za sekoj element vo nizata da se isprinta
}

// Asocijativni

$a_niza = array("Brand"=>"Mazda","color"=>"red", "engine"=>"1.4", "yop"=>2018);
var_dump($a_niza);
echo "<br>";
echo $a_niza["engine"];
echo "<br>";

foreach ($a_niza as $a => $b) {
    echo $a." -> ".$b;
}
echo "<br>";
$a_niza["color"] = "white";

$a_niza["seats"] = "5";
foreach ($a_niza as $a => $b) {
    echo $a." -> ".$b;
}
echo "<br>";

// Ako sakame da trgneme element 
unset($a_niza["color"]);
$studenti = array("Petar"=>27, "Zarko"=>22, "vesna"=>19, "Mihaela"=>31);
asort($studenti);
foreach($studenti as $ime=>$godini){
    echo "<br>";
    echo $ime." ima ".$godini;
}



// sort() - ascending order
// rsort() - descending order
// asort() - ascending order by value
// ksort() - ascending order by index / key
// arsort() - descending order by value
// krsort() - descending order by index / key


?>
<table border ="1">
<tr>
<th>Ime </th>
<th>Godini</th>
</tr>
</table>
<?php
foreach($studenti as $ime=>$godini){
    echo "<tr>";
    echo "<td>$ime</td>";
    echo "<td>$godini</td>";
    echo "<tr>";
}
?>