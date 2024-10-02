<?php

$capitols = ["Nederland" => "Amsterdam", "België" => "Brussel", "Duitsland" => "Berlijn"];
foreach($capitols as $country => $capitol){
    echo "De hoofdstad van . $country . is . $capitol <br>";
}

//$cars = ["Volvo", "BMW", "Toyota"];
//echo count($cars);
echo strlen("Damiën");

echo ucfirst("damiën");


$names = ['Damiën', 'Mischa', 'Lucas'];
echo join(", ", $names);
//print_r($names);


