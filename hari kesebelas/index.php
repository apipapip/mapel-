<?php
//tanpa argumen
function pesan() {
    echo "imma love every night like it's the last time<br>";
    echo "<i >like it's the last night</i><br>";
    echo "if the world was ending i wanna be the next to you";
  }
  
  pesan();

  print "<hr>";
  
//3 argumen 
function tree($nama,$tahun,$jurusan){
    $umur=date("Y")-$tahun;
    echo "hai saya $nama,umur saya $umur tahun saya dari jurusan $jurusan";
}

tree("Dika",2008,"XI RPL");

print "<hr>";

//return
function kali($bil1,$bil2){
    return $bil1*$bil2;
}

$hasil=kali(5,5);
echo $hasil;