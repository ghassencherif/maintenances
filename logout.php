<?php 
session_start();

session_unset($_SESSION['verified_user_id']);
session_unset($_SESSION['idTokenString']);
session_destroy();

header("Location: login.php");