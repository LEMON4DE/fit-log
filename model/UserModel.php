<?php
include "./model/Db.php";

class Users extends DB
{
    public static function addUser($postData) {
        $db = DB::connectToDB();

        $email = $postData['email'];
        $user_password = password_hash($postData['password'], PASSWORD_BCRYPT);

        $add_user = $db->prepare('INSERT INTO users (email, password, first_name, last_name, birthday, created_date, is_deleted, admin)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

        $add_user->execute([$email, $user_password, $postData['first-name'], $postData['last-name'], $postData['birthday'], date('Y-m-d H:i:s'), '0', '0']);
    }

    public static function getUser($postData) {
        $db = DB::connectToDB();

        $input_email = $postData['email'];
        $input_password = $postData['password'];
        $get_user = $db->prepare('SELECT email, password, first_name, last_name, is_deleted, admin FROM users WHERE email = :email');
        $get_user->bindParam(':email', $input_email);
        $get_user->execute();
        $retrieved_user = $get_user->fetch();

        if(password_verify($input_password, $retrieved_user['password'])) {
            return $retrieved_user;
        };
    }
}
