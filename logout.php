<?php
session_start();
session_unset();
header('location:http://127.0.0.1/library/login.html');
?>