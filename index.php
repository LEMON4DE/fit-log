<?php
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}

include_once "./controller/UserController.php";
include_once "./controller/HomeController.php";

$action = $_GET["action"] ?? "home";

switch($action) {    
    case "signUp":
        UserContr::registerUser();
        break;

    case "signIn":
        UserContr::signInUser();
        break;

    default:
        HomeContr::home();
        break;
}

?>