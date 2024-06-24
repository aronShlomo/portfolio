<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<title>Portfolio</title>
</head>
<style>
	body {
		font-size: 15px;
	}

	.title {
		text-align: center;
		margin: 5%;
		font-size: 17px;
		font-weight: bold;

	}


	.name-title {
		text-align: center;
		margin-top: 20px;
		font-size: 17px;
		font-weight: bold;


	}

	.work-title {
		margin-top: 20px;
		font-weight: bold;

	}

	.CV {
		width: 150px;
		height: 50px;
		border: none;
		text-decoration: none !important;
		border-radius: 50px;
		margin: 10px;
		padding-top: 10px;
		font-size: 18px;
		text-align: center;
		color: white;
		padding: 20px;
		background-color: #1f1f38;

	}

	.chat {
		width: 150px;
		height: 50px;
		border: none;
		text-decoration: none !important;
		border-radius: 50px;
		margin: 10px;
		padding-top: 10px;
		font-size: 18px;
		text-align: center;
		color: white;
		padding: 20px;
		background-color: #1f1f38;



	}

	.img-profile {
		width: 400px;
		height: 400px;
		border-radius: 50%;
		margin-right: 100px;
	}

	.about-me {
		text-align: center;
		justify-content: center;
		margin-top: 15%;
		margin-bottom: 5%;
		font-weight: bold;

	}

	.experiences {
		display: flex;
		text-align: center;
		justify-content: center;
		margin: 10%;

	}

	.about_card {
		margin: 10px;
		padding: 20px;
		font-size: 20px;
		border-radius: 20px;
	}

	.describe {
		font-size: 20px;
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 5%;
		text-align: center;
	}


	li {
		font-size: 20px;
	}

	.btn {
		margin-top: 4%;
		margin: 3%;
	}

	.skills-title {}



	/* skilld section */
	.skills {
		text-align: center;
		justify-content: center;
		font-size: 25px;
		margin-top: 15%;
		margin-bottom: 7%;
		font-weight: bold;


	}

	.frontand-container {
		margin: 25px;
	}

	.backand-container {
		margin: 25px;


	}



	.skills-list {
		display: flex;
		text-align: center;
		justify-content: center;
	}


	.card-img {
		display: flex;
	}

	.recent-title {
		font-size: 25px;
		font-weight: bold;
		margin-top: 10%;
		margin-bottom: 6%;

	}

	.project-img {}

	.btn {
		font-style: italic;
		justify-content: center;
		align-items: center;
	}

	.profile {
		text-align: center;
		justify-content: center;
	}

	.card {
		margin-top: 5%;
		margin-left: 10%;
		margin-right: 10%;
		margin-bottom: 10%;

	}

	.experiance-section {
		display: flex !important;
		width: 60%;
		margin-top: 5%;

	}


	.experiance h5 {
		margin-bottom: 40px;
	}

	.education h5 {
		margin-bottom: 40px;
	}

	.projects h5 {
		margin-bottom: 40px;
	}

	.projects p {
		font-size: 18px
	}

	.education p {
		font-size: 18px
	}

	.experiance p {
		font-size: 18px
	}


	.experiance {
		margin-left: 3%;
		margin-right: 3%;
		background-color: #1f1f38;
		color: white;
		padding: 11%;
		border-radius: 40px;

	}


	.education {
		margin-left: 3%;
		margin-right: 3%;
		background-color: #1f1f38;
		color: white;
		padding: 11%;
		border-radius: 40px;

	}

	.projects {
		margin-left: 3%;
		margin-right: 3%;
		background-color: #1f1f38;
		color: white;
		padding: 11%;
		border-radius: 40px;

	}

	.about_me_section {
		display: flex;
		justify-content: center;
		margin-left: 20%;
		margin-right: 25%;

	}

	.skills-container {}

	.front-skills {
		background-color: #1f1f38;
		color: white;
		padding: 5%;
		margin-left: 37%;
		margin-right: 37%;
		border-radius: 5%;
		margin-bottom: 1%;


	}

	.backend-skills {
		background-color: #1f1f38;
		color: white;
		padding: 5%;
		margin-left: 37%;
		margin-right: 37%;
		margin-bottom: 1%;
		border-radius: 5%;

	}

	.front {
		margin-top: 25%;
	}
	.backend {
		margin-top: 25%;
	}	
	.card-body{
		background-color: #1f1f38;
		color: white;
	}
