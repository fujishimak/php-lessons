<?php


require 'functions.php';

// $task=[

// 	'name' => 'Finish Homework',
// 	'due' => 'today',
// 	'assigned_to' => 'Joshua',
// 	'completed' => false //using bools here because there are comparators expect this (and they're easier to use) 
// ];

//functions allow you to isolate a piece of logic behind a key/identifier which can be called anywhere within your application.

// function tekadump($arg1, $arg2, $arg3){

// 	var_dump($arg1, $arg2, $arg3);
// }

// tekadump('hello', 'big', 'world');

// Function dd (dump and die) accepts an array of data and returns same in formatted output

//dd($task);

/*Homework Lesson 10
The below leverages flydigate() to verify the age of an individual. 
If everything is good, then entry is allowed, otherwise it's not! */

// $age=21;

// echo (flydigate($age) ? 'Fly di gate! Welcome to di club!' : 'Tek weh yuhself!');

/*Classes are abstract representations of significant entities in your application, normally nouns such as Person, task,
Place, etc. 
Functions when placed in classes are called methods (really they're the same thing, but anyhow...)
A class must have a constructor function denoted by __construct($somearg) that is responsible for instantiation
...i.e. the compilation of a class into an actual object in memory.

The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or private. Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class itself and by inherited classes. Members declared as private may only be accessed by the class that defines the member. Class properties must be defined as public, private, or protected. If declared using var, the property will be defined as public.

Each class has ATTRIBUTES and METHODS. It is good to have GETTERS and SETTERS for specific attributes (you could make them all
public but that's not good practice)
*/



// $task1 = new Task('Go to UWI'); // new task object created
// $task2 = new Task('Head to the Supermarket');
// $task3 = new Task('Call Ms Johnson');
// $task4 = new Task('Write blog post');

// $tasks = [$task1, $task2, $task3, $task4];

// $tasks[jet_rand(3)]->setComplete();

/*Alternatively...

$tasks = [
	new Task('Go to UWI'),
	new Task('Head to the Supermarket'),
	new Task('Call Ms Johnson'),
	new Task('Write blog post')s
];
*/
// dd($task);


//require 'index.view.php';

// PHP = PHP Data Object. Syntax is as per the below: type of DB:host=IP and credentials. Try using a 
// db without a name to check the exception. best to wrap this in Try Catch.
// Note the specific exception. You can run the getMessage function to understand amy errors eg. SQLSTATE[HY000] [1049] Unknown database 'blah'
try {
	
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');

} catch (PDOException $e) { 

	die($e->getMessage());
	
}

// echo "<span>Yup I'm good!</span>";

$statement = $pdo->prepare('select * from todos');
$statement->execute();
//Be careful because fetchALL can saturate memory...so it may be good to use a single call to fetch
//returns associative array and regular indexed array by default, so use FETCH_OBJ to get entire rows. Use FETCH_CLASS
// to wrap the returned information into a class: syntax -- $statement->fetchAll(PDO::FETCH_CLASS, 'Task')
$results = $statement->fetchAll(PDO::FETCH_OBJ); 

// generate a new task array using generateTaskList
$tasks = generateTaskList($results);

// var_dump($tasks[0]->description);

require 'index2.view.php';

?>