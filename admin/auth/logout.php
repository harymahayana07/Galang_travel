<?php
session_start();
unset($_SESSION['id_admin']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['pw']);
session_destroy();
header("location:login.php");
