<?php
include('dbconnect.php');
$product_category_id=$_REQUEST['product_category_id'];
$sql="delete from product_category  where product_category_id='$product_category_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="procuct_category_view.php";
</script>