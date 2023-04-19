<?php
$db = new mysqli("localhost", "root", "", "base");

if(!$db) {
    die("Database connection error: ".mysqli_connect_error());
}
?>
