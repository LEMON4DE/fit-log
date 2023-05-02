<?php
include "./model/Db.php";

class Users extends DB
{
    public static function addUser($postData)
    {
        if (isset($_POST)) {
            $db = DB::connectToDB();

            $email = $postData['email'];
            $user_password = password_hash($postData['password'], PASSWORD_BCRYPT);

            $add_user = $db->prepare('INSERT INTO users (email, password, first_name, last_name, birthday, created_date, is_deleted, admin)
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

            $add_user->execute([$email, $user_password, $postData['first-name'], $postData['last-name'], $postData['birthday'], date('Y-m-d H:i:s'), '0', '0']);
        }
    }
}
