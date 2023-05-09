<?php 
$title = "HOME";
ob_start();
?>

<h1>WELCOME TO FIT LOG</h1>
<?= print_r($_SESSION['user']); ?>

<?php
$html = ob_get_clean();
include_once "./view/template.php";
?>