<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <title>FIT LOG | <?= $title ?></title>
</head>
<body>
    <?php include "./view/header.php"; ?>
    <?= $html ?>
    <?php if(session_status() == PHP_SESSION_DISABLED) {
                echo "Hi! Session destroyed!";
            } ?>
</body>
</html>