 <?php
	 include('dbconnect.php');
	 
$pmid=$_REQUEST["pmid"];
$dat=$_REQUEST["date"];
$c_id=$_REQUEST["customer_id"];
 $p_id=$_REQUEST["prodcut_id"];
$qnt=$_REQUEST["qnt"];


  
   $sql2="select * from   customer_order_master where customer_order_master_id='$pmid'" ;
		$res2=mysql_query($sql2);
		if($row2=mysql_fetch_array($res2))
		{
		 $sql3="insert into  customer_order_details values(null,'$pmid','$p_id','$qnt','Pending')";
		mysql_query($sql3);
		
		
		}
		else
		{
		
		$sql5="insert into customer_order_details values(null,'$pmid','$p_id','$qnt','Pending')";
		mysql_query($sql5);
		$sql6="insert into  customer_order_master values('$pmid','$dat','$c_id')";
		mysql_query($sql6);
		
		}
?>

<script>
alert('Purchase Details Added....');
document.location="Customer_order_master_form.php?pmid="+<?php echo $pmid; ?>+"&c_id="+<?php echo $c_id; ?>;

</script>