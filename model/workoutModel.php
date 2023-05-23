<?php
include_once "./model/Db.php";

class Workout extends DB {
    public static function saveLogToDB($postData) {
        $db = DB::connectToDB();

        if(isset($postData['data']) && isset($_SESSION['user'])) {
            $data = json_decode($postData['data'], true);
            print_r($data);
            print_r($_SESSION['user']);

            $save_data = $db->prepare('INSERT INTO workout_log (date, workout_type, exercise, weight, sets, reps, start_time, end_time, user_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? )');
            $save_data->execute([$data['date'], $data['workoutType'], $data['exercise'], $data['weight'], $data['sets'], $data['reps'], $data['startTime'], $data['endTime'], $_SESSION['user']['id']]);
        }
    }
}