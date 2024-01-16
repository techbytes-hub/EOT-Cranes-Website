<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<b><font color="#FFFFFF" background-size= "cover"><a href="login.php" style="color:#FFFFFF; ">Login</a></font></b>
    <div class="main">
        <div class="container">
            <div class="signup-content">
			
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
				 <?php
  include('dbconnect.php');
  $sql=" select max(customer_id) as cid from customer_details ";
  $res=mysql_query($sql);
  $row=mysql_fetch_array($res);
  
  $cust_id=$row['cid']+1;
  $cust_code='CUST'.$cust_id;
  ?>
                    <form method="POST" class="register-form" action="customer_detail_insert.php" id="register-form">
                        <h2> registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="customer_name" id="name" required/>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="customer_address" id="address" required/>
                        </div>
						   <div class="form-group">
                            <label for="address">City :</label>
                            <input type="text" name="customer_city" id="address" required/>
                        </div>
                      
                      
                        <div class="form-group">
                            <label for="birth_date">Contact No. :</label>
                            <input type="text" name="contact_no" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Email-id :</label>
                            <input type="email" name="email_id" id="pincode">
                        </div>
                
                        <div class="form-group">
                            <label for="email">Company Code / Username </label>
                            <input type="text" readonly="" value="<?php echo $cust_code; ?>" name="customer_code" id="email" />
                        </div>
						
						<div class="form-group">
                            <label for="email">Password</label>
                            <input type="password" name="pwd" id="pwd" />
                        </div>
						
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>