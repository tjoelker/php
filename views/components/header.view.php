<!-- component/header.view -->
<header>
	<nav>
		<ul>
			<li>
				<a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Home</a>
			</li>
			<li>
				<a href="/notes" class="<?= $_SERVER['REQUEST_URI'] === '/notes' ? 'active' : '' ?>">Notes</a>
			</li>
			<li>
				<a href="/about" class="<?= $_SERVER['REQUEST_URI'] === '/about' ? 'active' : '' ?>">About</a>
			</li>
			<li>
				<a href="/contact" class="<?= $_SERVER['REQUEST_URI'] === '/contact' ? 'active' : '' ?>">Contact</a>
			</li>
		</ul>
		<button>Login</button>
	</nav>
</header>
