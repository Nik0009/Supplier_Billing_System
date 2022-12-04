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

echo $cname;

}

?>

