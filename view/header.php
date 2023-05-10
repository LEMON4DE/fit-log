<?php
$title = "FIT LOG";

$_GET["action"] = $_GET["action"] ?? "";
?>

<header>
    <div id="header-main">
        <span>FIT LOG</span>
        <?php if(isset($_SESSION['user']) && $_SESSION['user'] !== false) { ?>
            <div>
                <span>Hi, <?= $_SESSION['user'][2] ?></span>
            </div>
            <form method="POST" action="">
                <button type="submit" name="sign-out">Sign out</button>
            </form>
        <?php if(isset($_POST['sign-out'])){
            session_unset();
            session_destroy();
            header('location: ' . HOME);
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
