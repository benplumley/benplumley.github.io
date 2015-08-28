<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ben Plumley</title>
		<meta name="viewport" content="width=device-width, initial-scale=0.9">
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
						<div class="vertical-center-outer">
  						<div class="vertical-center-inner">
								<h1 class="huge">Hello.</h1>
								<h2>I'm Ben Plumley. I write programs and make websites.</h2>
								<br>
								<div class="row">
									<div class="col-md-6">
										<p>Allow me to introduce myself. I am studying for a degree in Computer Science at Bath University, where I'm currently based. I studied Computing at college and I've been making things since 2004.</p>
									</div>
									<div class="col-md-6">
										<p>This website is a portfolio of my skills and projects. I will use it to document technologies and systems I am familiar with, programs and websites I've made, and my up-to-date contact information.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<span class="glyphicon glyphicon-chevron-down down-arrow" onclick="showScreen('page2')"></span>
				</div>
				<div class="scroll-page">
					<div class="main-box">
						<div class="vertical-center-outer">
							<h2 id="page2"></h2>
							<div class="vertical-center-inner">
								<div class="horizontal-align">
									<img class="circle" width="200" height="200" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANhAAAAJGVmMDFkN2VjLWEwMjEtNGY2NS05Yjc1LWMxMDUxZDU0YzA3ZA.jpg"></img>
									<a type="button" class="btn btn-primary" href="contact">Get in touch</a>
								</div>
  						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
