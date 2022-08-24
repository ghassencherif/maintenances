<?php
session_start();
if (!isset($_SESSION['verified_user_id']) or !isset($_SESSION['idTokenString'])) {
    header("Location: login.php");
}

$connectUsersRef = $db->collection('users');
$query = $connectUsersRef->where('uid','==',$_SESSION['verified_user_id']);
$connectUsers = $query->documents();
$user_connect=$connectUsers->rows()[0]->data();

?>