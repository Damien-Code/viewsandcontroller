<?php
//
////var_dump($_SERVER);
//
////Dit is een request. Geef mij index.view.php terug. En daar krijgen we antwoord op
////var_dump($_SERVER['DOCUMENT_ROOT']); geeft alleen document root terug
//
////string
//$greeting = 'Hallo';
//echo $greeting . " " . gettype($greeting) . "<br>";
//
////float. komma voor duizendtallen en een punt voor kleine getallen.
//$float = 23.6;
//echo $float . " " . gettype($float) . "<br>";
//
//$integer = 23;
//echo $integer . " " . gettype($integer) . "<br>";
//
//$grootgetal = PHP_INT_MAX;
//echo number_format($grootgetal) . " " . gettype($grootgetal) . "<br>";
//
//$adult = 21;
//
//if ($adult > 18) {
//    echo 'An adult <br>';
//} else {
//    echo 'Child <br> ';
//}
//
//$array = ['Damien', 'Mischa', 'Lucas'];
//print_r($array[0]);
//var_dump($array);
////die stopt het programma en verteld wat de waarde is.
//// code onder die word  niet uitgevoerd.
//
//// for foreach while
//
//$fruits = ['apple', 'banana', 'pineapple', 'pear'];
//
//foreach ($fruits as $fruit) {
//    echo $fruit . " " . gettype($fruit) . "<br>";
//}
//
//// single quotes als je waarde aan array toevoegt
//// Double quotes als je het op het scherm laat zien
//
//
//echo "<br><strong>For loop</strong><br>";
//
//$names = ['Damien', 'Lucas', 'Mischa'];
////initialization; condition; iteration
//for ($i = 0; $i < count($names); $i++) {
//    echo $names[$i] . " ";
//}
//
//
//$cars = ['BMW', 'Toyota', 'Mercedes-Benz'];
//$i = 0;
//
//while ($i < count($cars)) {
//    echo $cars[$i] . "<br>";
//    $i++;
//}
//
//
//$classes = ['One', 'Two', 'Three'];
//$i = 0;
//
//while ($i < count($classes)) {
//    echo $classes[$i] . "<br>";
//    $i++;
//}
//
//for ($i = 0; $i < count($classes); $i++) {
//    echo $classes[$i] . "<br> ";
//}
//
//for ($i = 0; $i <= 5; $i++) {
//    for ($j = 1; $j <= $i; $j++) {
//        echo '*';
//    }
//    echo '* <br>';
//}
//
//$lijn = '*';
//for ($x = 0; $x <= 5; $x++) {
//    echo $lijn . '<br>';
//    $lijn = $lijn . '*';
//}
//
//for ($x = 0; $x <= 5; $x++) {
//    echo STR_repeat('*', $x) . '<br>';
//}
//
//$hobbies = ['fietsen', 'trainen', 'coderen', 'lezen'];
//
//foreach ($hobbies as $hobby) {
//    echo $hobby . "<br>";
//}
//
//
//for ($x = 1; $x <= 10; $x++) {
////echo '5 X ' . $x . ' = ' . 5*$x . "<br>";
//    echo " 5 X $x = " . (5 * $x) . "<br>";
//}
//
//
//$fruits = [
//    'apple' => 0.56,
//    'pineapple' => 1.29,
//    'strawberry' => 0.20
//];
//
//$fruits["mango"] = 0.20;
//
//$fruits += ["kiwi" => 1.21];
//
//foreach ($fruits as $fruit => $value) {
//    echo "$fruit the price is: $value <br>";
//}
//
//for ($i = 0; $i < 5; $i++) {
//    for ($j = 0; $j < $i; $j++) {
//        echo '*';
//    }
//    echo '* <br>';
//}
//
//
//for ($x = 1; $x <= 10; $x++) {
//    echo ' 5 X ' . $x . " = " . (5 * $x) . '<br >';
//}
//
//for ($i = 1; $i <= 5; $i++) {
//    for ($j = 5; $j >= $i; $j--) {
//        echo '*';
//    }
//    echo '<br>';
//}
//
//
//$numbers = [2, 4, 6, 8, 10];
//$numberDoubled = [];
//foreach ($numbers as $number) {
//    array_push($numberDoubled, $number * 2);
//};
//print_r($numberDoubled);
//
//
//echo "<p>Damiën van den IJssel <br> +31 12345678</p>";


//request uri de pagina in gaan laden die gevraagd wordt
//http://localhost:8888/contact.view.php
//if() / switch()
//var_dump($_SERVER['REQUEST_URI']);

switch($_SERVER['REQUEST_URI']){
    case '/':
        require 'views/index.view.php';
        break;
    case '/contact':
        require 'views/contact.view.php';
        break;
    case '/about':
        require 'views/about.view.php';
        break;
    default:
        echo '404 Not Found';

}





