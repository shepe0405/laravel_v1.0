<!DOCTYPE html>
<html>
<head>
	<title>Aprendendo</title>
</head>
<body>
	<h1>Users</h1>
	<ul>
		<?php foreach ($users as $user) { ?>
			<li><?=$user->name?></li>
		<?php } ?>
	</ul>
</body>
</html>