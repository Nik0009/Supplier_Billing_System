 <html>
 <head>
  <title></title>
 </head>
<body>
<?php include('header.php');
?>



 <?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';
 if(isset($_SESSION['cart'])) {

$total = 0;

$_SESSION["products_id"] = array();

$cname=$_POST["cname"];
$add=$_POST["add"];
$ptype=$_POST["ptype"];
$ddate=$_POST["ddate"];
$mno=$_POST["mno"];





  
}

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost)");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }

      }
    }
  }
}

//header("location:products.php");

 ?>

  <html>
<head>
  <script>
    function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>
</head>
<div id='printMe'>
</table></font>
<div align="center">
  <body>
<table border="">
  <tr> <center><td  style= "text-align:center; border-width: 0px;" colspan="4" >
   <b>|| SHREE SANT BALUMAMA PRASSANA  ||</b><br>
    <b style="font-size: 20px;">
    LUCKY SALT SUPPLIER
    </b>

    <br>

    <?php echo  "Gajanan maharaj mandir marg, New siddharth nagar, Bhatwadi, Ghatkopar(west) Mumbai 400084.";
?>


</center>
</td></tr>
  <tr>
    <td colspan="2" style="border-width: px;" rowspan="2">
    Customer Name: <?php echo $cname; ?> <b style="text-transform: uppercase; text-align: right;"> </b><br>
    Address:<?php echo $add; ?><br>
    Contact:<?php echo $mno; ?> <br>
    Payment Type:<?php echo $ptype; ?><br>
    <b></b>

    </td>
    <td align="right" colspan="3">Date: <?php echo $ddate;?></td>
  </tr>
  <tr>
    <td colspan="3" align="right">Rc. No: <b>1</b></td>
  </tr>
  <tr>
    <td style="padding-left: 0px;"><b>Sr No.<?php ?></b></td>
    <td><b>Particulars</b></td>
    <td><b>Rate</b></td>
    <td><b>Qty</b></td>
    <td><b>Total</b></td>
  </tr>
  <tr >
    <td style="padding-bottom: 150px; max-width: 25ch">
      <br><div align=center></div>


<?php 

$sr_no=0;
 foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {

        $sr_no++;
        echo $sr_no.'<br>';
        }
    }
  }
        ?>





    </td>
    <td style="padding-bottom: 150px; max-width: 15ch">
       <?php  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {
        echo $obj->product_name.'<br>';
        }
    }
  }
        ?>
      <div style='text-transform:uppercase'>  

                </td>
    <td style="padding-bottom: 150px;">

<?php  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {
        echo $obj->price.'<br>';
        }
    }
  }
        ?>


 

    </td>
    <td style="padding-bottom: 150px;" align="right">
      
      <?php  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {
        echo $quantity.'<br>';
        }
    }
  }
        ?>
    </td>
    <td style="padding-bottom: 150px;" align="right">
      


<?php  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

       

      if($obj = $result->fetch_object()) {

        echo  $quantity*$obj->price.'<br>';
        }
    }
  }
        ?>


    </td>
    </tr>
  
  <tr><td colspan="2">TOTAL :</td><td></td><td align="right">
    

    <?php  

$sum=0;
    foreach($_SESSION['cart'] as $product_id => $quantity) {
         
    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {

        $sum=$sum+$quantity;

     
        }
    }
  }
  echo $sum.'<br>';
        ?>




  </td><td align="right">
    


<?php  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

       

      if($obj = $result->fetch_object()) {

          $total = $total + $quantity*$obj->price;

        
        }
    }
  }
  echo  $total.'<br>';
        ?>



  </td></tr>
  <br />
</div>
</td>
</tr>


<tr> <td  style= "text-align:center; border-width: 0px;" colspan="2" >

<?php echo  "I/We hereby certified that salts mentioned in this invoice are warranted to be of the same in nature and quality which it/these putport/purports to be.
  <br>JAY MALHAR<br>
  CHEQUE RETURN CHARGES Rs.1000/- ";
?>
</td>

<td style="text-align: right;" colspan="3"><br><br><br><br> Authorized Signature</td>

</tr>
</table>


</div>

<?php 

 if(isset($_SESSION['cart'])) {


foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        


   $query = $mysqli->query("INSERT INTO orders (cname, add, ptype, ddate, contact, product_code, product_name,product_desc, price, units, total) VALUES ('$cname','$add','$ptype','$ddate',$mno,'$obj->product_code','$obj->product_name','$obj->product_desc',$obj->price, $quantity,$total)");

   if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id))
          {
            echo "Failed to UPDATE";
          }
        }

    }
}
}
}
?>

<center>

  <button onclick="printDiv('printMe')">Print</button>
</center>
<?php unset($_SESSION['cart']);
?>
</body>
</html>