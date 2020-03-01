<?php


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Good Bites Home page</title>
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
            <!--<a href="checkout.html">Check Out</a> |-->
			<a href="logout.php">Log Out</a> 
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
    
<div id="tooplate_slider" class="section_content"><span class="frame"></span>
        <div id="carousel">
            <div class="panel">
                
                <div class="details_wrapper">
                    
                    <div class="details">
                    
                        <div class="detail">
                            <h2>Fresh Fruits</h2>
                            <p> Apples are red,Berries are blue,<br>Pears are sweet and they are all good for you!</p>                            
                        </div><!-- /detail -->
                        
                        <div class="detail">
                            <h2>Fresh Vegetables</h2>
                            <p> Veggies are a real treat,<br>they make you feel sweet and petite!</p>                         
                        </div><!-- /detail -->
                        
                        <div class="detail">                               
							<h2>Fresh Fruits</h2>
                            <p> Fruits are real nice,<br>so be sure to have a slice!</p>   
                        </div><!-- /detail -->
                    
                    </div><!-- /details -->
                    
                </div><!-- /details_wrapper -->
                
          </div><!-- /panel -->
        
            <a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
            <a href="javascript:void(0);" class="next" title="Next">Next</a>
        
<div id="slider-image-frame">
                <div class="backgrounds">
                    
                    <div class="item item_1">
                        <img src="images/slider/01.jpg" alt="image" />
                    </div><!-- /item -->
                    
                    <div class="item item_2">
                        <img src="images/slider/02.jpg" alt="image" />
                    </div><!-- /item -->
                    
                    <div class="item item_3">
                        <img src="images/slider/03.jpg" alt="image" />
                    </div><!-- /item -->
                   
                </div><!-- /backgrounds -->
            </div>
        </div>
        <div class="clear"></div>
    </div> <!-- END of slider -->
    
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    	<div class="product">
        	<h1>New Products</h1>
            <div class="product_box">
            	<div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\images (31).jpg" alt="image"  height="110" width="160"/></a>
				</div>
                <h2><a href="productdisp.php"> Fresh Seasonal Apples</a></h2>
                <p class="price">Rs 30</p>
            </div>
            <div class="product_box">
               	<div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\images 12.jpg" alt="image" height="120" width="120"/></a>
			  </div>
                <h2><a href="productdisp.php">New Fortune Rice Bran Oil</a></h2>
                <p class="price">Rs 300</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\amulkool.png" alt="image" height="130" width="135"/></a>
				</div>
                <h2><a href="productdisp.php">New Amul Kool</a></h2>
                <p class="price">Rs 19</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\download 3.jpg" alt="image" /></a>
				</div>
                <h2><a href="productdisp.php">New Britania Brown Bread</a></h2>
                <p class="price">Rs 35</p>
            </div>
		</div>    
        
        <div class="clear h20"></div>
        <hr />
        <div class="clear h10"></div>
        
        <div class="product">
        	<h1>Popular Products</h1>
            <div class="product_box">
            	<div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\download.jpg" alt="image" height="110" width="160"/></a>
				</div>
                <h2><a href="productdisp.php">Nestle Masala Maggi</a></h2>
                <p class="price">Rs 15</p>
            </div>
            <div class="product_box">
               	<div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\redbull.png" alt="image" height="120" width="110"/></a>
				</div>
                <h2><a href="productdisp.php">Red Bull</a></h2>
                <p class="price">Rs 95</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\download 2.jpg" alt="image" height="120" width="110"/></a>
				</div>
                <h2><a href="productdisp.php">Amul Pure Ghee</a></h2>
                <p class="price">Rs 120</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdisp.php"><img src="products\images 15.jpg" alt="image" height="110" width="160"/></a>
				</div>
                <h2><a href="productdisp.php">Special Good Bites Cookies</a></h2>
                <p class="price">Rs 30</p>
            </div>
		</div>  
            
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
                <li><a href="#" class="selected">About</a></li>                
                <li><a href="#" class="last">Contact</a></li>
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