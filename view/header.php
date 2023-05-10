<?php
$title = "FIT LOG";

$_GET["action"] = $_GET["action"] ?? "";
?>

<header>
    <div id="header-main">
        <span id="header-logo">FIT LOG</span>
    <?php if(isset($_SESSION['user']) && $_SESSION['user'] !== false) { ?>
        <div id="profile-container">
            <span>Hi, <?= $_SESSION['user'][2] ?></span>
            <form method="POST" action="">
                <button type="submit" name="sign-out">Sign out</button>
            </form>
        </div>
    <?php if(isset($_POST['sign-out'])){
        session_unset();
        session_destroy();
        header('location: ' . LOG_IN);
    }} ?>
    </div>
    <nav>
        <ul>
            <li><a href="">About</a></li>
            <li><a href="">Workout Log</a></li>
            <li><a href="">Workout History</a></li>
        </ul>
    </nav>
</header>
