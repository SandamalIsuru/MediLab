<?php
require 'conect.php';
unset($_SESSION['user_name']);
session_destroy();
header("location:index.php");
?>