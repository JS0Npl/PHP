<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zadanie 2</title>
</head>
<body>
    <form method="get" action="">
      <p> Login: </p> <input type="text" value="admin" name="username" id=""> <br>
       <p> Hasło </p> <input type="password" value="test" name="password" id=""> <br>
        <input type="submit" name="submit" value="Log in">
    </form>
</body>
</html>

<?php

$base = new mysqli("localhost", "root", "", "base");

if($base->connect_error){
    die('Connection error: '.$base->connect_error);
}else{
    echo "connection successful";
}

if (isset($_POST['submit'])) {

    $select = "SELECT * FROM users WHERE username ='". $_POST['username']."' and password = '".$_POST['password']."'";

    if (mysqli_num_rows(mysqli_query($base, $select)) > 0) {
        echo "Welcome, ".$_POST['username'];
    }
    else {
        echo "<p>Incorrect password or login.</p>";
    }
}

if (isset($_GET['submit'])) {
    if($_GET['username'] === "admin") {
        if($_GET['password'] === "test") {
            echo "Witaj, ".$_GET['username'];
        }
        else {
            echo "<p> Incorrect password! <p>";
        }
    } else {
        echo"<p> Incorrect username! <p>";
    }
}
?>
