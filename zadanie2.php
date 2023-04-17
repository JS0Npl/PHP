<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zadanie 2</title>
</head>
<body>
    <form method="get" action="">
      <p> Login: </p> <input type="text" value="admin" name="login" id=""> <br>
       <p> Hasło </p> <input type="password" value="Root_123" name="haslo" id=""> <br>
        <input type="submit" name="submit" value="Zaloguj się">
    </form>
</body>
</html>

<?php
if (isset($_GET['submit'])) {
    if($_GET['login'] === "admin") {
        if($_GET['haslo'] === "Root_123") {
            echo "Witaj, ".$_GET['login'];
        }
        else {
            echo "<p> Nieprawidłowe hasło! <p>";
        }
    } else {
        echo"<p> Nieprawidłowy login! <p>";
    }
}
?>