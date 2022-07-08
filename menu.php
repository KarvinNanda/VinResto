<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="./Gambar/2022-04-04 (2).png" type="image/x-icon">
</head>
<body >
    <?php
        session_start();
        include 'header.php';
        include 'connect.php';
        $arr=array();
        $count=0;
    ?>

    
    <div class="container">
    
    <div class="content">
        <?php
            $query=$con->query("select * from menus");

            while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="item">
            <a href="view?id=<?= $row['menu_id'] ?>" style="text-decoration: none; color: black;">
            <?php
			echo '<img width="250px" height="200px" src="data:image/jpg;base64,'.base64_encode($row['menu_image']).'"/>';
		    ?>
            <p class="menu_name" ><?= $row['menu_name']?></p>
            <p class="menu_price" >Rp.<?= $row['menu_price']?>.000</p>
            </a>
        </div>
        <?php
        }
        ?>
        </div>

       
</div>

    
        
    

    <?php
        include 'footer.php'
    ?>

    
</body>
</html>
