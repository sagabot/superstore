<?php

// require("header.php");

$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
$db_select = mysqli_select_db($conn, 'superstore') or die(mysqli_error());



?>