<?php 
session_start();
unset($_SESSION['usernamead']);
header("Location:../../index.php");
?>