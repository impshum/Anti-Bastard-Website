
<?php
ob_start();
session_start();

$password = 'pass';

$pass = $_POST['fuckyou'];
if ($pass == $password) {
  $_SESSION['logged_in'] = 'wanker';
  echo 'wanker';
} else {
  echo 'nope';
}
