<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu--> <?php include('cal.php'); ?>
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Customer Receipt</h1>
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
<?php include('val.php');?><?php
include('dbconnect.php');
$cr_id=$_REQUEST['cr_id'];
$sql="select * from customer_receipts where customer_receipts_id='$cr_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID"ID="formID" method="post" action="customer_recepit_update.php">
<input type="hidden" name="cr_id" value="<?php echo $row['customer_receipts_id'];?>">
  <table width="423" height="198" border="0" align="center">
    <tr>
     <td>Customer Id </td>
    <td>   <select name="customer_id" id="customer_id" class="form-control validate[required]">
	  <option value="">Select a Customer </option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from customer_details  ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
     <option value="<?php echo $row1['customer_id'];?>" <?php if($row1['customer_id']==$row['customer_id']){?> selected <?php } ?>><?php echo $row1['customer_name'];?></option>
  <?php
  }
  ?>
  </select> </td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" value="<?php echo $row['amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Narration</td>
      <td><input name="narration" type="text" id="narration" value="<?php echo $row['narration'];?>"class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['Date']))
      {
        $date_default =$row['Date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("Date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>	</td>
    </tr>
    <tr>
      <td colspan="2"><input name="Submit" type="submit" value="Submit" class="btn btn-success btn">
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