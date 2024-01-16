<?php session_start();?>
<?php


$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

include('dbconnect.php');
$sql="select * from login where username='$username' and password='$password'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="customer")
{
header('location:customer/home.php');
}
else if($type=="vendor")
{
header('location:supplier/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
document.location="login.php";
//history.back();
</script>
<?php
}

?>

