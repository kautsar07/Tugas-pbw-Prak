<?php
$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
$total = count($mobil1);
for($i=0; $i<$total; $i++){
    echo $mobil1[$i], "<br>";
}
echo "<br>";
$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
$total = count($mobil1);
$i=0;
while($i < $total){
    echo $mobil1[$i]."<br />" ; 
    $i++;
}
echo "<br>";
$mobil2 = array("satu" => "Toyota", "dua" => "Mitsubishi", "tiga" => "Tesla", "empat" => "Honda");

foreach ($mobil2 as $val => $value) {
    echo $val . " : " . $value . "<br>";
}





