<?php
	include('connection.php');
	
	session_start();
 if(!isset($_SESSION['admin_name']) || $_SESSION['username'])
{
	header('location:clientlogin.php');
}
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];	
	
	$id=$_GET['id'];
	$rec_dis_query="Select * from client where clientID=$id";
	$result=mysql_query($rec_dis_query);
	$rs=mysql_fetch_array($result);
	
	/*echo "<pre>";
	print_r($rs);
	echo "</pre>";*/
	
	if($_POST['submit'])
	{
		if($fname=="")
		{
			echo "First name cannot be empty";
		}
		else if(is_numeric($fname))
		{
			echo "First name cannot be numeric";
		}
		else if($lname=="")
		{
			echo "Last name cannot be empty";
		}
		else if(is_numeric($lname))
		{
			echo "Last name cannot be numeric";
		}
		else if(!is_numeric($contact))
		{
			echo "Contact number has only numbers.";
		}		
		else if(!preg_match('/^[0-9]{10}+$/',$contact))
		{
			echo "Exactly 10 digits allowed.";
		}
		else if ($email=="")
		{
			echo "email can not be blank";		 
		}
		else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		{
			echo "email is not valid";		 
		}
		else if(!preg_match('/^[0-9]{6}+$/',$pin))
		{
			echo "Exactly 6 digits allowed.";
		}
		else if($uname=="")
		{
			echo "Username cannot be empty";
		}
		else if($pass=="")
		{
			echo "Password cannot be empty";
		}
		else if($pass!=$cpass)
		{
			echo "Password should match confirm password.";
		}
		else
		{
			$up_query="update client set firstname='$fname',lastname='$lname',contact='$contact',email='$email',address='$address',city='$city',state='$state',pincode='$pin',username='$uname',password='$pass' where clientID='$id' ";
			mysql_query($up_query);
			header('location:clienthome.php');
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title> Client Update </title>
		<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:false,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
    
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

	</head>
	<body>
	<form name="cliins" method="POST" >
<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="home.php">Good Bites</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="clienthome.php" class="selected">Home</a></li>                    
                    <li><a href="logout.php" class="last">Logout</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
	</head>
	
		
			<center>
				<br><br><br><br><br>
				<h1> Good Bites </h1>			
				<h3> Client Update </h3>	
				
				<table>
					<tr>
						<td>First name:</td>
						<td><input type="text" name="fname" value="<?php echo $rs['firstname']; ?>"></td>
					</tr>
					<tr>
						<td>Last name:</td>
						<td><input type="text" name="lname" value="<?php echo $rs['lastname']; ?>"></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><input type="text" name="contact" value="<?php echo $rs['contact']; ?>"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value="<?php echo $rs['email']; ?>"></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea rows=3  name="address"><?php echo $rs['address']; ?> </textarea></td>
					</tr>
					<tr>
						<td>City:</td>
						<td><input type="text" name="city" value="<?php echo $rs['city']; ?>"></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="state" value="<?php echo $rs['state']; ?>"></td>
					</tr>
					<tr>
						<td>Pincode</td>
						<td><input type="text" name="pin" value="<?php echo $rs['pincode']; ?>"></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" value="<?php echo $rs['username'];?>"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass"></td>
					</tr>	
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="cpass"></td>
					</tr>					
				</table>
				<br>
				<input type="submit" name="submit" value="submit">
			</center>
		</form>
	</body>
</html>