<?php
    //INCLUDE DATABASE FILE
    include('include/database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();
       if(isset($_POST["signIn"])){ login();}
       if(isset($_POST["save"])){saveInstrement();}
       if(isset($_GET["action"])&&($_GET["action"] === "delete")){deletInster();}
       if(isset($_POST["update"])){update();}
       if(isset($_POST["signup"])){logup();}
       if(isset($_GET["log"])&&($_GET["log"]==="out")){logout();}
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
                
            
                
                header('location: login.php?message');
               $_SESSION['message'] = "s'il vous plait check votre information!";
            
            }
          }
        }
        function logup(){
            global $conn;
            $nom = $_POST["nom_up"];
            $pre=$_POST["Prenom_up"];
            $mail=$_POST["Prenom_up"];
            $psw=$_POST["psw_up"];
            $up="INSERT INTO `adminx`(`nom`, `prenom`, `email`, `psw`) VALUES ('$nom','$pre','$mail','$psw')";
            mysqli_query($conn,$up);
            sleep(2) ;
            header('location: login.php');

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
           sleep(2) ;
           header('location: creation.php');
           
        }
        function deletInster(){
            global $conn;
          $var= $_GET["id"] ;
          $ssql="DELETE FROM instrement WHERE instrement_id = $var";
          mysqli_query($conn,$ssql);
          sleep(2) ;
          header('location: instrument.php');
        }
        
        function afficher($Var){
            global $conn;
            $i=1;
            $qyy="SELECT i.* ,c.name c_name FROM instrement i JOIN categorie c ON c.id = i.categoryId AND  i.categoryId= $Var";
            $result = mysqli_query($conn,$qyy);
            
            while($row=mysqli_fetch_assoc($result)){
                // $i++;
                echo "
                <tr> 
                <th scope='row'>".$i++."</th>
                <td>". $row['name'] ."</td>  
                <td>". $row['quantite'] ."</td>
                <td>". $row['prix'] ."dh</td>
                <td>". $row['c_name'] ."</td>
                <td>". $row['date_time'] ."</td>
                <td>". $row['description'] ."</td>        
                <td><a href='creation.php?id=$row[instrement_id]'><button type='submit' name='Edit' class='btn btn-outline-warning' id='Edit-btn'>Edit</button></a></td>
                <td><a href='script.php?id=$row[instrement_id]&action=delete'><button type='button' name='dele' class='btn btn-outline-danger' id='Edit-btn'>DELETE</button></a></td>
                </tr>
                ";
            }
        } 
        function afficherTouts(){
            global $conn;
            $i=1;
            $Query="SELECT i.* ,c.name c_name FROM instrement i JOIN categorie c ON c.id = i.categoryId ";
            $result=mysqli_query($conn,$Query);
            while($row=mysqli_fetch_assoc($result)){
                echo "
                <tr> 
                <th scope='row'>".$i++."</th>
                <td>". $row['name'] ."</td>  
                <td>". $row['quantite'] ."</td>
                <td>". $row['prix'] ."dh</td>
                <td>". $row['c_name'] ."</td>
                <td>". $row['date_time'] ."</td>
                <td>". $row['description'] ."</td>        
                <td><a href='creation.php?id=$row[instrement_id]'><button type='submit' name='Edit' class='btn btn-outline-warning' id='Edit-btn'>Edit</button></a></td>
                <td><a href='script.php?id=$row[instrement_id]&action=delete'><button type='submit' name='dele' class='btn btn-outline-danger' id='Edit-btn'>DELETE</button></a></td>
                </tr>
                ";
            }
        }
        function update(){
            global $conn;
            
        $num            = $_POST["id_hid"] ;
        $Title          = $_POST["instr-title"];
        $Quantite       = $_POST["inster-qte"];
        $Prix           = $_POST["inster-prix"];
        $catégorie      = $_POST["inster-cat"];
        $Date           = $_POST["inster-date"];
        $description    = $_POST["inster-description"];
            $upd= "UPDATE `instrement` SET `name`='$Title',`description`='$description',`date_time`='$Date',`quantite`='$Quantite',`categoryId`='$catégorie',`prix`='$Prix ' WHERE instrement_id =$num";
            mysqli_query($conn,$upd);
                sleep(1);
            header('location: creation.php');
        }
        function logout(){

            unset($_SESSION['name']);
            header('location: login.php');
        }

        function message(){
                $_SESSION["test"]="test";
        }
        

    ?>

<!-- <td><button  onclick=delet($row[instrement_id]) type='submit' name='dele' class='btn task-action-btn text-danger' id='delete-btn'>Delete</button></td> -->
