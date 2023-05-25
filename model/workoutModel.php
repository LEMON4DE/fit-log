<?php
include_once "./model/Db.php";

class Workout extends DB {
    public static function saveLogToDB($postData) {
        $db = DB::connectToDB();

        if(isset($postData['data']) && isset($_SESSION['user'])) {
            $data = json_decode($postData['data'], true);
            print_r($data);
            print_r($_SESSION['user']);

            $save_data = $db->prepare('INSERT INTO workout_log (date, workout_type, muscle_group, exercise, weight, sets, reps, start_time, end_time, user_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )');
            $save_data->execute([$data['date'], $data['workoutType'],  $data['muscleGroup'], $data['exercise'], $data['weight'], $data['sets'], $data['reps'], $data['startTime'], $data['endTime'], $_SESSION['user']['id']]);
        }
    }

    public static function getLogFromDB() {
        $db = DB::connectToDB();

        $user_id = $_SESSION['user']['id'];

        $get_history = $db->prepare('SELECT date, workout_type, muscle_group, exercise, weight, sets, reps, start_time, end_time FROM workout_log WHERE user_id = :user_id ');
        $get_history->bindParam(':user_id', $user_id);
        $get_history->execute();

        $workout_history = $get_history->fetchAll();

        return $workout_history;
    }
}