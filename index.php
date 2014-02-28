<!doctype html>

<html lang="en">
<head>
  <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>	
  <meta charset="utf-8">

  <title>GC Energy Ltd | The #1 Energy Recruiters</title>
  <meta name="description" content="">
  <meta name="author" content="Digimoose">

  <link rel="stylesheet" href="style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About/Contact</a></li>
				<li><a href="#">Recruiters</a></li>
				<li><a href="#">Candidates</a></li>
				<li><a href="#">Jobs</a></li>
			</ul>
		</nav>
		<img src="img/gcenergy_logo.png">
		
	</header>
	<section>Rotating banner will go here</section>
	<main>Main content will go here</main>
	<section id="send_cv">
		<h2>Send us your CV</h2>
		<p>Some text that appeals to potential candidates and encourages them to send you there cv.</p>
		<form action="/my-handling-form-page" method="post">
			<div>
				<label for="first_name"></label>
				<input type="text" id="first_name" placeholder="first name" />
			</div>
			<div>
				<label for="last_name"></label>
				<input type="text" id="last_name" placeholder="last name" />
			</div>
			<div>
				<label for="email"></label>
				<input type="email" id="email" placeholder="email" />
			</div>
			<div>
				<label for="tel"></label>
				<input type="tel" id="tel" placeholder="tel" />
			</div>
			<div>
				<label for="msg"></label>
				<textarea id="msg" placeholder="OPTIONAL: enter a message for example: I'm interested in job ID00500"></textarea>
			</div>
			<div>
				<label for="file"></label>
				<input  id="file" type="file" value="Upload CV">
			</div>
			<div>
				<input id="submit" value="Send" type="submit">
			</div>		
		</form>
	</section>
	<section id="latest_jobs">
		<h2>Latest Jobs</h2>
		<div class="sb_job">
			<a href="#">
			<h4>Job Title Goes here</h4>
			<address>Country</address>
			<p>Salary</p>
			<p>Job Type</p>
			<p>Description about the job will go here and be limited to a certain amount of char ...</p>
			</a>
		</div>
		<div class="sb_job">
			<a href="#">
			<h4>Job Title Goes here</h4>
			<address>Country</address>
			<p>Salary</p>
			<p>Job Type</p>
			<p>Description about the job will go here and be limited to a certain amount of char ...</p>
			</a>
		</div>
	</section>
	<footer>
		<div class="container">
			<section class="testimonials"><h2>RECENT TESTIMONIALS</h2></section>
			<section class="address"><h2>OUR ADDRESS</h2></section>
			<section class="sectors"><h2>BROWSE JOBS BY SECTOR</h2></section>
			<section>
			<h2>GET IN TOUCH</h2>
			<p>Fill out the form and submit your message</p>
			<form action="/my-handling-form-page" method="post">
				<div>
					<label for="first_name"></label>
					<input type="text" id="first_name" placeholder="first name" />
				</div>
				<div>
					<label for="last_name"></label>
					<input type="text" id="last_name" placeholder="last name" />
				</div>
				<div>
					<label for="email"></label>
					<input type="email" id="email" placeholder="email" />
				</div>
				<div>
					<label for="tel"></label>
					<input type="tel" id="tel" placeholder="tel" />
				</div>
				<div>
					<label for="msg"></label>
					<textarea id="msg" placeholder="OPTIONAL: enter a message for example: I'm interested in job ID00500"></textarea>
				</div>
				<div>
					<input id="submit" value="Send" type="submit">
				</div>		
	    	</form>
			</section>
		</div>
	</footer>
</body>
</html>