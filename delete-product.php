<?php
include "dbconn.php";
if(isset($_GET["pid"])){
$id=$_GET["pid"];
$query="DELETE  FROM products WHERE Productid = $id";
   $cmd=mysqli_query($conn,$query);

   header("Location:product.php");}
?>