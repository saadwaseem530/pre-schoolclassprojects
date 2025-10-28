<?php
   include "dbconn.php";
   if(isset($_GET["pid"]))
   $id=$_GET["pid"];
else{
    $id=$_GET["id"];
}
   $squery="SELECT * FROM products WHERE Productid = $id";
   $scmd=mysqli_query($conn,$squery);
   $srow=mysqli_fetch_row($scmd);

   if(isset($_GET["btn"])){
    $id=$_GET["id"];
$name=$_GET["name"];
$scale=$_GET["scale"];
$scale=$_GET["scale"];
$code=$_GET["code"];
$cat=$_GET["cat"];
$vendor=$_GET["vendor"];
$description=$_GET["description"];
$qty=$_GET["qty"];
$price=$_GET["price"];
$msrp=$_GET["msrp"];
$productimage=$_GET["Productimage"];
  
  // $query="INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productScale`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `image`, `Productid`) VALUES ('$code', '$name', '$cat', '$scale', '$vendor', '$desc', '$qty', '$price', '$msrp', '$image', NULL)";
//   $query="INSERT INTO `products` (`Productid`, `productCode`, `productName`, `productLine`, `productScale`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `image`) VALUES (NULL, '$code', '$name', '$scale', '$scale', '$vendor', '$description', '$qty', '$price', '$msrp', '$productimage')"; 
//   $query="UPDATE `products` SET `productLine` = '$scale', `productVendor` = '$vendor', `productDescription` = '$description', `quantityInStock` = '$qty', `buyPrice` = '$price', `MSRP` = '$msrp', `image` = '$image' WHERE `products`.`Productid` = $id";
$query = "UPDATE `products` SET `productCode` = '$code', `productScale` = '$scale',`productName` = '$name',  `productDescription` = '$description', `quantityInStock` = '$qty', `MSRP` = '$msrp', `image` = '$image' WHERE `products`.`Productid` = $id";
  $cmd=mysqli_query($conn,$query);

   header("Location:product.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Students</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
       <?php
include "header.inc";
include "sidebar.inc";
?>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form method="get" >
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Product Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label  >Product Id</label>
                                       <input   value=<?php
                                       print("$srow[0]");
                                       
                                       ?>
                                       name="id" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label  >Product Name</label>
                                       <input   value=<?php
                                       print("$srow[2]");
                                       
                                       ?>
                                       name="name" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label >Product Scale</label>
                                       <input    value=<?php
                                       print("$srow[4]");
                                       
                                       ?> name="scale" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label  >Product Code</label>
                                       <input  value=<?php
                                       print("$srow[1]");
                                       
                                       ?>  name="code" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Category</label>
                                       <select  name="cat" class="form-control">
                                       <option>Select Category</option>
                                       <?php
                                            $query="SELECT * FROM productlines";
                                            $cmd=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_row($cmd))
print("<option>$row[0]</option>");
?>
                                         
                                          
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Vendor</label>
                                       <div>
                                          <input value=<?php
                                       print("$srow[5]");
                                       
                                       ?>  type="text" name="vendor"  class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Description</label>
                                       <input   
                                       value=<?php
                                       print("$srow[6]");
                                       
                                       ?>
                                       
                                       name="description" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Quantity in stock</label>
                                       <input   
                                       value=<?php
                                       print("$srow[7]");
                                       
                                       ?>
                                       
                                       name="qty" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Price</label>
                                       <div>
                                          <input   
                                          value=<?php
                                       print("$srow[8]");
                                       
                                       ?>
                                          
                                          name="price" type="date" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>MSRP</label>
                                       <input  
                                       value=<?php
                                       print("$srow[9]");
                                       
                                       ?>
                                       name="msrp" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Product Image</label>
                                       <input   
                                       value=<?php
                                       print("$srow[10]");
                                       
                                       ?>
                                       name="Productimage" type="file" class="form-control">
                                    </div>
                                 </div>
                               
                                 <div class="col-12">
                                    <button name="btn" type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>