<?php
	  include('dbconnect.php');
$bmid=$_REQUEST["bmid"];
$dat=$_REQUEST["date"];
$c_id=$_REQUEST["c_id"];
$p_id=$_REQUEST["prodcut_id"];
$qnt=$_REQUEST["qnt"];
$rate=$_REQUEST["rate"];
$dic=$_REQUEST["dic"];

$quant=$qnt;

  
  
$sql="select * from stock_details where product_id='$p_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

$c_stock=$row["stock"];
$cs_id=($c_stock-$quant);


  $sql2="select * from  bill_master where bill_master_id='$bmid'";
		$res2=mysql_query($sql2);
		if($row2=mysql_fetch_array($res2))
		{
		$sql3="insert into bill_details values(null,'$bmid','$p_id','$qnt','$rate','$dic')";
		mysql_query($sql3);
		$sql4="update  stock_details set stock='$cs_id' where product_id='$p_id' ";
		mysql_query($sql4);
		}
		else
		{
		$sql5="insert into bill_details values(null,'$bmid','$p_id','$qnt','$rate','$dic')";
		mysql_query($sql5);
		$sql6="insert into bill_master values('$bmid','$dat','$c_id','0')";
		mysql_query($sql6);
		$sql7="update  stock_details set stock='$cs_id' where product_id='$p_id' ";
		mysql_query($sql7);
		}
?>
<script>
alert("Product Added Ur Bill");
document.location="Bill_master_form.php?bmid="+<?php echo $bmid; ?>+"&c_id="+<?php echo $c_id; ?>;
</script>

