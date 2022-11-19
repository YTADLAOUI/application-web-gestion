<?php 
	include "data.php";
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styleee.css">
	    <!-- ================== END core-css ================== -->
    <title>Dashbord</title>
</head>
<body class="bg-">
    <div class="page d-flex " >
           <?php include 'sidebar.php' ?>
        <div class="content w-100 " style="background-color: rgb(226, 223, 220);">
            <!-- start-header -->
            <?php include 'header.php'; ?>
            <h4 class="p-3" style= "">les instrements</h4>

      <div style="flex-wrap: wrap;" class="d-flex align-items-center justify-content-around ">

        <a href ="http://localhost/application-web-gestion/categorie.php?id=1"><button class="card"  style="width: 14rem;">
            <img src="img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> Les instrement bois</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </button>
    </a>
        <a href ="http://localhost/application-web-gestion/categorie.php?id=2">
            <button class="card"  style="width: 14rem;">
            <img src="img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Les instrement celle des claviers</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </button>
        </a>
                    <a href ="http://localhost/application-web-gestion/categorie.php?id=3">
                        <button  class="card"  style="width: 14rem;">
                            <img src="img/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Les instrement des cordes</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                        </button>
                    </a>
                    <a href ="http://localhost/application-web-gestion/categorie.php?id=5"><button class="card"  style="width: 14rem;">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Les instrement des percussions</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </button></a>
         </div>
        </div>
            <!-- end -->
    </div>
   
    
</body>
</html>