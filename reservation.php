<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="./Gambar/2022-04-04 (2).png" type="image/x-icon">
</head>
<body>

    <?php
    session_start();
        include 'header.php';
        if(isset($_SESSION['eror'])){
            $mes=$_SESSION['eror'];
            echo "<script type='text/javascript'>alert('$mes');</script>";
            session_destroy();
        }
    ?>
    <div class="container">

    <span></span>

    <div class="box">
        <h2>BOOK YOUR TABLE</h2>

        <form action="doValidation" class="reserve-from" method="POST">

            <div class="grup">
            Name <br>
            <input type="text" name="name" id="" placeholder="Name">
            </div>

            <div class="grup">
            Phone <br>
            <input type="text" name="phone" id="" placeholder="Phone Number" >
            </div>

            <div class="grup">
            Email <br>
            <input type="text" name="email" id="" placeholder="Email" >
            </div>

            <div class="grup">
            Number of Guest(between 1 and 6) <br>
            <input type="number" name="guest" min="1" max="6">
            </div>

            <div class="grup">
            Date <br>
            <input type="date" name="date" id="" placeholder="DD/MM/YYYY" >
            </div>

            <div class="grup">
            Time <br>
            <input type="time" name="time" id="" placeholder="HH:MM" >
            </div>

            <input type="submit" name="submit" value="BOOK NOW">
        </form>


    </div>
    
    </div>
    <?php
        include 'footer.php'
    ?>
</body>
</html>