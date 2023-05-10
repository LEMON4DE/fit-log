<?php
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}

include_once "./controller/UserController.php";
include_once "./controller/HomeController.php";

$action = $_GET["action"] ?? "home";

switch($action) {    
    case "home":
        HomeContr::home();

    case "signUp":
        UserContr::registerUser();
        break;

    // case "logIn":
    //     UserContr::logInUser();
    //     break;

    default:
        UserContr::logInUser();
        break;
}

?>