<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des instruments</title>
    	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	    <!-- ================== END core-css ================== -->
		<style>
		.logo {
    			background-image: url("img/instr.jpg");
    			width: 100%;
    			height: 100%;
    			position: fixed;
				background-size : cover;
				filter: blur(5px);

		}
		nav,section{
			position : relative;
			margin-bottom :15%;
		}
		.citation{
			background: rgba( 255, 255, 255, 0.1 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 2.5px );
			-webkit-backdrop-filter: blur( 2.5px );
			border-radius: 10px;
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			width:40%
			
		}



		</style>
</head>
<body>
	<div class="logo"></div>
	<nav>
		<div class="d-flex justify-content-around pt-5">
			<div class="text-white h1"><span class="navbar-logo text-danger "><i class="bi bi-music-note-list"></i></span> <b class="">RockStars</b></div>
					<div class="">
           						<ul class="d-flex list-unstyled ">
									<li><a href="" class="text-decoration-none text-white h3 me-5" ><b>Home</b></a></li>
									<li><a href="" class="text-decoration-none text-white h3 me-5"><b>Service</b></a></li>
									<li><a href="" class="text-decoration-none text-white h3"><b>Contact Us</b></a></li>
								</ul>
					</div>
							<div class="d-flex">
								<a href="login.php" class="me-2"><button type="button" class="btn btn-outline-primary text-white "><h4>Sign In</h4></button></a>
                  				<a href="singup.php"><button type="button" class="btn btn-outline-danger text-white "><h4>Sign Up</h4></button></a>
								
							</div>
		</div>
	</nav>
	<section>
		<div class="d-flex justify-content-around ">
		<div class="text-white citation me-3">
			<h1>Le but de l'art, le but d'une vie ne peut être que d'accroître la somme de liberté et de responsabilité qui est dans chaque homme et dans le monde.</h1>
		</div>
		<div class=" text-white citation"> <h1>RockStars c'est un application de gestion qui aide l'utilisateur gére en ligne de son stock des instruments de musique pour maintenir tout le travail quotidien du stock.</h1> </div>
		</div>

	</section>
    
</body>
</html>