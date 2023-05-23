<?php
include_once "./model/workoutModel.php";

class WorkoutLogContr extends Workout {
    public static function saveWorkoutLog() {
        if(isset($_POST)) {
            Workout::saveLogToDB($_POST);
        }
        include_once './view/workoutLog.php';
    }
}