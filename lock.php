<?php

include('config.php');
session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("select usuario from usuario where usuario = '$user_check' ");

$row = mysql_fetch_array($ses_sql);

$login_session = $row['usuario'];

if (!isset($login_session)) {
  header("Location: ../login.php");
}
?>