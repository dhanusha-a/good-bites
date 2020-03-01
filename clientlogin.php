<?php
 include('connection.php');
 
 session_start();
 
 $username= $_POST['username'];
 $pass=$_POST['password'];

 if($_POST['submit'])
 {
	      $query="select * from client where username='$username' and password= '$pass'";
		   $result=mysql_query($query);
		  $rs=mysql_fetch_row($result);
	 if($username=="")
	 {
		$erroruname="Username can not be blank";
	 }
	 else if($pass=="")
	 {
		 $errorpassword="Password can not be blank"; 
	 }
	 else if($rs)
	 {
	    //print_r($rs);
		$_SESSION['username'] = $rs[0];
		header('location:clienthome.php');
	 }
	 else
	 {
	   $error="Username and Password is not valid"; 
	 }
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Login</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2062 Clothing 
http://www.tooplate.com/view/2062-clothing
-->
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

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="home.php">Good Bites</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
			<br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
			
		<!--	<div id="tooplate_slider" class="section_content"><span class="frame"></span> -->
        <!-- <div id="carousel"> -->
            <div class="panel">
                
                <div class="details_wrapper">
                    
                    <div class="details">
					
        <div class="col col_2">        	
        	<div id="contact_form">
			<center>
			<br><br><br><br><br>
                <h2> Client Login</h2>
                <form method="post" name="login" action="#">
                    <label for="username">Username:</label> <input type="text" id="username" name="username" class="input_field" value="<?php echo $username; ?>"/><br>
					<?php echo $erroruname; ?><br>
                    <label for="password">Password:</label> <input type="password" id="pwd" name="password" class="input_field" />  <br>
					<?php echo $errorpassword; ?> <br>			
                    <input type="submit" name="submit" value="submit" class="submit_btn" /> <br>
					<?php echo $error; ?>
					
					<br><br>
					<font size="3">New Account:<a href="clientinsert.php">Register</a></font>
					
                </form>
				</center>
            </div>
        </div>
		
		</div> </div> </div> </div>
		
<div class="col col_4 twitter">
        	    
            
            
        </div>
        <div class="col col_4">
        	
            </div>
            <div class="clear h30"></div>
            <a href="#"><img src="images/facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/google.png" alt="Google" /></a>
            <a href="#"><img src="images/skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/twitter2.png" alt="Twitter" /></a>
        </div>
        <div class="clear"></div>
    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->
		

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	Copyright © Goodies Bite         
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
</html>