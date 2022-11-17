<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();
       if(isset($_POST["signIn"])){ login();}
       if(isset($_POST["save"])){saveInstrement();}



       function login(){
        global $conn;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $email    =$_POST["email"];
            $password =$_POST["psw"];
            $qery     ="SELECT * FROM adminx WHERE adminx.email= '$email' AND adminx.psw='$password'";
            $res      =mysqli_query($conn,$qery);
            $count    =mysqli_num_rows($res);
            if ($count==1){
               $row =mysqli_fetch_assoc($res);
               $_SESSION['name'] = $row['nom'];
               header('location: principal.php');
               
            }else{
                header('location: login.php');
            }
          }
        }
        function saveInstrement(){
            global $conn;
        $Title          = $_POST["instr-title"];
        $Quantite       = $_POST["inster-qte"];
        $Prix           = $_POST["inster-prix"];
        $catégorie      = $_POST["inster-cat"];
        $Date           = $_POST["inster-date"];
        $description    = $_POST["inster-description"];
        $sqlconn ="INSERT INTO `instrement`( `name`, `description`, `date_time`, `quantite`, `categoryId`, `prix`) VALUES ('$Title','$description','$Date','$Quantite','$catégorie','$Prix')";
           mysqli_query($conn,$sqlconn);
           header('location: instrement.php');
        }
    
          
    ?>