<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('data user baru berhasil diregistrasi');
                </script>";
        header("Location: index.php");
    } else {
        mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi page</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="password2">konfigmasi password : </label>
                <input type="password" id="password2" name="password2">
            </li>
            <li>
                <button type="submit" name="registrasi">Register</button>
            </li>

        </ul>
    </form>

</body>

</html>