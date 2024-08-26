<?php
require_once("connection.php");
// echo "<pre>";
// print_r($_POST);

$Product_name=$_POST["name"];
$Category=$_POST["email"];
$Price=$_POST["age"];
$Quantity=$_POST["city"];
$Added_date=$_POST["city"];


$sql="INSERT INTO products (Product_name,Category,Price,Quantity,Added_date) VALUES ('$Product_name','$Category',$Price,'$Quantity','$Added_date');";

$result = mysqli_query($connect,$sql);

if($result){
    // echo "Data Inserted Successfully";
    header("Location: index.php");
}else{
    echo "Error to Insert Data";
}