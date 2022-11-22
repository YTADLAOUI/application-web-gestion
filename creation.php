<?php
   include "include/data.php";
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
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
	    <!-- ================== END core-css ================== -->
    <title>Dashbord</title>
</head>
<body class="bg-">
    <div class="page d-flex ">
           <?php include 'include/sidebar.php' ?>
        <div class="content w-100 " style="background-color: rgb(226, 223, 220);">
            <!-- start-header -->
            <?php include 'include/header.php'; ?>
            <h5 class="p-3" style=""> + add instrument</h5>
            <div class="d-flex justify-content-center">
                 <form class="" id="form" action = "script.php" method ="POST" data-parsley-validate>
							<input type="hidden" name="id_hid" value="<?= $row['instrement_id']?? ''?>">
                            <div class="mb-3">
								<label class="form-label">Name d'instrumente</label>
								<input type="text" value="<?= $row['name']?? ''  ?>" name ="instr-title" class="form-control" id="inster_title" data-parsley-minlength="3" required/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Quantite</label>
								<input type="number" value="<?= $row['quantite']?? ''?>" name ="inster-qte" class="form-control" id="inster_qte" required/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Prix</label>
								<input type="number"value="<?= $row['prix'] ?? ''?>" name ="inster-prix" class="form-control" id="inster_prix"step=any required/>
							</div>
                            <div class="mb-3">
								<label class="form-label">catégorie</label>
								<select class="form-select" name = "inster-cat" id="inster_cat">								
									<option  <?= (isset($row['categoryId']) AND $row['categoryId'] == '1') ? 'selected' : ''?> value="1">les instrements bois</option>
									<option <?= (isset($row['categoryId']) AND $row['categoryId'] == '2')  ? 'selected' : ''?> value="2">les instrments cordes</option>
									<option <?= (isset($row['categoryId']) AND $row['categoryId'] == '3' ) ? 'selected' : ''?> value="3">les instrement celle des claviers</option>
									<option <?= (isset($row['categoryId']) AND $row['categoryId'] == '5')  ? 'selected' : ''?>  value="5">les instrements percussion</option>
								</select>
							</div>
                            <div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" value="<?= $row['date_time'] ?? '' ?>" class="form-control" name="inster-date" id="inster_date"/>
							</div>
							<div class="mb-0 " >
								<label class="form-label">Description</label>
								<textarea  class="form-control" rows="4" name="inster-description" id="inster_description" rows="10" data-parsley-trigger="keyup" data-parsley-minlength="5" data-parsley-maxlength="100" data-parsley-minlength-message="You need to enter at least a 5 character comment.." data-parsley-validation-threshold="10" required><?= $row['description'] ?? '' ?></textarea>
							</div>
							<?php
								if(isset($_GET['id']))
								{
									echo "<button type='submit'  name='update' class='btn btn-warning task-action-btn w-100' id='update-btn'>Update</button>";
								}
								else
								{
									echo '<button type="submit" name="save" class="btn btn-primary task-action-btn w-100 mt-2" id="save-btn">Save</button>';
								}
							?>
							
						    
							
                			
				</form>
            </div>
        </div>
            <!-- end -->
    </div>
	<!-- javascripte -->
	<script src="scripte.js"></script>
    
</body>

</html>