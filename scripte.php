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
           header('location: cration.php');
           
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
                <td><button type='submit' name='Edit' class='btn btn-primary task-action-btn' id='Edit-btn'><a href='cration.php?id=$row[instrement_id]'>Edit</a></td>

                </tr>
                
                ";
            }
        }   
    ?>