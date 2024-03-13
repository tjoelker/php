<!-- component/heading.view -->
<h1>
	<?php 
		if ($_SERVER['REQUEST_URI'] === '/') {
			echo 'Home';
		} else {
			echo ucfirst(str_replace('/', '', str_replace('.php', '', $_SERVER['REQUEST_URI'])));
		}
		echo ' page';
	?>
</h1>