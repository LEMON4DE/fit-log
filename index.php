<?php

include_once "./controller/UserController.php";

$action = $_GET["action"] ?? "";

switch($action) {
    case "home":
        
        break;
    
    case "signUp":
        UserContr::registerUser();
        break;

    case "signIn":

        break;
}

?>