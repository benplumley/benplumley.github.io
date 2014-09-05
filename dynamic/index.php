<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ben Plumley</title>
		<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
		<link href="custom.css" rel="stylesheet">
		<link href="pace/pace.css" rel="stylesheet">
		<link href="favicon.png" rel="icon" type="image/png">
	</head>

	<body>
		<div id="wrap" class="curtain">
			<?php include 'navbar.php'; ?>
			<div class="container">
				<div class="scroll-page first-page">
					<div class="main-box">
						<h1 class="huge">Hello.</h1>
						<h2>I'm Ben Plumley. I write programs and make websites.</h2>
						<br>
						<div class="row">
							<div class="col-md-6">
								<p>Allow me to introduce myself. I am studying for a degree in Computer Science at Bath University, and I'm currently based in Southampton, England. I studied Computing at college and I've been making things since 2004.</p>
							</div>
							<div class="col-md-6">
								<p>This website is a portfolio of my skills and projects. I will use it to document technologies and systems I am familiar with, programs and websites I've made, and my up-to-date contact information.</p>
							</div>
						</div>
					</div>
					<span class="glyphicon glyphicon-chevron-down down-arrow" onclick="showScreen('writePrograms')"></span>
				</div>
				<div class="scroll-page">
					<div class="main-box">
						<h2 id="writePrograms">I write programs</h2>
						<p>I've written dozens of programs and utilities since I started programming. A few of my favourites can be found on this website.</p>
					</div>
					<span class="glyphicon glyphicon-chevron-down down-arrow" onclick="showScreen('makeWebsites')"></span>
				</div>
				<div class="scroll-page">
					<div class="main-box">
						<h2 id="makeWebsites">I make websites</h2>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
