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



?>