<?php

include 'config.php';

$product_code = $_POST["product_code"];
$product_name = $_POST["product_name"];
$product_desc = $_POST["product_desc"];

$qty = $_POST["qty"];
$price = $_POST["price"];

 if(!empty($_FILES['file']))
  {
    /*
    $path = "images/";
    $path = $path . basename( $_FILES['file']['name']);
    */

    $targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))

 
    {

     $insert = $mysqli->query("INSERT into products (product_code,product_name,product_desc,product_img_name,qty,price) VALUES ('$product_code','$product_name','$product_desc','$fileName',$qty,$price)");

     if($insert)
            {
               echo "Product has been added successfully.";
            }
            else
             {
                echo "Failed to add";
             }

         

     }
  
}
else
{

	echo "Code is wrong in if statement";
}







