<?php

function ekstrakNIP($nip){
$tanggal=substr($nip,6,2);
$bulan=substr($nip,4,2);
$tahun=substr($nip,0,4);
$jk=substr($nip,14,1);

$date=date_create($tanggal."-". $bulan."-". $tahun);

$data['tanggal']=date_format($date,"d F Y");

if($jk==1){
    $data['jk']="Laki laki";
}else{
    $data['jk']="Perempuan";
}

$tanggalpensiun="01";
$bulanpensiun=$bulan+1;
$tahunpensiun=$tahun+60;
$pensiun=date_create($tanggalpensiun."-". $bulanpensiun."-". $tahunpensiun);
$data['pensiun']=date_format($pensiun, 'd F Y');

return $data;
}

$dataEkstrak=ekstrakNIP($_POST['nip']);
foreach($dataEkstrak as $de){
    echo $de ."<br>";
}