</style>



<body>


	<div class="profile">

		<div class="title">
			<p class="hello-title">HELLO MY NAME </p>
			<h2 class="name-title">AHARON MILLROD</h2>
			<p class="work-title">FULL STACK PHP DEVELOPER</p>
		</div>


		<a class="CV" href="download/Aharon_Millrod_Resume.pdf">Download CV</a>
		<a class="chat" href="#" value="Lets Chat">Lets Chat</a>


		<h3 class="about-me">About Me</h3>
		<div class="about_me_section">
			<img src="https://media.licdn.com/dms/image/C4E03AQEtP5HbrfVOOA/profile-displayphoto-shrink_100_100/0/1627652597197?e=1720656000&v=beta&t=ENGo-mLz_u8W5_MMuo11_C6uE5BmJyqUZkraqDDAM_c" class="img-profile">
			<div class="about_me_section_two">
				<div class="experiance-section">
					<div class="experiance">
						<h5>Experience</h5>
						<ul>
							<li>
								<p>Internship</p>
							</li>
							<li>
								<p>Freelance</p>
							</li>
							<li>
								<p>Hands on projects</p>
							</li>
						</ul>
					</div>
					<div class="education">
						<h5>Education</h5>
						<ul>
							<li>
								<p>Computer Science Degree</p>
							</li>
							<li>
								<p>Bachelor In Talmudic lew</p>
							</li>
						</ul>
					</div>
					<div class="projects">
						<h5>Projects</h5>

						<ul>
							<li>
								<p>3 Major Web Apps</p>
							</li>
							<li>
								<p>Tachnical publication</p>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<p class="describe">I am a full-stack php web developer proficient in CodeIgniter framework HTML, CSS, JavaScript, Angular , RESTful APIs,
			Git, and Git-Hub. I also have more than 4 years of experience studying, researching, writing code,
			I am curious, love to create , and I love to learn anything technology.
			I am passionate about developing the web and harnessing its power to impact our daily lives for the better.</p>


		<!-- skiils -->
		<p class="skills">My Skills</p>

		<div class="front-skills">
			<h5 class="front-title">Front Development</h5>
			<div class="front">
				<ul>
					<li>CSS</li>
					<li>bootstarp</li>
					<li>Angular</li>
					<li>HTML</li>
					<li>JS</li>
				</ul>
			</div>
		</div>

		<div class="backend-skills">
			<h5>Backand Development</h5>
			<div class="backend">

			<ul>
				<li>PHP</li>
				<li>CodeIgniter</li>
				<li>Git</li>
				<li>Mysql</li>
				<li>RESTful APIs</li>
			</ul>
			</div>
		</div>





		<!-- RECENT WORK -->
		<div class="recent-work">
			<div class="recent-title">My Recent Work</div>

			<div class="card-img">
				<div class="card">
					<img class="project-img" src="https://github.com/aronShlomo/Movie-with-popcorn/blob/main/application/pictures/photo.png?raw=true" alt="">
					<div class="card-body">
						<h5 class="card-title">Movie & Popcorn</h5>
						<a href="https://github.com/aronShlomo/Movie-with-popcorn/tree/main/application" class="btn btn btn-primary">Git Hub</a>
					</div>
				</div>

				<div class="card">
					<img class="project-img" src="https://github.com/aronShlomo/portfolio/blob/main/application/images/mevakshitorah.png?raw=true" alt="covk">
					<div class="card-body">
						<h5 class="card-title">Mevakshi Torah</h5>
						<a href="https://github.com/aronShlomo/portfolio.git" class="btn btn btn-primary">Git Hub</a>
						<a href="https://mevakshitorah613.com/" class="btn btn btn-primary margin:">Website</a>

					</div>
				</div>



			</div>


		</div>






	</div>








</body>

</html>