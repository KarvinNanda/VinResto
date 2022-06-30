<?php
$databaseHost="localhost";
$databaseUsername="root";
$databasePassword="";
$databaseName="vin_resto";

$con = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if($con->connect_error){
    die("Connection Failed: ".$con->connect_error."<br");
}





?>