<?php

include("conf.php");
session_start();

$idField="";
$quantityField="";
$expirationDate="";
$unitsField="";
$fromField="";
$systemDate ="";

$idField=$_POST['idField'];
$quantityField=$_POST['quantityField'];
$expirationDate=$_POST['expirationDate'];
$unitsField=$_POST['unitsField'];
$fromField=$_POST['fromField'];
$toField=$_POST['toField'];
$systemDate = date('m/d/Y h:i:s a', time());

$userName=$_SESSION['login_user'];


echo "<script type='text/javascript'>alert('$userName');</script>";

// echo "<script type='text/javascript'>alert('$fromField');</script>";
// echo "<script type='text/javascript'>alert('$toField');</script>";
// echo "<script type='text/javascript'>alert('$systemDate');</script>";





// $sql = "INSERT INTO transactions (ExecutionDate, Quantity, UserName, ProductId, fromField, toField)
// VALUES ('$systemDate','$quantityField', '$userName','$idField','$fromField','toField')";

$sql = "UPDATE products SET CurrentQuantity =  CurrentQuantity + '".$quantityField."' WHERE ProductId = '".$idField."'";

mysqli_query($conn,"INSERT INTO transactions (Quantity, UserName, ProductId, fromField, toField)
VALUES ('$quantityField', '$userName','$idField','$fromField','$toField')");

if ($conn->query($sql)) {
$message = "successfully updated";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
//header("location: homepage2.php");


}
else {
  if (!mysqli_query($conn, "UPDATE products SET CurrentQuantity =  CurrentQuantity + '".$quantityField."' WHERE ProductId = '".$idField."'")) {
      printf("Errormessage: %s\n", mysqli_error($conn));
  }
  }

$conn->close();
//header("location: homepage2.php");
?>
