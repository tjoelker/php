<!-- component/header.view -->
<header>
	<nav>
		<ul>
			<li>
				<a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Home</a>
			</li>
			<li>
				<a href="/about.php" class="<?= $_SERVER['REQUEST_URI'] === '/about.php' ? 'active' : '' ?>">About</a>
			</li>
			<li>
				<a href="/contact.php" class="<?= $_SERVER['REQUEST_URI'] === '/contact.php' ? 'active' : '' ?>">Contact</a>
			</li>
		</ul>
		<button>Login</button>
	</nav>
</header>