<?php
echo "<h3>perulangan for</h3>";  
for($x = 0; $x <= 1; $x++) {
  echo "The number is: $x <br>";
}
echo "<hr>";
echo "<h3>perulangan while</h3>";          
$a=0;
while($a<=1){
    echo "ini adalah perulangan ke-$a<br>";
    $a++;
}
echo "<hr>";
echo "<h3>perulangan do-while</h3>";
$x=0;
do {
    echo "ini perulangan ke-$x<br>";
    $x++;
} while($x < 1);
