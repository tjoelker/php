<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>PHP | Home</title>
</head>
<body>
	<?php require('component/header.view.php'); ?>
	<main>
		<section>
			<?php require('component/heading.view.php'); ?>
		</section>
		<section>
			<?php echo $extra; ?>
		</section>
	</main>
</body>
</html>