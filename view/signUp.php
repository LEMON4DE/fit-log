<?php
$title = "SIGN IN";
ob_start();
?>

<div id="sign-up-container">
    <h1>SIGN UP</h1>
    <form id="sign-up-form" method="POST" action="">
        <div class="username-container" >
            <label for="email">Email: </label>
            <input type="email" name="email" placeholder="Enter username" />
        </div>
        <div class="password-container">
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <div class="first-name-container">
            <label for="first-name">First name: </label>
            <input type="text" name="first-name" placeholder="First name" />
        </div>
        <div class="last-name-container">
            <label for="last-name">Last name: </label>
            <input type="text" name="last-name" placeholder="Last name" />
        </div>
        <div class="birthday-container">
            <label for="birthday">Birthday: </label>
            <input type="date" name="birthday" />
        </div>
        <!-- Add confirm password function later
        <div class="confirm-password-container">
            <label for="confirm-password">Password: </label>
            <input type="password" name="confirm-password" placeholder="Confirm password" />
        </div> -->
        <button type="submit" name="submit">Sign Up</button>
    </form>
</div>

<?php
$html = ob_get_clean();
include_once './view/template.php';
?>