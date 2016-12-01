<html>

<head>
	
	<style type="text/css">
		

	</style>
</head>
<body>
	
	<h1>Tasks for the Day</h1>

	<ul>

		<li>
			<strong>Name: </strong><?= $task['name']; ?>
		</li>

		<li>
		<strong>Due: </strong><?= $task['due']; ?>
		</li>

		<li>
			<strong>Assigned To: </strong><?= $task['assigned_to']; ?>
		</li>

		<?php /* The below uses the ternary operator...but it can get very MESSy if you want to add an icon!
		<li>
			<strong>Completed: </strong><?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
		</li>
		*/?>

		<li>
			<strong>Status: </strong>

			<?php

			// //Go to http://www.w3schools.com/charsets/ref_utf_dingbats.asp to find native HTML icon entities

			// if($task['completed']){

			// 	echo "&#x2714"; //Still can get pretty messy if you want to add in HTML

			// } else {

			// 	echo "&#x2716";

			// }

			?>

			<?php if($task['completed']) : ?>

				<span class="icon">&#x2714</span>

			<?php else : ?>

				<span class="icon">&#x2716</span>

			<?php endif; ?>
		</li>

	</ul>

</body>

</html>