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
				<div class="main-box">
					<h1>About</h1>
					<p>This timeline of my life so far shows what year I first used each of the technologies or systems that I'm familiar with. Click on a label on the timeline to jump to a description of my experience with each of them.</p>

					<div class="well well-lg">
						<table>
							<tr>
								<td class="table-year table-year-first">In this year</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" href="#">I started using this</a></span>
								</td>
							</tr>
							<tr>
								<td class="table-year table-year-first">1995</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-asterisk table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Oxygen')" href="#">Oxygen</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">1996</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">1997</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">1998</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">1999</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2000</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Windows')" href="#">Windows</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2001</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2002</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2003</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2004</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Scratch')" href="#">Scratch</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2005</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2006</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('iOS')" href="#">iOS</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2007</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('OSX')" href="#">OSX</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2008</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2009</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
							<tr>
								<td class="table-year">2010</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Java')" href="#">Java</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2011</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Android')" href="#">Android</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2012</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('Visual Basic')" href="#">Visual Basic</span>
									<span class="label label-default" onclick="showIt('Debian')" href="#">Debian</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2013</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('.NET')" href="#">.NET</span> <!--Important space-->
									<span class="label label-default" onclick="showIt('SQL')" href="#">SQL</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2014</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('HTML')" href="#">HTML</span> <!--Important space-->
									<span class="label label-default" onclick="showIt('CSS')" href="#">CSS</span> <!--Important space-->
									<span class="label label-default" onclick="showIt('Version Control')" href="#">Version Control</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2015</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
									<span class="label label-default" onclick="showIt('CentOS')" href="#">CentOS</span> <!--Important space-->
									<span class="label label-default" onclick="showIt('GitHub Collaboration')" href="#">GitHub Collaboration</span> <!--Important space-->
                                    <span class="label label-default" onclick="showIt('Clojure')" href="#">Clojure</span> <!--Important space-->
                                    <span class="label label-default" onclick="showIt('OpenGL')" href="#">OpenGL</span>
								</td>
							</tr>
							<tr>
								<td class="table-year">2016</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-asterisk table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
                                    <span class="label label-default" onclick="showIt('Haskell')" href="#">Haskell</span> <!--Important space-->
                                    <span class="label label-default" onclick="showIt('Prolog')" href="#">Prolog</span> <!--Important space-->
                                    <span class="label label-default" onclick="showIt('MATLAB')" href="#">MATLAB</span>
								</td>
							</tr>
                            <tr>
								<td class="table-year table-year-first">2017</td>
								<td class="table-timeline">
									<span class="glyphicon glyphicon-minus table-glyphicon"></span>
								</td>
								<td>
									<!-- <span class="glyphicon glyphicon-minus table-glyphicon"></span> -->
								</td>
							</tr>
						</table>
					</div>

					<h2 id="Oxygen">Oxygen</h2>
					<p class="constrain-width">I was born in 1995.</p><br>

					<h2 id="Windows">Windows</h2>
					<p class="constrain-width">In 2000, I started playing with my dad's Windows PC. I have used Windows as my primary OS since then, both for work and recreation. My primary and secondary schools and my sixth form college have all primarily used Windows, and I consider myself proficient in its use.</p><br>

					<h2 id="Scratch">Scratch</h2>
					<p class="constrain-width">In 2004, I was introduced to MIT's graphical programming language, Scratch. Despite appearing to be a glorified turtle, the language is quite powerful, providing support for real programming concepts like variables and event-driven routines. My most ambitious project in Scratch was a program that used random numbers to simulate the price of a stock, drew a graph to represent this changing price against time, and calculated whether the stock should be bought, sold or held at any moment in time, all whilst tracking its current balance. Unfortunately, I was unable to make a program that could consistently generate profit.</p><br>

					<h2 id="iOS">iOS</h2>
					<p class="constrain-width">In 2006, I bought an iPod Touch (2nd gen). It was my first iOS device, and the closest thing I'd had to a smartphone. I later updated to a 4th gen iPod Touch, but I stopped using iOS when I got my first Android phone. However, I was later invited to co-author a policy at my Secondary school which would introduce iOS devices to the classroom to be used as an aid to education. This project was successful, and by 2012, my school had spent over &pound;20,000 on implementing it.</p><br>

					<h2 id="OSX">OSX</h2>
					<p class="constrain-width">My secondary school was an Apple Regional Training Centre, so almost all design, music and art work was done using iMacs and eMacs. I realise "I can use a Mac" isn't much of an achievement, but it's left me well accustomed to design programs like Photoshop, and music programs like Logic.</p><br>

					<h2 id="Java">Java</h2>
					<p class="constrain-width">In 2010, I did two weeks work experience with IBM in Hursley. I was asked to work through a Java tutorial, which was my first introduction to real programming. This tutorial focused on object-oriented programming, and by the time I started my work experience, I was able to make a variety of short programs that ran in the Eclipse console. At IBM, I was put on a team working on the WebSphere software.<br>
					In 2015, I picked Java up again for my Computer Science degree, and used it to create some of my newest and most complex projects.</p><br>

					<h2 id="Android">Android</h2>
					<p class="constrain-width">In early 2011, I bought an HTC Wildfire running Android Eclair. It was slow, small and ugly but the user experience jump from Symbian to Android was more than enough for me to ignore its shortcomings. Then, in 2012, I bought an LG Nexus 4 almost immediately after it was released. The difference between Eclair in Sense lipstick on a 240p screen and stock Jelly Bean on a 720p screen was huge. I'm still using the Nexus 4, running KitKat now, but I'm keeping my eyes open for a replacement. One I've got my eye on is the OnePlus One, which isn't scheduled for release yet.</p><br>

					<h2 id="Visual Basic">Visual Basic</h2>
					<p class="constrain-width">At my sixth form college, programming is taught using Visual Basic. The first year is spent writing console applications. Visual Basic is the first language I really experimented with, and is a language I've used in most of my projects. </p><br>

					<h2 id="Debian">Debian</h2>
					<p class="constrain-width">I bought a Raspberry Pi soon after they were released in 2012. After the excitement of setting it up, it sat unused for months because I had no idea what to use it for. Then some friends asked me to host their game server, and I set it up on the Pi. Of course, it was woefully underpowered and left the game unplayable, but it got me thinking about what I could do with it. I now use it as a file server, effectively giving me 1TB of cloud storage for the cost of pennies in electricity. Along the way, I learned my way around Debian, SSH and using computers without desktop environments.</p><br>

					<h2 id=".NET">.NET</h2>
					<p class="constrain-width">In the second year of my computing A Level, I learned how to use the .NET framework to make form applications in Visual Basic. Many of my projects use it for tasks such as reading from an SQL database and taking pictures using the computer's webcam.</p><br>

					<h2 id="SQL">SQL</h2>
					<p class="constrain-width">SQL is a big part of the A Level syllabus, which is where I was introduced to it. Soon after, I used it in Totally to store what could become thousands or tens of thousands of records over the program's lifetime.</p><br>

					<h2 id="HTML">HTML</h2>
					<p class="constrain-width">Despite having made six websites since 2009, the first five were all made using DreamWeaver's WYSIWYG editor. This site is the first that I've made exclusively by writing HTML in a text editor. I started learning it on Codecademy but after the first few lessons, I started to enjoy it so much that I decided to teach myself.</p><br>

					<h2 id="CSS">CSS</h2>
					<p class="constrain-width">This website uses Twitter's Bootstrap and a custom CSS file for its styles. Using CSS, I have made the website responsive, and also created the curtain footer and shrinking navbar.</p><br>

					<h2 id="Version Control">Version Control</h2>
					<p class="constrain-width">Since I started using GitHub for version control, I have created repositories for all my major projects, including this website. I have also contributed to some open source projects through GitHub.</p><br>

					<h2 id="CentOS">CentOS</h2>
					<p class="constrain-width">Lots of work for my degree program is done using CentOS. Writing programs to run in a headless environment on a server, or that use X Windows for communication, presents a different set of challenges to the Windows programs I'd been used to writing.</p><br>

					<h2 id="GitHub Collaboration">GitHub Collaboration</h2>
					<p class="constrain-width">My Computer Science degree also involved working on a shared GitHub code base with a team of programmers. This meant learning how to use lots of source control features that I'd previously had no use for, such as pulling and branching. It also meant learning how to deal with the organisational side of programming with a team, something I hadn't previously tried.</p><br>

                    <h2 id="Clojure">Clojure</h2>
                    <p class="constrain-width"></p><br>

                    <h2 id="OpenGL">OpenGL</h2>
                    <p class="constrain-width"></p><br>

                    <h2 id="Haskell">Haskell</h2>
                    <p class="constrain-width"></p><br>

                    <h2 id="Prolog">Prolog</h2>
                    <p class="constrain-width"></p><br>

                    <h2 id="MATLAB">MATLAB</h2>
                    <p class="constrain-width"></p><br>

				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
