<?php

$totalBelanja=90000;
$diskon=0.15;

if($totalBelanja<100000){
    $diskon=0;
}elseif($totalBelanja<250000){
    $diskon=0.05;
}elseif($totalBelanja>500000){
    $diskon=0.1;
}else{
    $diskon=0.15;
}

$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

print "$totalBayar<hr><hr>";