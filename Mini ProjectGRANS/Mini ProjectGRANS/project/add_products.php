<html>
<body >
<?php include('header.php'); ?>
<center>
<h2>ADD NEW PRODUCT</h2>
<form action="add.php" method="POST" enctype="multipart/form-data">
Product Code: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type="text" name="product_code" required><br>
Product Name: &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="product_name" required><br>
Product Description:  <input type="text" name="product_desc" required><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="file" required><br>
Product Quantity:&nbsp;&nbsp; &nbsp;      <input type="text" name="qty" required><br>
Product Price: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;    <input type="text" name="price" required><br><br>

<input type="submit" id="right-label" name="submit" value="ADD" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="RESET" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">

</form>
</center>
<?php include('footer.php'); ?>
</body>
</html>