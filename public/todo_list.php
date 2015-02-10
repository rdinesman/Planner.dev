<!--
<?php
	var_dump($_POST);
?>
-->

<html>
	<head>
		<title>TODO List</title>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/css/site.css">
	<body>
			<script type="text/javascript" src="js/todo.js"></script>
			<div class="box" id="left_box"></div>
			<div class="box" id="right_box"></div>
			<h1 class="header">
				<em>
					TODO List
				</em>
			</h1>
			<ul>
				<li>Find</li>
				<li>More</li>
				<li>Kitten</li>
				<li>Pictures</li>
			</ul>
			<div id="todo_add">
				<form method="POST" action="/todo_list.php">
					<h2 class="header">
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