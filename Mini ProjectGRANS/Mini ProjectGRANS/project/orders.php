<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<?php include('header.php')?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>


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
  <body>



  
        <h3> Orders</h3>
        <hr>
<div id='printMe'>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders order by rno DESC
limit 10 ");
          if($result) {
                echo "<table><tr><th>ID</th><th>Date</th><th>Product Code</th><th>Product Name</th><th>Price</th><th>Units</th><th>Total</th></tr>";

            while($obj = $result->fetch_object()) {
             
              /*
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              ;
              echo '<p><hr></p>';
              */
  echo "<tr><td>" .$obj->rno. "</td><td>" .$obj->date. "</td><td>" .$obj->product_code. "</td><td>" 
  .$obj->product_name."</td><td>" .$obj->price."</td><td>" .$obj->units. "</td><td>" .$obj->total."</td></tr>";
           
            }
             echo "</table>";
          }
        ?>
</div>




      <?php include('footer.php'); ?>




  </body>
</html>
