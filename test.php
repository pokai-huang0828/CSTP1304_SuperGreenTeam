<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm Login Page");
?>
<header>
	<nav class="navbar navbar-light navbar-expand-lg bg-white justify-content-between">
		<div class="container">

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="index.html">
				<div class="logo-container">
					<img src="/assets/logo.png" class="img-fluid logo">
				</div>
			</a>

			<div class="collapse navbar-collapse" id="main-navigation">
				<ul class="navbar-nav d-flex flex-row-reverse">
					<li id="menu-home" class="nav-item current-menu-item"><a class="nav-link" href="index.html">Home</a></li>
					<li id="menu-program" class="nav-item"><a class="nav-link" href="program.html">Program</a></li>
					<li id="menu-portfolio" class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
					<li id="menu-newsroom" class="nav-item"><a class="nav-link" href="news.html">Newsroom</a></li>
					<li id="menu-blog" class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
				</ul>
			</div>
            
		</div>
	</nav>
</header>

<?php
Shared::footer();
?>