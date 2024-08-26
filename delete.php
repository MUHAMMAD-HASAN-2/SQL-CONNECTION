<?php
require_once "connection.php";
$id=$_GET["Id"];

$sql="DELETE FROM products WHERE Id=$id";

if(mysqli_query($connect,$sql)){
    header("Location: index.php");

}else{
    echo "Error to Delete Data";
}

