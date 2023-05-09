<?php
include_once "./controller/Paths.php";
include_once "./model/UserModel.php";

class UserContr extends Users {
    public static function registerUser() {
        // if(isset($_SESSION['logged_in'])) {
        //     header ('location: ' . ROOT);
        // }
        if(isset($_POST['sign-up'])) {
            Users::addUser($_POST);
        }

        include_once "./view/signUp.php";
    }

    public static function signInUser() {
        if(isset($_SESSION['user']) && $_SESSION['user'] !== false) {
            header('location: ' . HOME);
        }

        if(isset($_POST['sign-in']) && isset($_POST['email']) !== '' && isset($_POST['password']) !== '') {
            $user = new Users();
            $validated_user = $user->getUser($_POST);

            if($validated_user) {
                $_SESSION['user'] = $validated_user;

                header('location: ' . HOME);
            } else if(!$validated_user) {
                $message = "User does not exist or incorrect password";
                echo '<script> alert("' . $message . '"); </script>';
            }
        }

        include_once "./view/signIn.php";
    }

    

}