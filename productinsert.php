<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['admin_name']))
	{
			header('location:adminlogin.php');
	}
	
	$category=$_POST['category'];
	$proname=$_POST['proname'];
	$protype=$_POST['protype'];
	$probrand=$_POST['probrand'];
	$proweight=$_POST['proweight'];
	$propiece=$_POST['propiece'];
	$proprice=$_POST['proprice'];
	$proveg=$_POST['proveg'];

	
	if($_POST['submit'])
	{
			if($proname=="")
			{
				echo "Product name cannot be empty.";
			}
			else if(is_numeric($proname))
			{
				echo "Product name cannot be numeric.";
			}			
			else if(!is_numeric($proweight))
			{
				echo "Product weight is numeric.";
			}			
			else if($proprice=="")
			{
				echo "Product price cannot be blank.";
			}
			else if(!is_numeric($proprice))
			{
				echo "Product price is numeric.";
			}
			else if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
			} 
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
				$image =  "upload/" . $_FILES["file"]["name"];
				$sql = "insert into product (categoryID_fk,name,type,brand,weight,piece,price,veg,image)values('$category','$proname','$protype','$probrand','$proweight','$propiece','$proprice','$proveg','$image')";
				mysql_query($sql);	
				//echo "inserted";
				header('location:proview.php');
			}			
			
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Product Insert </title>
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
	<form name="proins" method="post" enctype="multipart/form-data" >
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
		<center>
		
			<br><br><br><br><br>
		
		<center>
			<h1> Good Bites </h1>			
			<h3>Insert Products </h3>		
				(Fields with * sign are compulsory.)<br><br>
				
			<table>
				<tr>
					<td>Category:</td>
					<td><select name="category">
							<option value="101">Fruits and Vegetables</option>
							<option value="102">Grocery and Staples</option>
							<option value="103">Bread Dairy and Eggs</option>
							<option value="104">Beverages</option>
							<option value="105">Meat</option>							
						</select>	
					</td>
				</tr>
				<tr>
					<td>Product name:*</td>
					<td><input type="text" name="proname"></td>
				</tr>
				<tr>
					<td>Product type:</td>
					<td><input type="text" name="protype"></td>
				</tr>
				<tr>
					<td>Brand:</td>
					<td><input type="text" name="probrand"></td>
				</tr>
				<tr>
					<td>Weight:(kg/litre)</td>
					<td><input type="text" name="proweight"></td>
				</tr>
				<tr>
					<td>Piece:</td>
					<td><input type="text" name="propiece"></td>
				</tr>
				<tr>
					<td>Price*:(Rs)</td>
					<td><input type="text" name="proprice"></td>
				</tr>
				<tr>
					<td>Veg:</td>
					<td><input type="radio" name="proveg" value="v">Veg
					<input type="radio" name="proveg" value="n">Non-Veg</td>
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type="file" name="file" id="file"></td>
				</tr>
				
			</table>
			<br><br>
			<input type="submit" name="submit" value="submit">
			<br>
			
			</center>
		</form>
	</body>
</html>