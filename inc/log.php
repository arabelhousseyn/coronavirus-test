<?php
session_start();
session_destroy();
unset($_SESSION['main']);
header("refresh:0;url = ../inc/main.php")
?>