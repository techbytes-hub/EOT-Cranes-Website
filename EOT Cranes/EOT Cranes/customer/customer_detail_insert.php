<?php
$customer_id=$_POST['customer_id'];  
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$customer_code=$_POST['customer_code'];


include('dbconnect.php');

$sql="insert into customer_details values(null,'$customer_name','$customer_address','$customer_city','$contact_no','$email_id','$customer_code')";
mysql_query($sql);

$sql1="insert into login values('$customer_code','$customer_code','customer','Enter Your Contact No','$contact_no','Active')";
mysql_query($sql1);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="customer_details_view.php";

</script>
