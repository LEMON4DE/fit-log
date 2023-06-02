<?php
$title = "FIT LOG";
$selected = "background-color: rgba(211, 211, 211, 1); font-weight: 800; color: white; border-radius: 15px;";
?>

<header>
    <div id="header-main">
        <span id="header-logo" ><a href="<?= HOME ?>">FIT LOG</a></span>
    <?php if(isset($_SESSION['user']) && $_SESSION['user'] !== false) { ?>
        <div id="profile-container">
            <div id="profile"><span>N</span></div> <!-- Get the first letter from the user's first name and display -->
                <ul id="dropdown-menu">
                    <li href="#">Manage your account</li>
                    <li href="#">Settings</li>
                    <li>
                        <form method="POST" action="">
                            <button type="submit" name="sign-out">Sign out</button>
                        </form>
                    </li>
                </ul>
        </div>
    <?php if(isset($_POST['sign-out'])){
        session_unset();
        session_destroy();
        header('location: ' . LOG_IN);
    }} ?>
    </div>
    <nav id="menu-bar">
        <ul>
            <li id="about-menu" style="<?= $_GET['action'] == 'about' ? $selected : '' ?>"><a href="<?= ABOUT ?>" >About</a></li>
            <li id="workout-log-menu" style="<?= $_GET['action'] == 'workoutLog' ? $selected : '' ?>"><a href="<?= WORKOUT_LOG ?>">Workout Log</a></li>
            <li id="workout-history-menu" style="<?= $_GET['action'] == 'workoutHistory' ? $selected : '' ?>"><a href="<?= WORKOUT_HISTORY ?>">Workout History</a></li>
        </ul>
    </nav>
</header>
