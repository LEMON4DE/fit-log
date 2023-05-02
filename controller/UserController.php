<?php
include_once "./controller/Paths.php";
include_once "./model/UserModel.php";

class UserContr extends Users {
    public static function registerUser() {
        // if(isset($_SESSION['logged_in'])) {
        //     header ('location: ' . ROOT);
        // }
        if (isset($_POST['submit'])) {
            Users::addUser($_POST);
        }

        include_once './view/signUp.php';
    }

}