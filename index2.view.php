<html>

<head>
	
	<style type="text/css">
		

	</style>
</head>
<body>
	
	<h1>Tasks for the Day</h1>

	<ul>
		<!-- foreach shorthand below 'for bracketed colons only, end here!'.
		Remember that the notation: object->var|meth  -->

		<?php foreach ($tasks as $task) : ?>

			<li>

				<?php if($task->isComplete()) : ?>
				
					<strike><?= $task->getDesc(); ?></strike>
				
				<?php else : ?>

					<?= $task->getDesc(); ?>

				<?php endif; ?>
			</li>

		<?php endforeach; ?> 
		

	</ul>

</body>

</html>