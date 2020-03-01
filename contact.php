<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact page</title>
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
            <a href="shoppingcart.html">My Cart</a> | 
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

	<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    	
        <div class="col col_1">
	        <h1 class="wpadding">Contact</h1>            
		</div>
        <div class="col col_2">
        	
        	<div id="contact_form">
                <h2>Write your message</h2>
                <form method="post" name="contact" action="#">
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="input_field" />
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="input_field" />
                    <label for="subject">Subject:</label> <input type="text" id="subject" name="email" class="input_field" />
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                </form>
            </div>
        </div>
        
        <div class="col col_2">
        	<h2>Our Address</h2>
            <div class="col_4 left">
            <h5>Bangalore:</h5>
            No. 7, Service Road, <br />
            Off 100 Feet Road Indiranagar<br />			
            Bangalore, Karnataka.<br /><br />
            
            Tel: 010-050-0110<br />
            Fax: 010-050-0220<br /><br />
            
            <!--Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>-->
			</div>
            <div class="col_4 right">
            <h5>Mumbai:</h5>
            Unit No. 32/1, A Building, Virvani Industrial Estate<br />
            Western Express Highway, Goregaon(East)<br />
            Mumbai-400 063<br /><br />
            
            Tel: 020-030-0330<br />
            Fax: 020-030-0440 
            </div>
            <div class="clear h30"></div>
            <div class="img_border img_border_b">
			<iframe width="421" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=1&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;ll=40.771133,-73.974187&amp;spn=0.057126,0.132093&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
            <br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=1&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;ll=40.771133,-73.974187&amp;spn=0.057126,0.132093&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
    	
		<div class="clear"></div>
            
        <div class="clear"></div>
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="tooplate_bottom_wrapper">
	<div id="tooplate_bottom">
    	<!--<div class="col col_4">
        	  <h4>Information</h4>
      		 <ul class="list_bullet">
                <li><a href="#">Consectetur adipiscing eli</a></li>
                <li><a href="#">Nullam vulputate est</a></li>
                <li><a href="#">Duis porta velit</a></li>
                <li><a href="#">Pretium suscipit</a></li>
                <li><a href="#">Nullam eu diam</a></li>
                <li><a href="#">Duis in libero est</a></li>
            </ul> 
        </div> -->
        <!-- <div class="col col_4">
        	 <h4>Services &amp; Support</h4>
      		<ul class="list_bullet">
                <li><a href="#">Duis porta velit</a></li>
                <li><a href="#">Pretium suscipit</a></li>
                <li><a href="#">Nullam eu diam</a></li>
                <li><a href="#">Duis in libero est</a></li>
                <li><a href="#">Aenean tincidunt</a></li>
                <li><a href="#">Morbi tempus iaculis</a></li>
            </ul> 
        </div> -->
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