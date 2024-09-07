<?php

for($i=1;$i<=300;$i++){
    $cek=0;
    for($k=1;$k<=$i;$k++){
        if($i%$k==0){
            $cek++;
        }
    }
    if($cek==2){
        echo "$i <br>";
    }
}