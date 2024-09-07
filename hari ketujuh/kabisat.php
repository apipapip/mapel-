<?php

for($i=1900;$i<=2100;$i++){
    if(($i % 4 == 0 && $i % 100 != 0)|| $i % 400 == 0){
        print "$i adalah tahun kabisat<br>";
    }
}