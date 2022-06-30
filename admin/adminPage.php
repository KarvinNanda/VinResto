<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../Gambar/2022-04-04 (2).png" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    include '../connect.php';

    if(isset($_SESSION['user'])){
        if(strcmp($_SESSION['user'],"admin")==0){
    ?>
    

    <form action="logout" method="post">
        <input type="submit" name="submit" value="Logout" >
    </form>

    <center>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Pay</th>
        </tr>

        <?php
                $query=$con->query("select * from customer where customer_pay=0");
                while($data=mysqli_fetch_assoc($query)){?>
        <tr>
            
                <form action="managePayment" method="post">
                <td><?=$data['customer_name']?></td>
                <td><?=$data['customer_phone']?></td>
                <td><?=$data['customer_email']?></td>
                <input type="hidden" name="userid" value="<?=$data['customer_id']?>">
                <td><button type='submit'><?=$data['customer_pay'] == 0 ? 'Unpaid' : 'Paid'?></button>	</td>
                </form>
            
        </tr>
        <?php
                }
            ?>

    </table>
    </center>
        <?php
        }
    }else{
        header("Location:admin");
    }
        ?>

</body>
</html>