<?php
$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
);
$toyota = array(
    "model" => "5",
    "speed" => 140,
    "doors" => 4,
    "year" => "2017"
);
$opel = array(
    "model" => "omega",
    "speed" => 150,
    "doors" => 5,
    "year" => "2016"
);
$array = array(
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
);

echo "CAR BMW <br>";

foreach ($array["bmw"] as $val){
    print_r($val . " ");
}

echo "<br> <br> CAR TOYOTA <br>";

foreach ($array["toyota"] as $val){
    print_r($val . " ");
}

echo "<br> <br> CAR OPEL <br>";
foreach ($array["opel"] as $val){
    print_r($val . " ");
}
