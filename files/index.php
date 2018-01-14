<!DOCTYPE html>
<html>

	<head>
		<link type="text/css" rel="stylesheet" href="my_website_stylesheet.css"/> <!-- This is the CSS link -->
		
		<script
  			src="https://code.jquery.com/jquery-3.2.1.min.js"
  			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  			crossorigin="anonymous"></script>  <!-- This is the jQuery link -->

		<script src="myWebsite.js"></script> <!-- This is the javascript link -->
		<title> My website</title>
	</head>

	<body>
		<div id ="header" >
		 <h1>Henry Bojanowski</h1>
		</div>
		
		<div class="left">
			
			<h3>My Jobs</h3>
			    <ol>
			        <li>BU IT Help Center</li>
			        <li> White Rabbit Frozen Yogurt
			        <li> Panera Bread </li>
			        <li> Metro Newspaper Deliverer</li>
			        
			    </ol>
			<h3> Volunteer Work</h3>
				<ol>
					<li> Boston University First Year Student Outreach Program</li>
				    <li> Harvard Summer School Volunteering</li>
			    </ol>
		</div>

		<div class ='welcome'>
			<?php include 'functions.php';
				sayHello();



			?>




		</div>
		
		<div class="right">
			<h3>My Schools</h3>
				<ol>
					<li>Boston University studying Computer Engineering</li>
					<li>Harvard University: Summer Program</li>
					<li>University at Buffalo:Summer Program</li>
					<li> Lancaster Central High School</li>
				</ol>
			<h3>Relevant Coursework</h3>
				<ol>
					<li class ="CS-111-button">CS 111: Intro to Computer Science I </li>
						<ul class ="hide" id='cs111'>
							<li>Primarily used Python programmimg language</li>
							<li>Inner workings of a computer including CPU storage, assembly language, minterm expansions and binary</li>
						
						</ul>
					<li class="CS-112-button">CS 112: Intro to Computer Science II</li>
						<ul class='hide' id='cs112'>
							<li>Used java programming language </li>
							<li>Binary and ternary search trees</li>
							<li>Recursion, Linked Lists and object oriented programming in Java</li>
						</ul>
					<li class="EC-327-button">EC 327: Software Engineering </li>
						<ul class='hide' id='ec327'>
							<li>Learned C/C++11</li>
							<li>Learned the standard template library,linked lists,pointers, static/dynamic casting</li>
							<li>Created android app, see github</li>
							<li>Created Space Race Game in C++, see github</li>
						</ul>
				</ol>
			
		</div>

		<div class="second_right">
			<h3 id ="social_links_header">Social Links</h3>
				<a href="https://github.com/henrybojanowski">
					<img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png"></a>
				<a href="https://app.joinhandshake.com/users/2425306">
					<img src="http://www.pointpark.edu/media/StudentLife/careerservices/handshake-glyph-200x200px.png"></a>
				<a href = "https://www.linkedin.com/in/henry-bojanowski-7b7ba9102">
					<img src="https://www.seeklogo.net/wp-content/uploads/2016/06/linkedin-logo-vector-download.jpg"></a>


		</div>
		
		<div id="footer">
			<h3 id ="summary">Summary</h3>
				<ul>
					<li>Studying full-time at Boston University[3.00 gpa]</li>

					<li class='expand'>Experience in the following programmimg languages:</li>
						<ul class='on_or_off' id = '1'>
							<li>Python</li>
							<li>Java</li>
							<li>C/C++11
							<li>HTML</li>
							<li>CSS</li>
							<li>JavaScript</li>
							<li>jQuery</li>
							<li>PHP and SQL</li>
						</ul>
					<li>Please take a look at my social links for programming projects I've done and more details on job experience </li>
					<li>My full resume is available on my handshake and linkedIN </li>
				</ul>

		</div>
	

	
	
	</body>
</html>