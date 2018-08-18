<?php
	
//TEST INPUT----------------------------------------------------------------
		/*Checks that the input is not malicous
			RETURNS the tested input*/
			function test_input($data) {
  			$data = trim($data); //remove white space
	  		$data = stripslashes($data); 
				$data = strip_tags($data);
  			$data = htmlspecialchars($data);
	  		return $data;
			}

?>