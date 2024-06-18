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
		border-radius: 50px;
		margin: 10px;
		font-size: 18px;
		margin-top: 20px;

	}

	.chat {
		width: 150px;
		height: 50px;
		border: none;
		border-radius: 50px;
		margin: 10px;
		font-size: 18px;
		margin-top: 20px;



	}

	.img-profile {
		width: 300px;
		height: 300px;
		border-radius: 50%;
	}

	.about-me {
		text-align: center;
		justify-content: center;
		margin-top: 7%;
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
		text-align: center;
		justify-content: center;
		margin: 5%;
		font-size: 20px;
	}

	.title-experiences {
		margin-right: 2%;
		margin-left: 7%;
	}

	li {
		font-size: 20px;
	}

	.btn {
		margin-top: 5%;
	}

	.skills-title {
		margin-left: 7%;
		margin-right: 2%;
	}



	/* skilld section */
	.skills {
		text-align: center;
		justify-content: center;
		font-size: 25px;
		margin-top: 10%;
		margin-bottom: 7%;
		font-weight: bold;


	}

	.frontand-container {
		margin: 25px;
	}

	.backand-container {
		margin: 25px;


	}

	.skills-container {
		text-align: center;
		justify-content: center;
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
	.card{
		margin-top: 5%;
		margin-left: 10%;
		margin-right: 10%;
		margin-bottom: 10%;

	}
</style>



<body>


	<div class="profile">

		<div class="title">
			<p class="hello-title">HELLO MY NAME </p>
			<h2 class="name-title">AHARON MILLROD</h2>
			<p class="work-title">FULL STACK PHP DEVELOPER</p>

			<div class="btn">
				<input class="CV btn btn-primary" type="button" value="Download CV">
				<input class="chat btn btn-primary" type="button" value="Lets Chat">
			</div>
		</div>

		<div class="about">
			<h3 class="about-me">About Me</h3>
			<img src="https://media.licdn.com/dms/image/C4E03AQEtP5HbrfVOOA/profile-displayphoto-shrink_100_100/0/1627652597197?e=1720656000&v=beta&t=ENGo-mLz_u8W5_MMuo11_C6uE5BmJyqUZkraqDDAM_c" class="img-profile">
		</div>


		<div class="experiences">
			<h5 class="title-experiences">Experience</h5>
			<ul>
				<li>Web development</li>
				<li>Internship</li>
				<li>PHP</li>
				<li>Angular</li>
				<li>freelance</li>
			</ul>

			<h5 class="title-experiences">Education</h5>
			<ul>
				<li>Computer Science</li>
				<li>Bachelor In Talmudic lew</li>
			</ul>

			<h5 class="title-experiences">Projects</h5>
			<ul>
				<li>3 Major Web Apps</li>
				<li>Tachnical publication</li>
			</ul>
		</div>



		<p class="describe">I am a full-stack php web developer proficient in HTML, CSS, JavaScript, React.js, RESTful APIs,
			Git, and Git-Hub. I also have more than 4 years of experience studying, researching, writing code,
			I am curious, love to create , and I love to learn anything technology.
			I am passionate about developing the web and harnessing its power to impact our daily lives for the better.</p>




		<div class="skills-container">
			<p class="skills">My Skills</p>
			<div class="skills-list">
				<h5 class="skills-title">Front Development</h5>
				<ul>
					<li>CSS</li>
					<li>bootstarp</li>
					<li>Angular</li>
					<li>HTML</li>
					<li>JavaScript</li>
					<li>React.js</li>
				</ul>
				<h5 class="skills-title">Backand Development</h5>

				<ul>
					<li>PHP</li>
					<li>Java</li>
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
					<img class="project-img" src="https://github.com/aronShlomo/Movie-with-popcorn/blob/main/application/pictures/photo.png?raw=true" alt="">
					<div class="card-body">
						<h5 class="card-title">Mevakshi Torah</h5>
						<a href="https://github.com/aronShlomo/mevakshi_torah.git" class="btn btn btn-primary">Git Hub</a>
					</div>
				</div>
			</div>


		</div>






	</div>







</body>

</html>