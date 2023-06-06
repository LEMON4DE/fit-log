<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <script src="./public/js/header.js" defer></script>
    <script src="./public/js/home.js" defer></script>
    <script src="./public/js/signUp.js" defer></script>
    <script src="./public/js/workoutLog.js" defer></script>
    <title>FIT LOG | <?= $title ?></title>
</head>
<body>
    <?php if(isset($_GET['action']) && $_GET['action'] !== 'signUp' && $_GET['action'] !== 'logIn') {
        include "./view/header.php";
    } ?>
    <?= $html ?>
</body>
</html>