<?php
$title = "LOG IN";
ob_start();
?>

<div id="log-in-container">
    <h1>LOG IN</h1>
    <form id="log-in-form" method="POST" action="">
        <div class="username-container" >
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Enter username" />
        </div>
        <div class="password-container">
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <button type="submit" name="log-in">Sign In</button>
    </form>
</div>

<?php
$html = ob_get_clean();
include_once './view/template.php';
?>