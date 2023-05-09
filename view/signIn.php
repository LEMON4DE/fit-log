<?php
$title = "SIGN IN";
ob_start();
?>

<div id="sign-in-container">
    <h1>SIGN IN</h1>
    <form id="sign-in-form" method="POST" action="">
        <div class="username-container" >
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Enter username" />
        </div>
        <div class="password-container">
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <button type="submit" name="sign-in">Sign In</button>
    </form>
</div>

<?php
$html = ob_get_clean();
include_once './view/template.php';
?>