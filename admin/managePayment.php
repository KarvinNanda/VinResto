<?php
include '../connect.php';

$id=$_POST['userid'];
$change=1;
$query = $con->query("update customer set customer_pay = '$change' where customer_id = '$id'");
header("Location:adminPage");



?>