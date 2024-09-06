<?php

$year=1000;

if(($year % 4 == 0 && $year % 100 != 0)|| $year % 400 == 0){
    print "$year adalah tahun kabisat";
}else{
    print "$year bukan tahun kabisat";
}