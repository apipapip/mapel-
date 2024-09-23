<?php 

$angka=array(7,5,9,12,4,54,76,98);

$jumlah=0;
foreach($angka as $bilangan){
    $jumlah+=$bilangan;
}
echo $jumlah;

print "<hr>";

foreach($angka as $nilai ){
    if ($nilai % 2!= 0){ 
        echo $nilai.'<br>';
    }
}
print "<hr>";

$angka=array(7,5,9,12,4,54,76,98);
sort($angka);
foreach($angka as $c)
echo $c.'<br>';