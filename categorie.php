<?php
    include('include/data.php');
    include('script.php');
    if(isset($_GET['id'])){
		$id = $_GET['id'];}
        $sqly="SELECT * FROM categorie";
        $rus=mysqli_query($conn,$sqly);
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
           <?php include 'include/sidebar.php' ?>
        <div class="content w-100 " style="background-color: rgb(226, 223, 220)">
            <!-- start-header -->
            <?php include 'include/header.php'; ?>
            <h5 class="mb-5 ms-3 mt-3">
             <?php
            while($data= mysqli_fetch_assoc($rus)){
             if($data["id"]==$id){
                echo $data["name"];
             }
            } 
             ?>
            </h5>
            <div class=" w-100 d-flex justify-content-center">
                <?php include 'include/tableau.php' ?>
                <tbody>
                    <?php
                afficher($id);
                    ?>
                </tbody>
                </table>
                
            </div>
        </div>
        
    </div>   
   
    
</body>
</html>
<script src="script.js"></script>