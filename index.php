<?php
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}

include_once './controller/UserController.php';
include_once './controller/HomeController.php';
include_once './controller/AboutController.php';
include_once './controller/workoutLogController.php';

$action = $_GET['action'] ?? '';

switch($action) {    
    case 'home':
        HomeContr::home();

    case 'signUp':
        UserContr::registerUser();
        break;

    case "about":
        AboutContr::about();
        break;

    case "workoutLog":
        WorkoutLogContr::logWorkout();
        break;

    default:
        UserContr::logInUser();
        break;
}

?>