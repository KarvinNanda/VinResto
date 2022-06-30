<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="../Gambar/2022-04-04 (2).png" type="image/x-icon">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['eror'])){
            $mes=$_SESSION['eror'];
            echo "<script type='text/javascript'>alert('$mes');</script>";
            session_destroy();
        }
    ?>
    <form action="adminValidation" method="post">

        Username
        <input type="text" name="user" id="">
        <br>

        Password
        <input type="password" name="pass" id="">
        <br>

        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>