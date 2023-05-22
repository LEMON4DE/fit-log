<?php
$title = "FIT LOG";
?>

<header>
    <div id="header-main">
        <span id="header-logo">FIT LOG</span>
    <?php if(isset($_SESSION['user']) && $_SESSION['user'] !== false) { ?>
        <div id="profile-container">
            <div id="profile"><span>N</span></div> <!-- Get the first letter from the user's first name and display -->
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
            <li><a href="<?= ABOUT ?>">About</a></li>
            <li><a href="<?= WORKOUT_LOG ?>">Workout Log</a></li>
            <li><a href="">Workout History</a></li>
        </ul>
    </nav>
</header>
