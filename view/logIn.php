<?php
$title = "LOG IN";
ob_start();
?>

<div id="log-in-container">
    <h2>FIT LOG</h2>
    <form id="log-in-form" method="POST" action="">
        <div class="email-container">
            <label for="email">
                <input id="email" class="email-input" type="text" name="email" placeholder="Email" />
            </label>
        </div>
        <div class="password-container">
            <label for="password">
                <input id="password" class="password-input" type="password" name="password" placeholder="Password" />
            </label>
        </div>
        <button class="log-in-button" type="submit" name="log-in">Log In</button>
    </form>
</div>
<div id="sign-up-container">
    <p>Don't have an account? <a href="<?= SIGN_UP ?>">Sign up</a></p>
</div>

<?php
$html = ob_get_clean();
include_once './view/template.php';
?>