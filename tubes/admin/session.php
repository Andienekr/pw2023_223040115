<?php 

session_start();
if(!isset($_session['user'])) header("Location: ../login.php");

?>