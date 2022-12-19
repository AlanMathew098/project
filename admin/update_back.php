




<?php
//include database configuration file
include("dbx.php");
$product_id	= 	mysqli_real_escape_string($mysqli , $_POST['product_id']);
$product_name	= 	mysqli_real_escape_string($mysqli , $_POST['product_name']);
$product_price	= 	mysqli_real_escape_string($mysqli , $_POST['product_price']);
$product_type	= 	mysqli_real_escape_string($mysqli , $_POST['product_type']);
$id	= 	mysqli_real_escape_string($mysqli , $_POST['id']);


// $img1='';

if(!empty($_FILES["product_image"]['tmp_name'])){
  $temp1 = explode(".",$_FILES["product_image"]["name"]);
  $newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
  move_uploaded_file($_FILES['product_image']['tmp_name'],"./alan/".$newfilename1);
  $product_image=$newfilename1;

   //echo $product_image; exit;
  $sql		         =	"UPDATE product SET 
product_id	     =  '$product_id',
product_name	         = '$product_name',
product_price	         = '$product_price',
product_type	         = '$product_type',
product_image				 =	'$product_image'
WHERE id='$id'"; 

// echo $sql; exit;

 if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}

}



header('Location:tables-basic.php')
?>