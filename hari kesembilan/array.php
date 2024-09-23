<?php
//index array 
$nama=array ("el garpu","el nangis","el sabar","el kumar","el homo");
print $nama[4];

echo "<br><br>";

    foreach ($nama as $n){
        echo $n.'<br>';
    }

print "<br><br>";

$nama[4]="el kamar";
foreach ($nama as $n){
    echo $n.'<br>';
}

print "<br><hr>";

//associative array
$Android = array ("brand"=>"Techno", "model"=>"Pova 5 pro 5G", "year"=>2023);
//add
$Android["color"] = "Gray";

foreach ($Android as $label => $data) {
  echo "$label: $data <br>";
}

print "<br><br><hr>";

//add array

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
foreach($fruits as $data){
    echo "$data <br>";
}

print "<br><br>";

$cars = array("brand" => "Ford", "model" => "Mustang");
//add code
$cars += ["color" => "red", "year" => 1964];
//output code
foreach ($cars as $label => $data) {
    echo "$label: $data <br>";
  }