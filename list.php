<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <?php include 'navbar.html'; ?>
    <form action="dashboard.php" class="w-50 m-auto mt-3 p-3 rounded shadow">
        <h1 class="text-center bg-red">Product Listing</h1>
    <div>
        <label class="text-dark" for="">Product name</label>
        <input type="text" class="form-control" name="product_name" placeholder="Name">
    </div>
    <div>
        <label class="text-dark" for="">Product price</label>
        <input type="text" class="form-control" name="product_price" placeholder="Price">
    </div>
    <div>
        <label class="text-dark" for="">Product image</label>
        <input type="file" class="form-control"name="product_image" placeholder="Image">
    </div>
    <div>
        <label class="text-dark" for="">Product description</label>
        <input type="text" class="form-control" name="product_description" placeholder="Description">
    </div>
    <div class="mb-3">
           <label for="role" class="form-label">Product category</label>
           <select class="form-select" name="product_category">
               <option value="category">Medical </option>
               <option value="category">Electronic</option>
               <option value="category">Fashion</option>
               <option value="category">automobile</option>
           </select>
       </div>
        <div>
        <label class="text-dark" for="" >Product quality</label>
        <input type="text" class="form-control" name="product_quality" placeholder="Quality">
    </div>
    <div>
        <button class="btn btn-dark w-100">Add to cart</button>
    </div>

    </form>
</body>
</html>