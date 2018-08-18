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
		<title>ACGSRescue Adoption Animals</title>
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
		<link rel="stylesheet" href="../../website_css/adoption_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="../../website_css/style_website.css" type="text/css" media ="all">
		<link rel="stylesheet" href="../../website_css/theme_website.css" type="text/css" media ="all">
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
		<!--JS-->
		<script src="../js/main.js"></script>
		<script src="../js/webpage_defualts.js"></script>
		<script src="../js/ajax.js"></script>
		<script src="../js/adoption.js"></script>
		<script>
			//Open or close the div containing the advanced adoption list form filter.
			function advancedFilter_Toggle(panel_in){
				$('#adoption-filter-panel').css('height', 'auto');	
				panelToggle(panel_in);
			}
			
			/*Toggle the entire div containing all filter options for the adoption animals
			THIS INCLUDES the buttons associated with the filter options.  
			Panel toggle is only availble to mobile devices to prevent the filter section from absorbing
			too much space.*/
			function adoptionfilter_panelToggle(panel_in, event){
				var animspeed = 950;	
				//get the element attributes & height
				var currentAttribute = $(event).attr('class');
				var elementID = $(event).attr('id');
				var panelHeight = $(panel_in).height();
				var advancedFilter_Display = $('#advancedFilter').css('display');
				
				//Panel is being closed
				if (currentAttribute === 'less'){
					
					$(event).addClass('more');
					$(event).removeClass('less');
					$(event).html('Show Filter');
					
					$(panel_in).animate({height: "0px"}, animspeed, function(){
						$(panel_in).addClass('panel_hidden_height');
						$(panel_in).css('visibility', 'hidden');	
						
						//close the advanced filter form as a default
						if(advancedFilter_Display === "block"){
							$('#advancedFilter').css('display', 'none');
						}
					});
					
					//update Classes & css
					$(panel_in).addClass('panel_hidden');
					$(panel_in).removeClass('panel_shown');
					
					
				/*The panel is being opened*/
				}else if(currentAttribute === 'more'){
					
					var InnerDivID, innerDiv_Height, innerDivMargin_Height;
					var runningTotal = 0;
					
					$(panel_in).children().each(function () {
						
						//Get the id of the inner div
						InnerDivID = "#" + $(this).attr('id')+"";
						//console.log('InnerDivID ' + InnerDivID);
						
						//Get the inner div heights
						innerDiv_Height = $(this).height();
						runningTotal = runningTotal + innerDiv_Height;
						//console.log('runningTotal ' + runningTotal);
					
						//Get the margins of the inner divs
						innerDivMargin_Height = parseInt($(InnerDivID).css("margin-top").replace('px', ''));
						runningTotal = runningTotal + innerDivMargin_Height;
						//console.log('runningTotal ' + runningTotal);
					});
					
					//update css & classes
					$(event).html('Hide Filter');
					$(event).addClass('less');
					$(event).removeClass('more');
					
					$(panel_in).css('height', '0px');
					$(panel_in).removeClass('panel_hidden_height');
					$(panel_in).css('visibility', 'inherit');
					
					
					if(advancedFilter_Display === "block"){
						/*close the advanced filter form as a default.
						Captures screen size changes from large to smaller 
						where a larger screen shows the panel as the only option*/
						$('#advancedFilter').css('display', 'none');
					}
					
					$(panel_in).animate({height: runningTotal+"px"}, animspeed);
					$(panel_in).addClass('panel_shown');
					$(panel_in).removeClass('panel_hidden');
				}
			}
			
		</script>
		<script>
			//Control the resize event to only execute after alloted time for this page only.
			var resizeThisPageEventId;
			
			$(window).resize(function() {
    		clearTimeout(resizeThisPageEventId);
    		resizeThisPageEventId = setTimeout(endResizeThisPageEvent, 500);
			});
			//Functions to execute on this page after resize event is finished
			function endResizeThisPageEvent(){
    		setAdoption_MoreToggle();
			}
		</script>
		<script>
			//On page load
			$(function(){
				setAdoption_MoreToggle();
			});
			
			/*Determines if the more toggle should be displayed based on the difference between
			the adoption description's panel height and the parent div's height*/
			function setAdoption_MoreToggle(){
				var inputs = document.getElementsByClassName("adoptable-Records");
				var parentHeight, expandingElementHeight, amtToExpand;
				var descriptionContainerHeight, descriptionDetailsHeight, descriptionRemainder;
				var event;
				for (var i = 0; i < inputs.length; i++) {
					event = $(inputs[i]).find('.more');
					
					//minimize the element prior to taking measurments
					minimizeAdoptionExpansion(inputs[i], event);
					var expansionMeasurement = adoptionExpansionMeasurement(inputs[i], (i+1));

					//console.log($(inputs[i]).attr('id') + ' amtToExpand ' + expansionMeasurement); 
					
					/*Hide more if the element does not require expansion*/
					if(expansionMeasurement < 0){
						$(inputs[i]).find('.more').addClass('none');
					}else{
						$(inputs[i]).find('.more').removeClass('none');
					}	
				}
			}
			
			/*Measure how much to expand the adoption description div*/
			function adoptionExpansionMeasurement(parent_in, parentid_in){
				var parentHeight = $(parent_in).height();
				var descriptionContainerHeight = $(parent_in).find('.adoptionDescription-container').height();
				var descriptionDetailsHeight = $(parent_in).find('.details').height();
				var descriptionRemainder = descriptionContainerHeight - descriptionDetailsHeight;
				var expandingElementHeight = $(parent_in).find('#adoptionDescription' + parentid_in).height();					
				var amtToExpand = expandingElementHeight - descriptionRemainder;
				return amtToExpand;
			}
			
			/*Resets the expanded content of the adoption description div back to the original size*/
			function minimizeAdoptionExpansion(parent_in, event){
				var animspeed = 950;

				//animate contract toggle
				$(parent_in).animate({height: "40vh"}, animspeed);
					
				$(parent_in).find('.expand-toggle').css('height','');
				var toggleElement = $(parent_in).find('.expand-toggle').find('a.bigToggle');
				toggleElement.html("~ More ~");
				toggleElement.addClass('more');
				$(event).removeClass('less');
				$(event).removeClass('none');
			}
			
			/*Expand the adoption description element*/
			function expandAdoptionDescription(recordNumber_in, parent_in, event){
				var currentAttribute = $(event).attr('class');
				var animspeed = 950;	

				if(currentAttribute === 'bigToggle more'){
					var inputs = document.getElementById(parent_in);
					var expansionMeasurement = adoptionExpansionMeasurement(inputs, recordNumber_in);
					var parentHeight = $(inputs).height();
					var newHeight = parentHeight + expansionMeasurement;
					
					if(expansionMeasurement > 0){
						//animate expand toggle
						$(inputs).animate({height: newHeight+"px"}, animspeed);
						
						//add css and html to support expanded view
						var toggleElement = $(inputs).find('.expand-toggle').find('a.bigToggle');
						
						toggleElement.html("~ Less ~");
						toggleElement.addClass('less');
						$(event).removeClass('more');
					}
				}else if(currentAttribute === 'bigToggle less'){
					minimizeAdoptionExpansion('#' + parent_in, event);
				}else{
					return;
				}
			}
			
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
							<li class="dropdown dropdown-toggle flex-stretch-child"><a class="mousePointer">Adopt</a>
								<div class="dropdown-content">
    							<a href="../#featured-animals">Spotlight</a>
	    						<a href="foster_progam.php">All Fosters</a>
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
			
			<div class="main-content-flex-child sub-category">
				<div class="container-subtitle">
					<h2>Adoptable Animals</h2>
				</div>
				<div class="container">
					
				
					<div class="description-main">
						<p>
							All our adoptive animals receive a thorough vet examination and all necessary veterinary care prior to adoption. In addition, all pets are micro-chipped prior to adoption.
						</p>
						
						<div class="bulletPoints flex-stretch">
							<div class="flex-stretch-child column-half">
								<ul class="">
									<span class="font-bold">Adoption Fee Includes:</span>
									<li>Spaying/Neutering</li>
									<li>Shots</li>
									<li>Worming</li>
									<li>Heartworm Testing</li>
									<li>Micro-chipping</li>
									<li>Vet examination</li>
									<li>Mini blood panel</li>
								</ul>

							</div>
							<div class="flex-stretch-child column-half">
								<ul class="">
									<span class="font-bold">Adoption Fees:</span>
									<li>Feline: $135.00</li>
									<li>Canine: $275.00</li>
								</ul>
							</div>
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

		<section id="adoption-Search">
			<div id="adoption-filter-Section" class="container filterButtons">
				<div id="adoption-filter-panel">
				<div id="filterButtons" >
					<button type="submit" onclick="animalFilter('All')">All</button>
					<button type="submit" onclick="animalFilter('1')">Cats</button>
					<button type="submit" onclick="animalFilter('2')">Dogs</button>
					<button type="submit" onclick="animalFilter('>2')">Other</button>	
				</div>
				<div id="advanced-search-Container" class="container">
					<h2 id="advancedFilter-toggle" onclick="advancedFilter_Toggle('#advancedFilter')"><a>Advanced Filter</a></h2>
				</div>
				<form id="advancedFilter" class="panel">
							pending...
				</form>
								</div>
				<div class="filter-hide">
					<p id="close-filterAdoption" onclick="adoptionfilter_panelToggle('#adoption-filter-panel', '#close-filterAdoption')" class="less">Hide Filter</p>
				</div>
			</div>
			
			<div id="adoptionAnimals-Section">
				<div id="adoptionAnimals-content" class="container">
						
					<?php
						if(count($adoptable) > 0){
							
						
							foreach($adoptable['adoptable'] as $column){
								echo "<div id ='containerID".$column['animalID']."' class='sub-category-break record-height adoptable-Records'>";
								$containerID = "'containerID".$column['animalID']."'";
									echo "<div class='adoptionDescription-container flex-stretch bigtext'>";
										echo "<div class='description-image'>";
											echo"<figure>";
												echo "<a href='../gallery/".$column['imageFile']."'>";
												echo "<img src='../gallery/".$column['imageFile']."' alt='".$column['imageDescription']."' aria-label='".$column['imageDescription']."'>";
												echo"</a>";
											echo "</figure>";
										echo "</div>";
								
										echo "<div class='description-right flex-stretch-child'>";
											echo "<div class='details'>";
												echo "<span class='font-bold'> Name: </span> <span class='font-plain'>". $column['animalName'] ."</span><br/>";
												echo "<span class='font-bold'> Weight: </span> <span class='font-plain'>". $column['animalWeight']." " . $column['weightIncrement'] . "</span><br/>";
												echo "<span class='font-bold'> Age: </span> <span class='font-plain'>". $column['ageCalculation']. " " . $column['ageIncrement']."</span><br/>";
											echo "</div>";
											$recordNumber = $column['animalID'];
											echo "<p id='adoptionDescription".$column['animalID']."' style='margin: 0' class='description-text'>" . $column['adoptionDescription'] ."</p>";
							
										echo "</div>";
									echo "</div>";
									$panel = "'#adoptionDescription".$column['animalID']."'";
									echo "<div class='expand-toggle'><a class='bigToggle more' onclick=expandAdoptionDescription('".$recordNumber."',". $containerID.",this)>~ More ~</a>";
									echo "<a class='smallToggle' onclick=panelToggle(".$panel.")>~ More ~</a>";
									echo "</div>";
								echo "</div>";
								
							}
						}else{
							echo "<h3>No matches found.</h3>";
							echo "<h4> Please try to refine your search criteria.</h3>";
						}
					
					?>
						
					</div>
					
					
					
					
				</div>
		</section>

		<footer>
			<div class="container">
				
				<div class="flex-justify-left sub-category-break-after">
					<div class="flex-stretch-child socialMedia">
						<img src="../socialmedia/facebook.png" alt="Facebook">
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
	