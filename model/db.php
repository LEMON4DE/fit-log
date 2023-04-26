<?php
class DB {
    protected static function connectToDB() {
        $db_username = isset($_SERVER['FIT_LOG_DB_USERNAME']) ? $_SERVER['FIT_LOG_DB_USERNAME'] : 'root';
        $db_password = $_SERVER['FIT_LOG_DB_PASSWORD'];

        return new PDO('mysql:host=localhost;dbname=fit_log;charset=utf8', $db_username, $db_password);
    }
}