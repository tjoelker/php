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
<!-- ### PHP ### -->
<?php
	// Numbers
	$integer = 7;
	$floating_point = 1.337;

	// String(s)
	$string = "Hello World";
	$string_numeric = "1e3"; // Will be displayed as a string
	$string_numeric = 1 + "1e3"; // Will be displayed as a integer, because a numeric expression is executed

	// Boolean(s)
	$boolean = true;
	function boolean($parameter): string {
		if ($parameter) {
			return 'The variable is truthy!';
		} else {
			return 'The variable is falsy...';
		}
	};
	$function = 'boolean'($boolean);
	$function_alt = $boolean ? 'The variable is truthy!' : 'The variable is falsy...';

	// Array(s)
	$array = array(
		$string, 
		$boolean,
	);
	$array = [
		'key' => $string,
		$boolean,
	];
	$movies = [
		[
			'title' => 'Dune',
			'year' => 2021,
			'genre' => [
				'Sci-fi',
			],
		],
		[
			'title' => 'Dune: Part Two',
			'year' => 2024,
			'genre' => [
				'Action',
				'Sci-fi',
			],
		],
	];

	// The variable that will be parsed into the DOM.
	$render = $boolean;
?>

<!-- ### HTML ### -->
<uL>
<?php foreach ($movies as $movie) : ?>
	<li>
		<span>title:</span> <?= $movie['title'] ?>
		<?php if (count($movie) > 1) : ?>
			<ul>
				<li>
					<?= $movie['year']; ?>
				</li>
				<li>
					<ul>
						<?php foreach ($movie['genre'] as $genre) : ?>
							<li><?= $genre ?></li>
						<?php endforeach; ?>
					</ul>
				</li>
			</ul>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</uL>
<?php if ($render) : ?>
<p style="color: var(--medium-blue-color);font-size: 12px;">
	A shorthand to <code style="font-size: 11px;">echo</code> variables inside PHP is <code style="font-size: 11px;">&lt;?= $variable ?&gt;</code>
</p>
<?= $function_alt ?>
<?php endif; ?>
</body>
</html>