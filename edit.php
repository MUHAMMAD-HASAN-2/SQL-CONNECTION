<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  class="flex justify-center items-center min-h-screen bg-gray-100">
    
    <?php
require_once "connection.php";
$id = $_GET["Id"];
$sql = "SELECT * FROM products WHERE Id=$id";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Edit Products</h2>
    <!-- Form -->
    <form action="update.php" method="post">
        <!-- Name Input -->
        <input type="hidden" name="id" value="<?php echo $row["Id"]; ?>">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
            <input type="text" id="name" name="product_name" required value="<?php echo $row["Product_name"]; ?>"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>
        
        <!-- Category Input -->
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <input type="text" id="category" name="category" required value="<?php echo $row["Category"]; ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
            </div>
            
            <!-- Price Input -->
            <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <input type="number" min="0" id="price" name="price" required value="<?php echo (float)$row["Price"]; ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
            </div>
            
            <!-- Quantity Input -->
            <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
            <input type="number" id="quantity" name="quantity" required value="<?php echo $row["Quantity"]; ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>
        
        <!-- Added Date Input -->
        <div class="mb-4">
            <label for="added_date" class="block text-sm font-medium text-gray-700 mb-1">Added Date</label>
            <input type="date" id="added_date" name="added_date" required value="<?php echo $row["Added_date"]; ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
            </div>
            
            <!-- Submit Button -->
            <button type="submit"
            class="w-full py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Update Product
        </button>
    </form>
<?php
} else {
    echo "<h1>No Product Found</h1>";
    echo "<a href='index.php' class=\"w-full block text-center my-8 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500\"> Go Back </a>";
}


?>
</div>
</body>
</html>
