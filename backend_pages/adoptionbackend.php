<!DOCTYPE html>
<?php
include_once'../includes/dBconnect.php';
include_once'../includes/adoptionPageLoad.php';
include_once'../includes/animals.php';


$db = getDataConnection();
$adoptable = adoptableAnimals($db);
//print_r($adoptable);

$recordedAnimals = animals($db);


$availableAnimals = null;


?>

<html class="backend" lang="en">
<!-- Head -->
	<head>
	<title>ACGSRescue Backend Portal</title>
		<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="ACGSR Animal Rescue">
		<meta name="google-signin-client_id" content="1095576072025-g2ctsov7fargrr1ue3vp4hvdbi7qe169.apps.googleusercontent.com">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
		<!--Google Analytics-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

		<!-- Custom-Themes -->
		<link rel="stylesheet" href="../backend_css/adoption_backend.css" type="text/css" media ="all">
		
		
		<script> 
			function panelSlide(){
				$("#panel.adoptionAnimals").slideToggle("slow");
			}
			
			function panelSlideDown(panel_in, section_in, closeAll){
				if(closeAll === 'true'){
					console.log("panel: " + panel_in + " parent section" + section_in);
				/*Add a class to all parent panels so that any parent and child not associated to the new panel being opened is closed.*/
				var inputs = document.getElementsByClassName("panel");
				
				var backend = document.getElementById("interactive-BackendContent");
				console.log("backend" + backend);
				var section = backend.getElementsByTagName("section");
				console.log("section: " + section);
				var style;
				var id;
				
				for(var i=0; i < section.length; i++){
					id = "#" + section[i].id;
					style = section[i].style.display;
					
					if(id !== section_in){
						$(id).slideToggle("slow");
						//$(id).css("display","none");
						alert( "id " + id + " section_in" + section_in)
					}
				}
				$(panel_in).slideToggle("slow");
			}
				}
				
			
		</script>
	</head>
	
	<body>
		
		<header>	
			<div id="portal-header">
				<h1>Backend Portal</h1> 
			</div>
		</header>
		
		<section id="flexRow-main" class="sub-category-break">
			<aside class="sidebar-flex-child">
				<div class="">
					<ul>
						<li onclick="panelSlideDown('#animals-Section', '#animals-Section', 'true')" ><a href="#"  >Animals</a></li>
						<li>Webpages</li>
							<ul>
								<li onclick="panelSlideDown('#adoptionAnimals-Section', '#adoptionAnimals-Section', 'true')"><a href="#" >Adoption Page</a></li>
								<li>Volunteer</li>
								<li>Foster</li>
							</ul>	
						<li onclick="panelSlideDown('#recentPhotoUploads', '#recentPhotoUploads', 'false')" ><a href="#"  >Recent Photo Uploads</a></li>
							<div id="recentPhotoUploads" class="panel">
								<ul>
									<li><img src='../icon/plus_PNG120.png' alt="" aria-label=""></li>
								</ul>
							</div>
					</ul>
				</div>
			</aside>
			
			<div id="interactive-BackendContent" class="main-content-flex-child sub-category">
				<section id="animals-Section" class="panel flex-stretch">
					
					<aside id="animal-Filter" class="sidebar-flex-child">
						<div class="container-flex flex-stretch">
							<aside id=alpha-sort class="sidebar-flex-child" >
								<ul>
									<li>A</li>
									<li>B</li>
									<li>C</li>
									<li>D</li>
									<li>E</li>
									<li>F</li>
									<li>G</li>
									<li>H</li>
									<li>I</li>
									<li>J</li>
									<li>K</li>
									<li>L</li>
									<li>M</li>
									<li>N</li>
									<li>O</li>
									<li>P</li>
									<li>Q</li>
									<li>R</li>
									<li>S</li>
									<li>T</li>
									<li>U</li>
									<li>V</li>
									<li>W</li>
									<li>X</li>
									<li>Y</li>
									<li>Z</li>
								</ul>
							</aside>
							<div id="animal-list" class="flex-stretch-child-grow">
								<div class="container">
								<?php
								foreach($recordedAnimals['animal'] as $column){
									echo "<div>".$column['animalName']."</div>";
								}
								?>
								</div>
							</div>
						</div>
						
					</aside>
						
					
					<div class="flex-stretch-child">
						
					</div>
				</section>
				<section id="adoptionAnimals-Section" class="panel">
					<div class="container pageToolbar icons">
						<a href="#">
							<img id="flip" src='../icon/plus_PNG120.png' onclick="panelSlideDown('#addAdotionAnimal', '#adoptionAnimals-Section')" alt='add new' aria-label='add new'>
						</a>
					</div>
					<div class="container-subtitle">
						<h2>Adopt</h2>
					</div>
						

					<div id="adoptionAnimals-content" class="container">
						<div id="addAdotionAnimal" class =" panel sub-category-break padding-top">
							<h3>Animal Adoption Details</h3>
							<form id="formUserChange" name="formUserChange" method="POST" autocomplete="off" onsubmit="event.preventDefault();">
								
								<div class="flex-stretch ">
									
								
									<div class="description-image">
										<figure>
											<a href="../gallery/Virginia1.JPG">
												<img alt="" aria-label="">
											</a>
										</figure>
									</div>
									<div class="description-right flex-stretch-child">
										<div class="row">
											<div class="col-2">
												<label for="animalName" > Name: </label>
											</div>
											<div class="col-10">
												<select name="animalName" id="animalName">
												</select>
											</div>
										</div>
										
										<div class="row">
											<div class="col-2">
												<label for="animalName"> Weight: </label>
											</div>
											<div class="col-10">
												<input type="number" name="animalName" id="animalName"><br>
											</div>
										</div>
										
										<div class="row">
											<div class="col-2">
												<label for="animalName"> Age: </label>
											</div>
											<div class="col-10">
												<input type="date" name="animalDOB" id="animalDOB"><br>
											</div>
										</div>
										<textarea name="comments" id="comments" rows="5" cols="100"></textarea>
								</div>
								</div>
							</form>
						</div>
						
						
						
						
						
					<?php
						foreach($adoptable['adoptable'] as $column){
							
							echo "<div class='flex-stretch sub-category-break padding-top'>";
								echo "<div class='description-image'>";
									echo"<figure>";
										echo "<a href='../gallery/".$column['imageFile']."'>";
										echo "<img src='../gallery/".$column['imageFile']."' alt='".$column['imageDescription']."' aria-label='".$column['imageDescription']."'>";
										echo"</a>";
									echo "</figure>";
								echo "</div>";
							
								echo "<div class='description-right flex-stretch-child'>";
									echo "<span class='font-bold'> Name: </span>". $column['animalName'] ."<br/>";
									echo "<span class='font-bold'> Weight: </span>". $column['animalWeight']."<br/>";
									echo "<span class='font-bold'> Age: </span>". $column['animalDOB']."<br/>";
							
									echo $column['adoptionDescription'];
							
								echo "</div>";
							echo "</div>";
						}
						
					
					?>
						
					</div>
					
					
					
					
				</section>
			</div>
		</section>

		<footer>
			<div class="container">
				
				
				
				<div class="flex-stretch sub-category-break-before">	
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
	