<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
    <link rel="icon" href="./Gambar/2022-04-04 (2).png" type="image/x-icon">

    <style>
        .borV{
            display: flex;
            border: 1px solid #efefef;
            width: 50%;
            margin: auto;
            border-radius: 3px;
            width: 85%;
            height: 350px;
        }

        .containV{
            padding: 1%;
            
        }

        .imaV{
            width: 100%;
            height: 100%;

        }

        .nameV{
            font-size: 30px;
            font-style: italic;
            
        }

        .prisV{
            font-size: 20px;
            margin-top: 10%;
        }

        .descV{
            font-size: 20px;
            margin-top: 10%;
        }

        .infoV{
            display: block; 
            color: #d2fdff;
            justify-content: center;
            align-items: center;
            text-align: center;
            
        }
    </style>
</head>
<body>
<?php
include 'header.php';
include 'connect.php';
$id = $_GET['id'];
$query = $con->query("select * from menus where menu_id = '$id'");

while($row = mysqli_fetch_assoc($query)){
    ?>
        <div class="container">
        <div class="containV">

        <div class="borV">
            <div class="imaV">
            <?php
			echo '<img width="450px" height="350px" src="data:image/jpg;base64,'.base64_encode($row['menu_image']).'"/>';
		    ?>
            </div>
    
            <div class="infoV">
                <div class="nameV"><?= $row['menu_name'] ?></div>
               <div class="descV"><?= $row['menu_description'] ?></div>
               <div class="prisV">Price <br>Rp.<?= $row['menu_price'] ?>.000 </div>
            </div>
        </div>    
    
        </div>
        </div>
    <?php
     }
     include 'footer.php';
    ?>
</body>
</html>
