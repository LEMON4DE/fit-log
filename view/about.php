<?php
$title = "ABOUT";
ob_start();
?>

<div id="about-container">
    <div id="img-container">
        <img src="./public/img/w7.jpeg" alt="workout images"/> <!-- Working out images rotate by fading in and out -->
    </div>
    <div id="text-container">
        <p><b>FIT LOG</b> is a workout log app<br>where you can keep track of<br> your workout routines and progress.<br><br>Get healthier and stay ambitious with <br><b>FIT LOG</b></p>
    </div>
</div>

<?php
$html = ob_get_clean();
include "./view/template.php";
?>