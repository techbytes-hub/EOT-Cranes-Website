<?php
$production_id=$_POST['production_id'];  
$product_id=$_POST['product_id'];
$total_production=$_POST['total_production'];
$description=$_POST['description'];
$production_date=$_POST['production_date'];


include('dbconnect.php');
$sql4=" select * from stock_details where product_id='$product_id' ";
  $res4=mysql_query($sql4);
  $row4=mysql_fetch_array($res4);
  
$stock=$row4['stock']+$total_production;

 $sql=" select * from stock_details where product_id='$product_id' ";
  $res=mysql_query($sql);
  if($row=mysql_fetch_array($res))
  {

  $sql="insert into production  values(null,'$product_id','$total_production','$description','$production_date')";
mysql_query($sql);

$sql2="update  stock_details  set stock='$stock' where product_id='$product_id'";
mysql_query($sql2);

  }
  else
  {
$sql="insert into production  values(null,'$product_id','$total_production','$description','$production_date')";
mysql_query($sql);


$sql2="insert into  stock_details  values(null,'$product_id','$stock')";
mysql_query($sql2);
}



?>
<script language="javascript1.2">
alert(' inserted');
document.location="production_view.php";

</script>
