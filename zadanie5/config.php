<?php
$db = new mysqli("localhost", "root", "", "base");

if(!$db) {
    die("database connection error: ".mysqli_connect_error());
}
?>
