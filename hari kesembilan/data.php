<?php

$datasiswa=array(
    array("nama"=> "Andi","NISN"=> "67345345"),
    array("nama"=> "Budi","NISN"=> "76245345"),
    array("nama"=> "Dedi","NISN"=> "89345345")
);

foreach($datasiswa as $siswa){
    echo $siswa['nama']."-"
    . $siswa['NISN']."<br>";
}