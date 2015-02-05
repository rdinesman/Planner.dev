<?php
	var_dump($_POST);
?>

<html>
	<head>
		<title>TODO List</title>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/css/site.css">
	</head>
	<body>
		<h1>
			<em>
				TODO List
			</em>
		</h1>
		<ul>
			<li>Write this page</li>
			<li>Finish today's class</li>
			<li>Write up notes</li>
			<li>Go home</li>
		</ul>
		<div id="todo_add">
			<form method="POST" action="/todo_list.php">
				<h2>
					Add Item to TODO List
				</h2>
				<label for="todo_add">
					TODO:
				</label>
				<input type="text" class="todo_add" name="todo_add" placeholder="Task">
				<button type="submit">
					Add
				</button>
			</form>
		</div>
	</body>
</html>