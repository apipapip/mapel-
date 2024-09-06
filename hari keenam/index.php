<?php

$upah_per_jam=2000;
$upah_lembur_per_jam=3000;
$jam_normal=48;
$jam_kerja=47;

if($jam_kerja>$jam_normal){
    $jam_lembur=$jam_kerja-$jam_normal;
    $upah_reguler=$jam_normal*$upah_per_jam;
    $upah_lembur=$jam_lembur*$upah_lembur_per_jam;
}else{
    $upah_reguler=$jam_kerja*$upah_per_jam;
    $upah_lembur=0;
}

$total_upah=$upah_reguler+$upah_lembur;

print "total upah minggu ini adalah $total_upah";  