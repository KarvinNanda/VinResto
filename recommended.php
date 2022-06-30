<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="res.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Dishes</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="./Gambar/2022-04-04 (2).png" type="image/x-icon">
</head>
<body>

    
    <?php
        include 'header.php';
        include 'connect.php';
    ?>
    

    <div class="container">

    <?php
    
    $query = $con->query("select * from menus where menu_id <=4 ");

    while($row = mysqli_fetch_assoc($query)){
    ?>

        <div class="contain">

        <div class="bor">
            <div class="ima">
            <?php
			echo '<img width="300px" height="200px" src="data:image/jpg;base64,'.base64_encode($row['menu_image']).'"/>';
		    ?>
            </div>
    
            <div class="info">
                <div class="name"><?= $row['menu_name'] ?></div>
               <div class="desc"><?= $row['menu_description'] ?></div>
               <div class="pris">Price <br>Rp.<?= $row['menu_price'] ?>.000 </div>
            </div>
        </div>    
    
        </div>
        
    <?php
     }
    ?>
    
    </div>

    <?php
        include 'footer.php';
    ?>

  

</body>
</html>