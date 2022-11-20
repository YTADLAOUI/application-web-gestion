<?php 
	session_start();
    if(!isset($_SESSION['name'])){
        header('location: login.php');
    }
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
    <div class="page d-flex ">
           <?php include 'sidebar.php' ?>
        <div class="content w-100 " style="background-color: rgb(226, 223, 220)">
            <!-- start-header -->
            <?php include 'header.php'; ?>
            <h3 style= "">Dashbord</h3>
                <div class = "d-flex flex-wrap align-items-center justify-content-around " style="height:70vh;">
                    <div class="card" style="width: 9rem; height :15rem">
                            <img class="card-img-top" style ="max-height: 40px; max-width :40px;" src="img/stor.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                    </div>
                    <div class="card" style="width: 9rem; height :15rem">
                            <img  style ="max-height: 40px; max-width :40px;" class="card-img-top" src="img/nbr.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                    </div>
                    <div class="card" style="width: 9rem; height :15rem">
                            <img class="card-img-top" style ="max-height: 40px; max-width :40px;" src="img/sala.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                    </div>
                    <div class="card" style="width: 9rem; height :15rem;">
                            <img class="card-img-top" style ="max-height: 40px; max-width :40px;" src="img/ddd.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                    </div>
                </div>
            </div>
            <!-- end -->
    </div>
   
    <script src="./scripte.js" ></script>
</body>
</html>