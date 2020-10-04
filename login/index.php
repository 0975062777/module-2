<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <form method="post">

        <div class="login">
            <input type="text" placeholder="username" name="user">
            <input type="password" placeholder="password" name="pass">
            <input type="submit">
        </div>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        if ($username == "admin" && $password == "admin") {
            echo "<h2>Welcome $username to website<h2/>";
        } else {
            echo "<h2>Login Error<h2/>";
        }
    }

    ?>

</body>

</html>