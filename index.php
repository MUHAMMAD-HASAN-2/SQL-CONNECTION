<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .table{
            margin-top: 200px;
            font-family:cursive ;
        }
    </style>
</head>
<body>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quanity</th>
      <th scope="col">Added_Date</th>
      <th scope="col">Add</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
         require_once("connection.php");
         $res = mysqli_query($connect, "SELECT * FROM products ;");                   
         if (mysqli_num_rows($res) > 0) {                        
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
 
    <tr>
      <th scope="row"><?php echo $row["Id"] ?></th>
      <td><?php echo $row["Product_name"] ?></td>
      <td><?php echo $row["Category"] ?></td>
      <td><?php echo $row["Price"] ?></td>
      <td><?php echo $row["Quantity"] ?></td>
      <td><?php echo $row["Added_date"] ?></td>
      <td><a href="create.php"><button type="button" class="btn btn-secondary">Add</button></td></a>
      <td><a href="edit.php?Id=<?php echo $row["Id"] ?>"><button type="button" class="btn btn-secondary">Edit</button></td></a>
      <td><a href="delete.php?Id=<?php echo $row["Id"]; ?>"><button type="button" class="btn btn-secondary">Delete</button></td></a>
    </tr>
   
    <?php } 
  }?>
  </tbody>
</table>






</body>
</html>