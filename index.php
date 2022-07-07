<?php
$header="MIME-version: 1.0\r\n";
$header.='From:" Joëlnini.000webhostapp.com"<ninijoel1998@gmail.com>'."\n";
$header.='Content-Type:text/html charset="utf-8"'."\n";


<html>
	<head>
		<title>Portfolio Joelnini</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

	<!-- Main -->
			<div id="main">
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">
							<header>
								<h2>Contact</h2>
							</header>
							<p>Pour nous joindre, veuillez cliquer sur les icônes sociales en bas du Menu ou envoyer nous un message ici</p>
							<form method="post" action="index.html">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" value="Envoyer" name="envoyer" />
									</div>
								</div>
							</form>
						</div>
					</section>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
';
mail("ninijoel1998@gmail.com", "Salut", $message, $header);
?>