<?php


session_start();
session_unset();
session_destroy();

header("location: http://localhost:8888/restoran/admin-panel/admins/login-admins.php");

?>