<?php

$nilai=75;

if($nilai>=90){
    $predikat= "A";
}
elseif($nilai>=80){
    $predikat= "B";
}
elseif($nilai>=70){
    $predikat= "C";
}
elseif($nilai>=60){
    $predikat= "D";
}else{
    $predikat= "E";
}

$hasil="$nilai:$predikat";
print "$hasil<hr><hr>";