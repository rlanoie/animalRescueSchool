<!DOCTYPE html>
<?php
include_once'../includes/dBconnect.php';
include_once'../includes/animals.php';


$db = getDataConnection();
$adoptable = adoptableAnimals($db);


?>

<html lang="en">
<!-- Head -->
	<head>
		<title>ACGSRescue Foster Program</title>
		<link rel="shortcut icon" type="image/x-icon" href="../icon/favicon.png"/>
		
		<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="ACGSR Animal Rescue, animal adoption, pets, furbabbies">
		
		<!--Google Analytics-->
		<meta name="google-signin-client_id" content="1095576072025-g2ctsov7fargrr1ue3vp4hvdbi7qe169.apps.googleusercontent.com">
				
		<!-- Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
		
		<!-- Custom-Themes -->
		<link rel="stylesheet" href="../../website_css/foster_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="../../website_css/style_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="../../website_css/theme_website.css" type="text/css" media ="all">
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
		<!--JS-->
		<script src="../js/main.js"></script>
		<script src="../js/webpage_defualts.js"></script>
		
	</head>
	
	<body>
		
		<header>
			<div class="row">
				<div id="companyName-header">
					<h1>
						<a href="../index.php">ACGSRescue 
							<div class="companyName-Indent" >
								<span class="companyName-IndexOf">of </span> 
								Hollister, Inc.
							</div>
						</a>
					</h1>
				</div>
				<div id="header-content">
					<div id="adoptAPet" title="Adopt-A-Pet website" class="subSection">
						<a title="Adopt-A-Pet website" href="https://www.adoptapet.com"><img src="https://images.adoptapet.com/images/links/sap_small_anim.gif" style="border: solid 1px #cccccc" /></a>		
					</div>
					<div class="social-media subSection">
						<ul>
							<li><a href="https://www.facebook.com/AllCreaturesGreatandSmallRescue" rel="noopener noreferrer" target="_blank"><img src="../socialmedia/facebook.png" alt="Facebook"></a></li>
							<li>phone# (831)-917-5570</li>
							<li>email: admin@acgsrescue.com</li>
						</ul>
					</div>
					<div id="donate-header" class="donate subSection">
						<div class="inline-block">
							<div class="container">

								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"> <input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="5419028"> 
									<input type="image" src="../icon/donationImg.png" value="Donate" name="submit" title="PayPal - The safer, easier way to pay online!" class="paypal_btn">
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav class="navList-header" aria-label="Site Navigation">
			<div class="container">
				<button type="button" id="navButton" class="navbutton-toggle collapsed" data-toggle="collapse" data-target="#NavList">
					<span class="ham-bar"></span>	
					<span class="ham-bar"></span>	
					<span class="ham-bar"></span>	
				</button>
				<div id="navList-content" class="nav-hide">
					
					<ul id="navlist" class="header-nav">
						<li class="dropdown dropdown-toggle flex-stretch-child"><a href="../../#aboutUs">About Us</a></li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a class="mousePointer">Adopt</a>
							<div class="dropdown-content">
    						<a href="../#featured-animals">Spotlight</a>
	    					<a href="adoption.php">All Fosters</a>
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a class="mousePointer">Services</a>
							<div class="dropdown-content">
    						<a href="spayNeuter.php">Spay/Neuter Program</a>
								<a href="TNR.php">TNR</a>
    						<a href="lostFound.php">Lost &amp; Found</a>
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a href="volunteer.php"> Volunteer</a>
							<div class="dropdown-content">
    						<!--<a href="#">Volunteer </a>
	   						<a href="#">Link 2</a>
  	 						<a href="#">Link 3</a>-->
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a href="foster_program.php">Foster</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="flexRow-main" class="sub-category-break">
			
			<div id="fosterCare-mainDescription" class="main-content-flex-child sub-category">
				<div class="container-subtitle">
					<h2>Foster Volunteer Progam</h2>
				</div>
				<div class="container">
					<h3>Fostering an animal is welcoming it into your home!</h3>
					<div class="description-main flex-stretch-reverse">
						
						<div class="description-left flex-stretch-child">
							<p class="margin-none">
								ACGSRescue operates outside of the traditional brick-and-mortar organization.  
								
								By foregoing the traditional confines of a stationary building, we are capable of allocating more of our resources towards the rescue and rehabilitation of animals in need.
								<span>Our chosen method of operations relies on support from our local foster/volunteers who provide temporary short and long-term care to all of our animals.</span>
								
							</p>
						</div>
						<div class="description-image">
							<img src="../images/IMG_4633.JPG">
						</div>
					</div>
				</div>
			</div>
			<aside id="aside-Highlights" class="sidebar-flex-child">
				<div class="aside-container">
					<ul id="highlights" class="flex-stretch-vertical">
						<li class="style1">
							<div class="centerAlign highlights">
								<div class="container">
									<a href="#">Become a foster hero! <br /> Find out more about our foster program</a>
								</div>
							</div>
						</li>
						<li class="style1">
							<div class="centerAlign highlights">
								<div class="container position">
									<a href="#">Lost &amp; Found! <br /> Report a lost or found pet.</a>
								</div>
							</div>
						</li>
						<li class="style2">
							<div class="centerAlign highlights">
								<div class="container position">
									<a href="#">Contact Us <br />
										(831)-917-5570<br/>
										<span class="reduce">admin@acgsrescue.com</span></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</aside>
		</section>

		<section id="aboutFosterVolunteer" class="details">
			<div class="container sub-category-break ">
				<div class="container-subtitle">
					<h2>The Animals In Our Care</h2>
				</div>
				<div class="flex-stretch-reverse polaroid-screenSplit"> 	
					<div class="flex-stretch-child content polaroid-content-section">
						<div>
							<p>Animals come to us for many reasons, such as:</p>
								<ul>
									<li>Nursing kittens who are to young for vaccinations and spay/neuter procedure</li>
									<li>Owner surrendor</li>
									<li>Abandonment</li>
									<li>The animal is sick or injured</li>
									<li>Taken in from the local shelter due to overcrowding</li>
								</ul>
							<p>How the animal comes to us determines the level of care that is needed.</p>
							
							<p>As an ACGSRescue volunteer, you will provide the foster animal with quality play time and socialization in a loving environment, knowing that your work has saved a life.</p>
							<p>ACGSRescue will help with food, litter boxes, medical care and other supplies and support required to maintain a healthy lifestyle.</p>
						</div>
					</div>
					<div class="flex-stretch-child polaroid-photo-section">
						<div id="polaroid-container" class="container">
							<div class="polaroid">
							<figure>
								<a href="images/IceCreamRev3.png">
									<img src="../images/image1.JPG" alt="Ice Cream Shop" height="150">
								</a>					    
						  	<figcaption>Foster Bochy</figcaption>
							</figure>
						</div>
							<div class="text-center">
								<a href="#">Apply to be a Foster Volunteer</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				
		</section>

		

		<footer>
			<div class="container">
				
				<div class="flex-justify-left sub-category-break-after">
					<div class="flex-stretch-child socialMedia">
						<img src="../socialmedia/facebook.png" alt="Facebook">
						<a href="https://www.adoptapet.com"><img src="https://images.adoptapet.com/images/links/sap_small_anim.gif" style="border: solid 1px #cccccc" /></a>
					</div>
					<div class="flex-stretch-child">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"> <input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="5419028"> 
							<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> 
						</form>						
					</div>
				
					<div class="flex-stretch-child">
						Contact Us
					</div>
				</div>
				
				<div class="flex-stretch">	
					<div class="flex-stretch-child">
						<span class="copywright">© ACGSRescue of Hollister 2018</span>	
						<br/>A CA Non-Profit 501(c)3 Tax Exempt Organization, Tax ID#39-2066129
					</div>
					<div class="flex-stretch-child">
						<div class="author"> Created by Generosity Logic
						<br/> All rights reserved.
						</div>
					</div>
				</div>
			</div>	
		</footer>
	</body>
</html>
	