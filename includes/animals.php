<?php
	include_once'../includes/dBconnect.php';
	include_once 'general.php';	

	if($_SERVER["REQUEST_METHOD"]=="POST" AND isset($_POST["method"])){
			echo $_POST["method"]();
	}
	

	/*Echo filtered animal list through AJAX call*/
	function echo_animals(){
		$db = getDataConnection();
		return animals($db);
	}

	/*Query animals table*/
	function animals($db){
 		$query = "SELECT *
							FROM `animal`";
		
		try{
			$stmt = $db->prepare($query);
			$stmt->execute();
		}catch(PDOException $err){
			return $ex;
		}
		$results['animal'] = $stmt->fetchAll();
		return $results;
	}

/*		SELECT animal.animalID, animalName
FROM  `animal` 
WHERE NOT 
EXISTS (

SELECT * 
FROM animalAdoption
WHERE animal.animalID = animalAdoption.animalID
)
*/
	/*Echo adoptable animal ist through AJAX call*/
	function echo_adoptableAnimals(){
		$db = getDataConnection();
		$json = json_encode(adoptableAnimals($db));
		echo $json;
	}

//animalFilter('>2')
	/*Get adoptable animals list based on filter criteria*/
	function adoptableAnimals($db){
		$filterValue = "Like '%'";
	
		if(isset($_POST['filter'])){
			$filterValue = $_POST['filter'];
		}
		switch($filterValue){
			case '1':
				$whereCriteria = "=". $filterValue;
				break;
			case '2':
				$whereCriteria = "=". $filterValue;
				break;
			case '>2':
				$whereCriteria = $filterValue;
			case "Like '%'":
				$whereCriteria = $filterValue;
				break;
			case "All":
				$whereCriteria = "Like '%'";
				break;
			default:
				return "bad parameter";
		}
				
	
		$query = "SELECT *
							FROM `adoptableAnimals`
							Where animalType $whereCriteria";
					
		try{
			$stmt = $db->prepare($query);
			$stmt->execute();
		}catch(PDOException $err){
			return $err;
		}
	
		$results['adoptable'] = $stmt->fetchAll();
		return $results;
}
?>