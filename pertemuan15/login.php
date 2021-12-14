<?php

require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username'";

    // var_dump(mysqli_affected_rows($conn));
    // die;

    $result = mysqli_query($conn, $query);

    // var_dump(mysqli_num_rows($result));
    // die;

    // cek username 
    if (mysqli_num_rows($result) >= 1) {
        // echo "<script>
        //         alert('login username success');
        //         document.location.href = 'index.php'
        //         </script>";
        // return true;

        // cek password dengan memanfaatkan password_verify untuk mengambil password yg telah di hash
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        // die;
        if (password_verify($password, $row["password"])) {
            // echo "<script>
            //     alert('login Username & password success');
            //     document.location.href = 'index.php'
            //     </script>";
            header("Location: index.php");
            // return true;
            exit;
        }

        // else {
        //     echo "<script>
        //         alert('login password failed');
        //         document.location.href = 'login.php'
        //         </script>";
        //     return false;
        // }
    }
    $error = true;
    // else if (mysqli_num_rows($result) < 1) {
    //     echo "<script>
    //             alert('login username failed');
    //             document.location.href = 'login.php'
    //             </script>";
    //     return false;
    // }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username atau password salah</p>
    <?php endif ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>

</body>

</html>