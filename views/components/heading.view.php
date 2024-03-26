<!-- component/heading.view -->
<h1>
	<?php 
		if (isset($heading) && $heading !== '') {
			echo $heading;
		} elseif ($_SERVER['REQUEST_URI'] === '/') {
			echo 'Home';
		} else {
			echo ucfirst(str_replace('/', '', str_replace('.php', '', $_SERVER['REQUEST_URI'])));
		}
		echo ' page';
	?>
</h1>