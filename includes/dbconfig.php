<?php
$servername = "remotemysql.com";
$username = "iPunakeaGj";
$password = "I9YhqpMMHS";
$database = "iPunakeaGj";

$q = "SELECT * FROM `updates`";
$conn = mysqli_connect($servername, $username, $password, $database);
$result = mysqli_query($conn, $q);
?>