<?php
	include('connection.php');
	
	session_start();
 if(!isset($_SESSION['admin_name']))
{
	header('location:adminlogin.php');
}
	
	$dis_que="select * from client";
	$result=mysql_query($dis_que);
	while($row = mysql_fetch_array($result))
	{
		$rs[]=$row;
	}
 
	if($_GET['id']!="")
	{ 
		$del_que= "delete from client where clientID='".$_GET['id']."'";	
		mysql_query($del_que);
		header('location:clientview.php');
	}
?>

<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title>Client Display</title>
		
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
	
<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="home.php">Good Bites</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="clienthome.php" class="selected">Home</a></li>   
					<li><a href="clientinsert.php" class="last">Add Client</a></li>
                    <li><a href="logout.php" class="last">Logout</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
		<center>
		
			<br><br><br><br><br>
			<h1> Good Bites </h1>			
			<h2>View Client </h2>
			
		<table border=1>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Pincode</th>				
				<th colspan="2" align="center">Action</th>
			</tr>
			<?php
		       for($i = 0; $i < count($rs); $i++)
				{
		     ?>
			 <tr>
		      <td><?php echo $rs[$i]['firstname'];?></td>
			  <td><?php echo $rs[$i]['lastname'];?></td>
			  <td><?php echo $rs[$i]['contact'];?></td>
			  <td><?php echo $rs[$i]['email'];?></td>
			  <td><?php echo $rs[$i]['address'];?></td>
			  <td><?php echo $rs[$i]['city'];?></td>
			  <td><?php echo $rs[$i]['state'];?></td>
			  <td><?php echo $rs[$i]['pincode'];?></td>
			  <td><a href="clientview.php?id=<?php echo $rs[$i]['clientID'];?>" onClick="return confirm('Are you sure you want to delete?')">delete</td>
			  <td><a href="clientupdate.php?id=<?php echo $rs[$i]['clientID'];?>">update</td>
			</tr>
			<?php }?>
		  <tr>
		</table>
		</center>
	</body>
</html>