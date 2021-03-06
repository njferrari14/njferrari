<?php require 'assets/includes/header.php'; ?>

<body id="home">

<!-- "Above the fold" content
========================================================= -->
<? require 'assets/includes/menu.php'; ?>

<div id="header" class="grid-container header">

	<img src="assets/images/logo_dark_bg.png" class="logo" alt="logo" id="logo" width="300" height="554">
	<h1>Nicholas J Ferrari</h1>

</div>
	<!-- "Below the fold"
    ========================================================= -->
	<main>

		<div id="about" class="about-banner">
			<h2>About Me</h2>
		</div>

		<div class="grid-container-lg about">

			<img class="pic" src="assets/images/me.jpg" alt="Pic of Nick">

			<div id="bio" class="bio">
				<p>Hi, I'm Nick. I like to create unique user experiences.
				<br>
				<br>I started by writing role-playing adventures, murder-mystery parties, and other creative events. Then, while taking an introductory course in C++, I realized I liked to code, and if I developed that skill further, I could learn to create anything I wanted on the web. So I enrolled in Francis Tuttle's Web Development course as a Back-end Developer. 
				<br>
				<br>
				Now I code responsive, dynamic websites and applications. In my creations, I strive for novelty, minimalism, and immersion.</p>
			</div>

		</div>

		<div id="port" class="grid-container port">
			
			<div class="port-banner">
				<h2>Portfolio</h2>
			</div>

			<div class="work">

					<div class="example e-one e-left grid-container-lg">
						<a class="e-link" href="http://site12.wdd.francistuttle.edu/projects/splendorous/index.html">
							<img class="e-pic" src="assets/images/splendorous.jpg" alt="Create the Code">
						</a>
						
						<div class="blurb">
							<a href="http://site12.wdd.francistuttle.edu/projects/splendorous/index.html"><h4 class="e-header">Create the Code</h4></a>
							<p>
								Splendorous is a website template. This was my first project. I was given an image of what the finished site should look like and was tasked with coding a "pixel perfect" web page.
							</p>
							<p class="skills-used">
								HTML5, CSS3, Photoshop
							</p>
						</div>
					</div>

					<div class="example e-right grid-container-lg">
						<a class="e-link" href="http://site12.wdd.francistuttle.edu/projects/chromatics/index.html">
							<img class="e-pic" src="assets/images/chromatics.jpg" alt="Discography Project">
						</a>

						<div class="blurb">
							<a href="http://site12.wdd.francistuttle.edu/projects/chromatics/index.htm"><h4 class="e-header">Discography</h4></a>
							<p>
								I designed and coded a discography website for Chromatics, an indie low-fi rock band. I used Photoshop to design the logo and mock up style-tiles for feedback. I coded the site using the Bootstrap framework.
							</p>
							<p class="skills-used">
								HTML5, CSS3, JavaScript, Photoshop, Bootstrap
							</p>
						</div>
					</div>

					<div class="example e-left grid-container-lg">
						<a class="e-link" href="http://site12.wdd.francistuttle.edu/projects/queen/index.php">
							<img class="e-pic" src="assets/images/queen.jpg" alt="Revamp Project">
						</a>

						<div class="blurb">
							<a href="http://site12.wdd.francistuttle.edu/projects/queen/index.php"><h4 class="e-header">Discography Revamp</h4></a>
							<p>
								I was tasked with <a href="http://site36.wdd.francistuttle.edu/">Rikki Eichler</a>'s discography project to revamp using PHP. I reorganized the code in a PHP framework; added back-end functionality and dynamically-generated content using a database in MySQL and phpMyAdmin; and added an admin section for updating content on the "albums" page.
							</p>
							<p class="skills-used">
								HTML5, CSS3, PHP, PDO, SQL, MySQL, Bootstrap, Apache, XAMPP, phpMyAdmin
							</p>
						</div>
					</div>

					<div class="example e-right grid-container-lg">
							<a class="e-link" href="https://terranavis.life/html/index.php">
								<img class="e-pic" src="assets/images/bpa.jpg" alt="BPA Project">
							</a>
						
						<div class="blurb">
							<a href="https://terranavis.life/html/index.php"><h4 class="e-header">BPA: Website Design Team, Project Manager and Content Creator</h4></a>
							<p>
								I participated in Business Professionals of America's Website Design Team competition with <a href="https://savannahskinner.com/">Savannah Skinner</a> and <a href="http://noshinr.com/">Noshin Rahman</a>. As Content Creator, I gathered, researched, wrote and edited the content of the site. As Project Manager, I coordinated the team's efforts using Basecamp, Slack, GitHub, Dropbox and pCloud. I designed an HTML slideshow for our presentation to judges at the regional and national levels.
							</p>
							<p class="skills-used">
								HTML5, CSS3, PHP, JavaScript, Git, GitHub, Apache, XAMPP, Photoshop, Illustrator
							</p>
						</div>
					</div>
			</div>

			<div id="skills" class="skills grid-container-lg">
				<h3 class="h-three">Skills</h3>
				<ul class="skill-list">
					<li class="s-item i-one"><h4 class="s-name">HTML5</h4><i class="fab fa-html5 fa-10x"></i></li>
					<li class="s-item i-two"><h4 class="s-name">CSS3</h4><i class="fab fa-css3-alt fa-10x"></i></li>
					<li class="s-item i-three"><h4 class="s-name">JavaScript</h4><i class="fab fa-js-square fa-10x"></i></li>
					<li class="s-item i-four"><h4 class="s-name">PHP</h4><i class="fab fa-php fa-10x"></i></li>
					<li class="s-item i-five"><h4 class="s-name">SQL</h4><img class="sql" src="assets/images/icons/sql.svg" alt="SQL" height="159" width="122"></li>
				</ul>
			</div>

			<div class="other box">
				<h3><a href="playground.php">Code Playground >>></a></h3>
				<p>I'm currently self-enrolled in <a href="https://www.theodinproject.com/">The Odin Project</a>, and this is where I will be uploading all my projects from that course as well as anything else I build.</p>
			</div>

		</div>

	</main>

<?php require 'assets/includes/footer.php'; ?>