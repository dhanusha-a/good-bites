<?php

include('connection.php');
	
	session_start();
 if(!isset($_SESSION['username']))
{
	header('location:clientlogin.php');
}
	$id=$_SESSION['username'];	
	$qty=$_POST['qty'];
	//$total=($rs[$i]['price']* $qty);
	
	function add($qty)
	{
		$total=$rs[$i]['price']* $qty;
		return $total;
	}
	
	$dis_que="select p.* from cart as c,product as p where c.clientID_fk='$id' and p.productID=c.productID_fk";
	$result=mysql_query($dis_que);
	while($row = mysql_fetch_array($result))
	{
		$rs[]=$row;	
	}	
 
	if($_GET['id']!="")
	{ 
		//$select=mysql_query("select image from product where productID='".$_GET['id']."'");
		//$image=mysql_fetch_array($select);		
		header('location:clientcart.php');
	}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About page</title>
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
                <ul>
                    <li><a href="clienthome.php" class="selected">Home</a></li>
                    <li><a href="productdisp.php">Products</a></li>                   
					<li><a href="clientlogin.php">Login</a></li>                   
                    <li><a href="about.php">About</a></li>                    
                    <li><a href="contact.php" class="last">Contact</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
        
        <div id="header_bottom">
        	<p>
            <a href="clientcart.php">My Cart</a> | 
            <a href="checkout.html">Check Out</a> |
        	<!--<span>Item in Cart</span>-->
            </p>
            
             <div id="tooplate_search">
                <!--<form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form> -->
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->
	
	<br><br><br><br><br>
			<h1> Good Bites </h1>			
			<h3>Cart </h3>
			
			
		<table border=1>
			<tr>
				<th>Product Name</th>				
				<th>Product Price</th>
				<th>Quantity</th>				
				<th align="center">Action</th>
				
				<?php
		       for($i = 0; $i < count($rs); $i++)
				{
		     ?>
			 <tr>
		      <td><?php echo $rs[$i]['name'];?></td>			   
				<td><?php echo $rs[$i]['price'];?></td>	
				<td><input type="text" name="qty"></td>				
			  <td><a href="clientcart.php?id=<?php echo $rs[$i]['productID'];?>" onClick="return confirm('Are you sure you want to delete?')">Delete</td>
			  
			</tr>
			<?php }?>
			</tr>
		</table>
		<br><br>
		<input type="submit" name="submit" value="submit">
		</center>
  
<div id="tooplate_bottom_wrapper">
	<div id="tooplate_bottom">
    	
        <div class="col col_4 twitter">
        	<h4>Pages</h4>
      		<ul class="list_bullet">
                <li><a href="index.html">Home</a></li>
                <li><a href="productdisp.php">Products</a></li>
                <li><a href="about.php" class="selected">About</a></li>                
                <li><a href="contact.php" class="last">Contact</a></li>
            </ul>     
            
            
        </div>
        <div class="col col_4">
        	<h4>Subscription</h4>
            <p>We promise, we will only send you awesome stuff which will make your day!</p>
      		<div id="tooplate_newsletter">
                <form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
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
