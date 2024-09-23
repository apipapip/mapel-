<?php

$IMT=45;

if($IMT< 18.5){
    $keterangan="kurus";
}
elseif($IMT< 25){
    $keterangan="normal";
}
elseif($IMT< 30){
    $keterangan="overweight";
}else{
    $keterangan="obsesitas";
}

$kategori="$IMT:$keterangan";
print "$kategori<br><br>";