<?php

$persegipanjang=array(
    array("nama" => "persegi1", "panjang" => 56, "lebar" => 23 ),
    array("nama" => "persegi2", "panjang" => 33, "lebar" => 21 ),
    array("nama" => "persegi3", "panjang" => 65, "lebar" => 42 ),
    array("nama" => "persegi4", "panjang" => 73, "lebar" => 29 )
);

// foreach($persegipanjang as $index => $persegi){
//     $persegipanjang[$index]["luas"]=$persegipanjang[$index]["panjang"]*$persegipanjang[$index]["lebar"];
// }

foreach($persegipanjang as $key => $persegi){
    $luas = $persegi["panjang"]*$persegi["lebar"];
    $persegipanjang[$key]["luas"] = $luas;
}
 
foreach($persegipanjang as $persegi){
    echo 
    $persegi["nama"]."-panjang:".
    $persegi["panjang"].",lebar:".
    $persegi["lebar"]."luas:".
    $persegi["luas"]."<br>"; 

}
// $jsonData=json_encode($persegipanjang,JSON_PRETTY_PRINT);
// echo "<pre>".$jsonData."</pre>";