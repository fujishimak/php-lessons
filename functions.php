<?php

function dd($data){

	echo '<pre>';
		var_dump($data);
	echo '</pre>';
}


/*Homework: Write a function that determines if a provided age (sent through as an argument) is old enough to enter a 21-and-up night club. Have this function return a boolean, which can be used in any conditional.*/
/*Take age
if age >= 21
then allow entry
else disallow entry
Display welcome for being older than 21*/

function flydigate($age){

	if($age >= 21){

		//echo 'Fly di gate!!\nWelcome to di club!';
		return true;
	} 
	else {

		//echo 'Tek weh yuhself!';
		return false;
	}
}

function jet_rand($max){

	return mt_rand(0, $max);
}

class Task{

	protected $description; 

	protected $completed = false; // by default any newly created task isn't complete!


	public function __construct($description){

		$this->description = $description;
	}

	/*Check if task is complete
	*/
	public function isComplete(){
		
		return $this->completed;
	}

	/*Set task to completed
	*/
	public function setComplete(){
		
		$this->completed = true;
	}

	/*Get description of the task
	*/
	public function getDesc(){
		
		return $this->description;
	}

	/*Update description of the task
	*/
	public function updateDesc($newdesc){
		
		$this->description = $newdesc;
	}
}

/*Generate a task list from a result set from the DB
*/
function generateTaskList($resultSet){

	// create a variable to act as a counter
	$iter = 0;

	// initialise a new task array
	$tasks = [];

	// Iterate through the results fetched by PDO and create new task objects for each
	foreach ($resultSet as $result){

		$tasks[$iter] = new Task($result->description);
		$iter++;
	}

	return $tasks;
}


?>