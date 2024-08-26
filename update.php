<?php
require_once("connection.php");
// echo "<pre>";
// print_r($_POST);
$id=$_POST["id"];
$Product_name=$_POST["product_name"];
$Category=$_POST["category"];
$Price=$_POST["price"];
$Quantity=$_POST["quantity"];
$Added_date=$_POST["added_date"];


$query="UPDATE products SET product_name='$Product_name',category='$Category',price=$Price,quantity='$Quantity',added_date='$Added_date' WHERE id=$id ;";


// $result = mysqli_query($connect,$sql);

// echo $query;
if(mysqli_query($connect,$query)){
    header("Location: index.php");
}else{
    echo "Error To Update Data: " . mysqli_error($connect);
}

