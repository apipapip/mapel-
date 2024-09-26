<?php

$nip='198203122009042001';
$detail=terjemahnip($nip);

function terjemahnip($nip){
    $tahunlahir=substr($nip,0,4);
    $bulanlahir=(int)substr($nip,4,2);
    $tanggallahir=substr($nip,6,2);


$namabulan=array(
    '1'=>'jannuari', '2'=>'februari', '3'=>'maret', '4'=>'april', '5'=>'mei', '6'=>'juni','7'=>'juli',
     '8'=>'agustus', '9'=>'september', '10'=>'oktober', '11'=>'november', '12'=>'desember'
);


$format = $tanggallahir . ' ' . $namabulan[$bulanlahir] . ' ' . $tahunlahir;

$tahunpensiun = $tahunlahir + 60;
$pensiunformat = $tanggallahir . ' ' . $namabulan[$bulanlahir] . ' ' . $tahunpensiun;

$digitjeniskelamin=substr($nip,17,1);
if($digitjeniskelamin=='1'){
    $jeniskelamin="Laki laki";
}elseif($digitjeniskelamin=='2'){
    $jeniskelamin="Perempuan";
}else{
    $jeniskelamin="Anomali";
}

return[
    'tanggallahir'=>$format,
    'jeniskelamin'=>$jeniskelamin,
    'tanggalpensiun'=>$pensiunformat
];
}

echo "tanggal lahir: " . $detail['tanggallahir'] . "\n<br>";
echo "jenis kelamin: " . $detail['jeniskelamin'] . "\n<br>";
echo "Tanggal Pensiun: " . $detail['tanggalpensiun'] . "\n";
