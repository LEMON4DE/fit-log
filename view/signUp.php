<?php
$title = "SIGN UP";
ob_start();
?>

<div id="sign-up-container">
    <h1>FIT LOG</h1>
    <form id="sign-up-form" method="POST" action="">
        <div class="email-container" >
            <label for="email">
                <input id="email" class="email-input" type="email" name="email" placeholder="Email" />
            </label>
        </div>
        <div class="password-container">
            <label for="password">
                <input id="password" class="password-input" type="password" name="password" placeholder="Password" />
            </label>
        </div>
        <div class="first-name-container">
            <label for="first-name">
                <input id="first-name" class="first-name-input" type="text" name="first-name" placeholder="First name" />
            </label>
        </div>
        <div class="last-name-container">
            <label for="last-name">
                <input id="last-name" class="last-name-input" type="text" name="last-name" placeholder="Last name" />
            </label>
        </div>
        <div class="birthday-container">
            <label for="birthday">
                <input id="birthday" class="birthday-input" type="date" name="birthday" />
            </label>
        </div>
        <!-- Add confirm password function later
        <div class="confirm-password-container">
            <label for="confirm-password">Password: </label>
            <input type="password" name="confirm-password" placeholder="Confirm password" />
        </div> -->
        <button class="sign-up-button" type="submit" name="sign-up">Sign Up</button>
    </form>
</div>
<div id="log-in-container">
    <p>Have an account? <a href="<?= LOG_IN ?>">Log in</a></p>
</div>

<?php
$html = ob_get_clean();
include_once './view/template.php';
?>