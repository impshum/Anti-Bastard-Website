<?php
   session_start();
   unset($_SESSION["logged_in"]);
   header('Refresh: 0; URL = index.php');
?>
<style>
html, body {
  background: #0a0a0a;
}
</style>
