<?php
$product_id=$_POST['product_id'];  
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];

$product_price=$_POST['product_price'];

$product_image=$_FILES['product_image']['name'];
$tmp_location=$_FILES['product_image']['tmp_name'];
$target="../upload/".$product_image;
move_uploaded_file($tmp_location,$target);



include('dbconnect.php');

$sql="insert into product_details values(null,'$product_name','$product_description','$product_image','$product_price')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert('Product details inserted');
document.location="product_details_view.php.php";

</script>

