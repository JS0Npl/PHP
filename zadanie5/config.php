<?php
$db = new mysqli("localhost", "root", "", "base");

if(!$db) {
    die("Błąd połączenia z bazą danych: ".mysqli_connect_error());
}
?>