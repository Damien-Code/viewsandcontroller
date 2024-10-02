<?php
switch ($_SERVER['REQUEST_URI']){
    case '/':
        require './controller/IndexController/IndexController.php';
        break;
    case '/about':
        require './controller/IndexController/AboutController.php';
        break;
    default:
        echo "Error 404";
}
//test
?>