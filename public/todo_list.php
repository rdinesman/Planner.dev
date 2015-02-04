<?php
	var_dump($_POST);
?>

<html>
	<head>
		<title>TODO List</title>
	</head>
	<body>
		<h1>TODO List</h1>
		<ul>
			<li>Write this page</li>
			<li>Finish today's class</li>
			<li>Write up notes</li>
			<li>Go home</li>
		</ul>
		<form method="POST" action="/todo_list.php">
			<h2>Add Item to TODO List</h2>
			<label for="todo_add"><input type="text" id="todo_add" name="todo_add" placeholder="Add item"></label>
			<button type="submit">Add</button>
		</form>
	</body>
</html>