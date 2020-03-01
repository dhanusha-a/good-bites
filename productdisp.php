<?php
session_start();
include('connection.php');
if(!isset($_SESSION['username']))
{
	header('location:clientlogin.php');
}

$dis_que="select * from product";
	$result=mysql_query($dis_que);
	while($row = mysql_fetch_array($result))
	{
		$rs[]=$row;
	}
	if(isset($id))
	{
		
	$id=$_GET['id'];
	$u_id=$_SESSION['username'];
		$qry="insert into cart(clientID_fk,productID_fk) values ('$u_id',$id)";
		mysql_query($qry);
		header('location:productdisp.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products page</title>
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
<form name="frm" method="post">
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
            <!--<a href="checkout.html">Check Out</a> |-->
        	<!--<span>Item in Cart</span>-->
            </p>
            
             <div id="tooplate_search">
                <form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->
    
		
			<br><br><br><br><br>
			<h1> Good Bites </h1>			
			<h3> Products </h3>
			
						<select name="categoryview">
							<option value="100">All</option>
							<option value="101">Fruits and Vegetables</option>
							<option value="102">Grocery and Staples</option>
							<option value="103">Bread Dairy and Eggs</option>
							<option value="104">Beverages</option>
							<option value="105">Meat</option>							
						</select>	
						<br><br><br>
			
		<table border=1>
			<tr>
				
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Type</th>
				<th>Product Brand</th>
				<th>Product Weight</th>
				<th>Product Piece</th>	
				<th>Product Price</th>
				<th>Veg/Nonveg</th>
				
				<th>Add to cart</th>
				
				<?php
		       for($i = 0; $i < count($rs); $i++)
				{
		     ?>
			 <tr>
		      <td><?php echo $rs[$i]['name'];?></td>
			  <td><img src="<?php echo $rs[$i]['image'];?>" height="70" width="100"></td>			  
			  <td><?php echo $rs[$i]['type'];?></td>
			  <td><?php echo $rs[$i]['brand'];?></td>
			  <td><?php echo $rs[$i]['weight'];?></td>
			  <td><?php echo $rs[$i]['piece'];?></td>
			  <td><?php echo $rs[$i]['price'];?></td>
			  <td><?php echo $rs[$i]['veg'];?></td>			  
			  <td><a href="productdisp.php?id=<?php echo $rs[$i]['productID'];?>">Add</td>
			</tr>
			<?php }?>
			</tr>
		</table>
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
</form>
</body>
</html>