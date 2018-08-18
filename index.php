<!DOCTYPE html>


<html lang="en">
<!-- Head -->
	<head>
		<title>ACGSRescue</title>
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
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media ="all">
		<link rel="stylesheet" href="website_css/style_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="website_css/theme_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="website_css/index_website.css" type="text/css" media ="all">
		

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
		
		<!--JS-->
		<script src="../js/main.js"></script>
		<script src="../js/webpage_defualts.js"></script>
		
		<script>
			$(document).ready(function() {
				$('.index-mainSlide.flexslider').flexslider({
					animation: "slide"
				});
			$('.flexslider.carousel').flexslider({
				animation: "slide",
				animationLoop: false,
				itemWidth: 500,
				itemMargin: 0,
				mousewheel: true,
				rtl: true
			});
		});
			
	
 	</script>
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
						<a href="https://www.adoptapet.com"><img src="https://images.adoptapet.com/images/links/sap_small_anim.gif" style="border: solid 1px #cccccc" /></a>		
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
						<li class="dropdown dropdown-toggle flex-stretch-child"><a >Adopt</a>
							<div class="dropdown-content">
    						<a href="#featured-animals">Spotlight</a>
	    					<a href="../website_pages/adoption.php">All Fosters</a>
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a class="mousePointer">Services</a>
							<div class="dropdown-content">
    						<a href="../website_pages/spayNeuter.php">Spay/Neuter Program</a>
								<a href="../website_pages/TNR.php">TNR</a>
    						<a href="../website_pages/lostFound.php">Lost &amp; Found</a>
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a href="../website_pages/volunteer.php"> Volunteer</a>
							<div class="dropdown-content">
    						<!--<a href="#">Volunteer </a>
	   						<a href="#">Link 2</a>
  	 						<a href="#">Link 3</a>-->
  						</div>
						</li>
						<li class="dropdown dropdown-toggle flex-stretch-child"><a href="../website_pages/foster_program.php">Foster</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="flexRow-main" class="sub-category-break">
			
			<aside id="aside-index" class="sidebar-flex-child">
				<div class="container">
					<ul class="page-Nav">
						
					</ul>
					<div id="highlight" class="centerAlign">
						<div class="container">
							<a href="#">
								Become a foster hero! <br /> Find out more about our foster program
							</a>
						</div>
					</div>
				</div>
			</aside>
			<div class="main-content-flex-child">
				<div id="index-mainSlide" class="index-mainSlide flexslider">
					<ul class="slides">
						<li>
							<img src="../indeximages/dog-2606759_1280Rev2.jpg" />
							<h2 class="align-top">We Provide <span class="font-red">Care</span> <br/>Every Animal Deserves!</h2>
						</li>
						<li>
							<img src="../indeximages/chihuahua-624924_1280Rev2.jpg" />
							<h2 class="align-bottom"> A Brighter <span class="font-red">Future</span> <br/>For Every Creature!</h2>
						</li>
						<li>
							<img src="../indeximages/cat-2536662_1280Rev-2.jpg" />
							<h2 class="align-bottom">A <span class="font-red">Love</span> <br/>Like No Other!</h2>
						</li>
						<li>
							<img src="../indeximages/cat-3266673_1280Rev2.jpg" />
							<h2 class="align-top"> A Place to call <span class="font-red">Home</span></h2>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section id="aboutUs" class="sub-category-break sub-category">
			<div class="container-subtitle">
				<h2>What We Do</h2>
			</div>
			<div class="container flex-stretch-reverse">
				<div class="description-left flex-stretch-child">
					ACGSRescue, Inc. is a foster-home based animal rescue, located in Hollister, California. 
					As a strong and vigilant advocate in the rights for all animals, our primary function is to assist our local shelters in rescuing animals that would otherwise be euthanized due to lack of space or special-needs veterinary care.
					Each of our foster animals are cared by our volunteer support group in loving foster homes environments.
					<br />
					We advocate spaying and neutering of all pets, and try to educate those who do not understand the implications of not altering their pets.
					We also encourage the public to participate in our spay/neuter program for feral cats.  Through programs like this, we are able to prevent the suffering endured by unwanted cats and kittens due to overpopulation.
					
				</div>
				<div class="description-image">
					<img src="images/IMG_4636.JPG" alt="Oliver Ninja" aria-label="Oliver Ninja Fishtank">
				</div>
			</div>
		</section>

		<section id="featured-animals" class="page-Section">
			<h1 class="centerAlign">Adoptable Pets Spotlight</h1>
			<!-- Place somewhere in the <body> of your page -->
			<div id="index-featureSlide" class="flexslider carousel sub-category-topBottom">
				<ul class="slides">
					<li>
						<div class="square">
  						<div class="pic">
								<img align="top" src="../images/image1.JPG" alt="Smiley face" height="42" width="42">
							</div>
						</div>
					</li>
					<li>
						<div class="square">
  						<div class="pic">
								<img src="../images/IMG_4011.JPG" alt="Oreo" height="42" width="42" >
							</div>
						</div>
					<li>
						<div class="square">
  						<div class="pic">
								<img src="../images/IMG_4633.JPG" alt="Puppies" height="42" width="42">
							</div>
						</div>
					</li>
					<li>
						<div class="square">
  						<div class="pic">
								<img src="../images/20180211_233520.jpg" alt="Amos" height="42" width="42">
							</div>
						</div>
					</li>
	  		</ul>
			</div>
		</section>

		<footer>
			<div class="container">
				
				<div class="flex-justify-left sub-category-break-after">
					<div class="flex-stretch-child socialMedia">
						<a href="https://www.facebook.com/AllCreaturesGreatandSmallRescue" rel="noopener noreferrer" target="_blank">
							<img src="../socialmedia/facebook.png" alt="Facebook">
						</a>
						<a title="Adopt-A-Pet website" href="https://www.adoptapet.com"><img src="https://images.adoptapet.com/images/links/sap_small_anim.gif" style="border: solid 1px #cccccc" /></a>
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
	