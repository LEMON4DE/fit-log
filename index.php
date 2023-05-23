<?php
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}

include_once './controller/UserController.php';
include_once './controller/HomeController.php';
include_once './controller/AboutController.php';
include_once './controller/workoutLogController.php';
include_once './controller/workoutHistoryController.php';

$action = $_GET['action'] ?? '';

switch($action) {    
    case 'home':
        HomeContr::home();
        break;

    case 'signUp':
        UserContr::registerUser();
        break;

    case 'about':
        AboutContr::about();
        break;

    case 'workoutLog':
        WorkoutLogContr::saveWorkoutLog();
        break;

    case 'workoutHistory':
        WorkoutHistoryContr::showWorkoutHistory();
        break;

    default:
        UserContr::logInUser();
        break;
}

?>