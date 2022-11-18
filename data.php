<?php 
   include('database.php');
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
        $data= "SELECT i.* ,c.name c_name FROM instrement i JOIN categorie c ON c.id = i.categoryId AND i.instrement_id =$id";
        $ress=mysqli_query($conn,$data);
        $row=mysqli_fetch_assoc($ress);

	}
?>