<?php
include_once './model/workoutModel.php';

class WorkoutHistoryContr extends Workout {
    public static function showWorkoutHistory() {
        $workout_history = new Workout();

        $data = $workout_history->getLogFromDB();

        include_once './view/workoutHistory.php';
    }
}