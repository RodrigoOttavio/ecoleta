<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Coleta</title>
    <!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/style.css?1" rel="stylesheet">
  </head>
  <body>
	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="./?page=index">E-Coleta</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item">
			  <a class="nav-link" href="?page=index">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=sobre">About</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=cadastro">Create account</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=loc">Pickup points</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=historia">Story of garbage</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=faq">FAQ</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="?page=contato">Contact us!</a>
			</li>
		  </ul>
		</div>
	  </nav>
	</header>

	<main role="main">
	<?php
	   $p = isset($_GET['page']) ? $_GET['page'] : 'index';

	   if (file_exists('./pages/' . $p . '.php')) {
		   $p = $p;
	   } else {
		   $p = '404';
	   }
		require 'pages/' . $p . '.php';
	?>
	  <!-- FOOTER -->
	  <footer class="container">
		<p class="float-right"><a href="#">Go to the top of the page</a></p>
		<p>&copy; 2021-2021 E-Coleta Company</p>
	  </footer>
	</main>
	<script src='./js/bootstrap.min.js'></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</html>
