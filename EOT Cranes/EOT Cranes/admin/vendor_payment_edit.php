<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->    <?php include('cal.php'); ?>
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Vendor Payment</h1>
          <p>form</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><A href="home.php"><i class="fa fa-home fa-lg"></i></A></li>
        
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <br/>
            <div class="tile-body">
<?php include('val.php');?>
<?php include('val.php');?><?php
include('dbconnect.php');
$vp_id=$_REQUEST['vp_id'];
$sql="select * from vendor_payment where vendor_payment_id='$vp_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form  name="formID" ID="formID" method="post" action="vendor_payment_update.php">
<input type="hidden" name="vp_id" value="<?php echo $row['vendor_payment_id'];?>">

  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Vendor Id </td>
       <td><select name="vendor_id"  id="vendor_id" class="form-control validate[required]">
	   <option value="">Select a vendor</option>
	   <?php
	   include ('dbconnect.php');
  $sql1="select * from vendor_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['vendor_id'];?>"<?php if($row1['vendor_id']==$row['vendor_id']){?> selected <?php } ?>><?php echo $row1['vendor_name'];?></option>
  <?php
  }
  ?>
  </select></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" value="<?php echo $row['amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Narration</td>
      <td><input name="narration" type="text" id="narration" value="<?php echo $row['narration'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td colspan="2">      <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
</form>
</div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>
  </body>
</html>