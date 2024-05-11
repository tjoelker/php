<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
	<title>PHP | Contact</title>
</head>
<body>
	<?php require('components/header.view.php'); ?>
	<main>
		<section>
			<?php require('components/heading.view.php'); ?>
		</section>
		<section>
			<?php
				// 101 (PHP) Classes
				$album = new Classes\Release;
				$album->year = 2018;
				$album->title = 'Portrait with Firewood';
				$album->artist = 'DjRUM';
				$album->tracklist = [
					'Unblocked',
					'Waters Rising (feat. Lola Empire)',
					'Creature Pt. 1',
					'Creature Pt. 2',
					'Sex',
					'Blue Violet',
					'Sparrows (feat. Lola Empire)',
					'Showreel Pt. 3',
					'Blood In My Mouth',
				];

				$album->createTable();
			?>
		</section>
	</main>
</body>
</html>
