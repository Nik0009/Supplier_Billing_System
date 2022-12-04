<?php 

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


include('header.php')?>
<h1>BILL:</h1>


<!DOCTYPE html>
<html>
<head>
	<title>LUCKY Salt Supplier</title>
</head>
<body>
	<center>
		<div>
<form method="post" action="print.php">
	<table>
		<th>Customer Name</th>
		<th>ADDRESS</th>
		<th>Payment Type</th>
		<th>Delivery Date</th>
		<th>Contact Number</th>
		<tr>
			<td style="padding: 10px;">
				<input type="text" name="cname" placeholder="Name" required></td>
			<td><input type="text" name="add" placeholder="ADDRESS" required></td>
			<td><select name="ptype" required>
					<option value="CASH">CASH</option>
					<option value="CHEQUE">CHEQUE</option>
					</option></select></td>
			<td><input type="date" name="ddate" required></td>
			<td><input type="text"name="mno" placeholder="Mobile number" required></td>
		</tr>
		
	</table>
 <input type="submit" id="right-label" value="Next" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;" >

              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">



              
</form>

</center>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php')?>