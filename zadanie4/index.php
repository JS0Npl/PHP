<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "Welcome, ".$_SESSION['first_name']." ".$_SESSION['last_name']."!";
} else {
    include "login.php";
}
?>