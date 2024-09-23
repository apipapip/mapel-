<?php
//operator modulus
$bilangan1=50;
$bilangan2=3;

$sisaHasilBagi=$bilangan1%$bilangan2;

echo $bilangan1. " modulus " .$bilangan2." = ".$sisaHasilBagi;

print "<br>";
//operator perkalian
$a=100;
$b=5;
$hasil=$a*$b;
print $a. " kali " .$b. " = " .$hasil;

print "<br>";
//operator pembagian
$a=60;
$b=3;
$hasil=$a/$b;
print $a. " bagi " .$b. " = " .$hasil;

//operator pembandingan  
print "<br>";
$bilA=7;  
$bilB="7";
var_dump($bilA);
var_dump($bilB);  
var_dump($bilA==$bilB);   


//gerbang logika
print "<br>";
$bil1=7;
$bil2=7;
var_dump($bil1 == 7 && $bil2==5);

print "<br>";
$bil1=7;
$bil2=7;
var_dump($bil1 == 7 || $bil2==5);

print "<br>";
$bil1=7;
$bil2=7; 
var_dump($bil1 == 9 Xor $bil2==7);
echo "<hr><hr>";