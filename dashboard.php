 <?php 
$po = $_POST("product_name");
$pp = $_POST("product_price");
$pi = $_POST("product_image");
$pd = $_POST("product_description");
$pq = $_POST("product_quality");
$pc = $_POST("product_category");

// function Errordisplay($message){
//     header("Location: ../list.php?anything=$message");
//     exit();
// }
if(empty($po)){
    Errordisplay('product name is required');
}
if(empty($pp)){
    Errordisplay("product price is required");
}
if(empty($pi)){
    Errordisplay('product image is required');
}
if(empty($pd)){
    Errordisplay('product description is required');
}
if(empty($pc)){
    Errordisplay('product category is required');
}

session_start(); 
$userDetails = ['po'=>$po, 'pp'=>$pp, 'pi'=>$pi, 'pd'=>$pd, 'pc'=>$pc,]; 
$_SESSION['userDetails'] = $userDetails;
header("Location: ../dashboard.php");
exit(); 

$database = mysqli_connect('localhost', 'root', '', 'myproduct');

$sql_query = "INSERT INTO product_tb (product_name, product_price, product_image, product_description, product_category, product_quality, created_at, updated_at) VALUE ($pn, $pr, $pi, $pd, $pq, $pc, $ca, $ua, $ca, $ua)";
$response = mysqli_query($database, $sql_query); 
if($response){
    echo "connected"; 
}else {
    echo "Not connected";
    Errordisplay("Database not connected"); 
 }
 if ($pc =="medical"){
    header("Location: ../Shop/medical.php"); 
    exit(); 
}
 if ($pc =="Fashion"){
    header("Location: ../Shop/fashion.php"); 
    exit(); 
}
 if ($pc =="Electronic"){
    header("Location: ../Shop/electronic.php"); 
    exit(); 
}
 if ($pc =="Automoblic"){
    header("Location: ../Shop/automoblic.php"); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to CRYSTAL STORE</h1>
</body>
</html>