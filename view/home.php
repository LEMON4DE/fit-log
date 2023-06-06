<?php 
$title = "HOME";
ob_start();
?>

<div id="welcome_message_container">
    <p id="message_1"></p>
    <p id="message_2"></p>
</div>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>