<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
	<title>PHP | Notes</title>
</head>
<body>
	<?php require('components/header.view.php'); ?>
	<main>
		<section>
			<?php require('components/heading.view.php'); ?>
		</section>
		<section>
			<ul>
				<?php foreach($notes as $note) : ?>
					<li>
						<a href="notes/note?uuid=<?= $note['uuid'] ?>" style="display: block;width: 50vw;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
							<?= $note['content'] ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</main>
</body>
</html>