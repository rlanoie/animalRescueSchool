<!DOCTYPE html>

<html lang="en">
  <head>
		<title>ACGSRescue</title>
		<link rel="shortcut icon" type="image/x-icon" href="../icon/favicon.png"/>
		
		<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="ACGSRescue, Animal Rescue, Animal Adoption, Pet Adoption, TNR, Non-Profit, Felines, Cats, Dogs, Canines, ACGSR Animal Rescue, animal adoption, pets, furbabbies">
		<!--Google Analytics-->
		<meta name="google-signin-client_id" content="1095576072025-g2ctsov7fargrr1ue3vp4hvdbi7qe169.apps.googleusercontent.com">
				
		<!-- Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
		
		<!-- Custom-Themes -->		
    <link rel="stylesheet" type="text/css" href="../application_css/application_style.css" />
  </head>
  
  <body>
    <section id = "body">
      <div class = "pageConstruct_container">
        <div id = "page">
					
          <header>
						<h1>ACGSRescue</h1>
            <h2>Adoption Application</h2>
          </header>
					<div class="innerPage_container">
						<div id="interactive_Form">
						<section id = "section-credential" class="formDetails individual_View">
            <form id="adoptionForm">
              <fieldset class="customerContact">
                <div class="formRow-error">   
                </div>
                <div class="formRow">
                  <div class = "col-md-1">
                    <label for="firstName" hidden>First Name</label>
                    <input type="text" name="firstName" id="firstName" value="First Name">  
                  </div>
                </div>
                <div class="formRow">  
                  <div class = "col-md-4">
                    <label for="middleInitial" hidden>Middle Initial</label>
                    <input type="text" name="middleInitial" id="middleInitial" value="Initial">  
                  </div>
                  <div class = "col-md-75">
                    <label for="lastName" hidden>Last Name</label>
                    <input type="text" name="lastName" id="lastName" value="Last Name">  
                  </div>
               </div>
                <div class="formRow">
                 <div class = "col-md-1">
                   <label for="email" hidden>Email</label>
                   <input type="email" name="email" id="email" value="Email">  
                 </div>
               </div> 
                <div class="formRow">
                 <div class = "col-md-1">
                   <label for="newPassword" hidden>Password</label>
                   <input type="password" name="newPassword" id="newPassword"  autocomplete="newPassword">  
                 </div>
               </div>
                <div class="formRow">
                 <div class = "col-md-1">
                   <label for="confirmPassword" hidden>Confirm Your Password</label>
                   <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="newPassword">  
                 </div>
               </div>
                <div class="formRow">
                  <div class="col-md-1 centerText">
                    <button type="submit">Next</button>
                  </div>
                </div>
              </fieldset>  
            </form>
          </section>
					<section id="pageInstructions" class="instructions individual_View">
            <div class="instructionsContainer">
              <p>Please provide the following information to assist us in matching the right pet to the right home.  In order to process the adoption, this form must be completed, reviewed and then approved.
              <br><br>Adoption Fee for Felines is $135 and the adoption fee for Canines is $275.  The adoption fee includes Veterinary Health Examination, Vaccinations, Deworming, HeartWorm/ FEL/FIV Testing, Microchip, and Advantage/Frontline. </p>              
            </div>
          </section>
					<section id="section-address" class="formDetails">
						<fieldset hidden>  
               <div class="formRow-error">   
                </div>
               <div class="formRow">
                  <div class = "col-md-40">
                    <label for="streetAddress" hidden>Street Address</label>
                    <input type="text" name="streetAddress" id="streetAddress" value="Street Address">  
                  </div>
                  <div class = "col-md-5">
                    <label for="unitNumber" hidden>Unit Number</label>
                    <input type="text" name="unitNumber" id="unitNumber" value="Unit #">  
                  </div>
                  <div class = "col-md-40">
                    <label for="city" hidden>City</label>
                    <input type="text" name="city" id="city" value="City">  
                  </div>
                  <div class = "col-md-40">
                    <label for="state" hidden>State</label>
                    <input type="text" name="state" id="state" value="State">  
                  </div>
                  <div class = "col-md-40">
                    <label for="zipcode" hidden>Zip Code</label>
                    <input type="text" name="zipcode" id="zipcode" value="Zip Code">  
                  </div>
                </div>
            </fieldset>  
					</section>

					</div>
					</div>
        </div>
      </div>
    </section>
  </body>
  
</html>