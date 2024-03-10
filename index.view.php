<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		:root {
			--dark-grey-color: #333;
			--dark-blue-color: #4f5b93;
			--medium-blue-color: #7a86b8;
			--light-blue-color: #e2e4ef;
		}
		html,
		body {
			width: 100%;
			height: 100%;
		}
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 0;
			padding: 0;
			color: var(--dark-grey-color);
			font-family: sans-serif;
		}
		code {
			padding: 2px 4px;
			background-color: var(--light-blue-color);
			border-radius: 4px;
			color: var(--dark-blue-color);
		}
	</style>
	<title>PHP</title>
</head>
<body>
<ul>
	<?php foreach ($filtered_discography as $release) : ?>
		<li>
			<a href="<?= $release['link'] ?>">
				<?= "{$release['artist']} - {$release['title']} ({$release['year']})" ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
<?php if ($render) : ?>
<p style="color: var(--medium-blue-color);font-size: 12px;">
	A shorthand to <code style="font-size: 11px;">echo</code> variables inside PHP is <code style="font-size: 11px;">&lt;?= $variable ?&gt;</code>
</p>
<?= $function_alt ?>
<?php endif; ?>
</body>
</html>