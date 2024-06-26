<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
	<title>PHP | Note <?= "#{$note['uuid']}" ?></title>
</head>
<body>
	<?php require('components/header.view.php'); ?>
	<main>
		<section>
			<?php require('components/heading.view.php'); ?>
		</section>
		<section>
			<?php require 'components/note.view.php'; ?>
		</section>
		<section>
			<a href="/notes">Back to notes</a>
		</section>
	</main>
</body>
</html>
