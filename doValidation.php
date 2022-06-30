<?php
session_start();

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $guest=$_POST['guest'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $pay=0;

    if(empty($name) || empty($phone) || empty($email) || empty($guest) || empty($date) || empty($time)){
        $_SESSION['eror']="all field must be required";
        header("Location:reservation");
    }

    else if(!is_numeric($phone)){
        $_SESSION['eror']="phone number must be numeric";
        header("Location:reservation");
    }

    else if(strlen($phone) != 12 && strlen($phone) != 11 && strlen($phone) != 10){
        $_SESSION['eror']="phone number must be valid(10-12 digits)";
        header("Location:reservation");
    }

    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['eror']="email must be valid";
        header("Location:reservation");
    }

    else{
        include 'connect.php';
        $query = "insert into customer(customer_name,customer_phone,customer_email,customer_guest,customer_date_order,customer_time_order,customer_pay) values(?,?,?,?,?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssissi",$name,$phone,$email,$guest,$date,$time,$pay);
        $stmt->execute();

        header("Location:verify");
    }

}

?>