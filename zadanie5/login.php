<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    include "config.php";

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ss", $_POST['username'], $_POST['password']);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $_POST['username'];;
        $_SESSION['first_name'] = "Jakub";
        $_SESSION['last_name'] = "Urbaniak";
        header("location: index.php");
        exit;
    } else {
        echo "Wrong login or password!";
    }
}
?>

<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Log in</button>
</form>