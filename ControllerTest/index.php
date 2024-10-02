<?php
//include './controller.IndexController.IndexController.php';
//include './controller.IndexController.AboutController.php';


switch ($_SERVER['REQUEST_URI']){
    case '/':
        require './controller/IndexController/IndexController.php';
        indexPage();
        break;
    case '/about':
        require './controller/IndexController/AboutController.php';
        aboutPage();
        break;
    default:
        echo "Error 404";
}
?>