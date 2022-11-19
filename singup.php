<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	    <!-- ================== END core-css ================== -->
    
</head>
<style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
        body {
            font-family: 'Lato', sans-serif;
            color: #fffcfc;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
            
        }
        .bg{
            width:100%;
            height:100%;
            position: fixed;
            background-image: url('img/guitar.jpg');
            background-size : cover;
            filter : blur(5px);
            Z-index :-1;
        }
        input {
            width: 100%;
            border-radius: 4px;
            border: none;
            font-family: inherit;
            outline: none;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            padding: 0.9rem 0.7rem;
            font-size: 13px;
        }
        
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        
        button:hover {
            opacity: 1;
        }
        
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
        /* #app{
            position: absolute;
            margin-top :-45%;
            margin-left :-79%;
            color: white;
            display: static;
             
        } */
        p{
            margin-top : 10px;
            font-size : 14px;
        }
        form {
            width: 40%;
        }
        .fors{
            width: 100%;
            display:flex;
            justify-content: center;
            text-align: center;
        }
        @media only screen and (max-width: 390px) {
            .hd.d-flex.justify-content-between{
                display: flex;
                flex-direction: column;
            }
                
            }
    </style>
</head>
<body >
    <div class="bg"></div>
    <nav>
<div class="text-white h1 position-relative"><a href="http://localhost/application-web-gestion/"class="text-decoration-none text-white"><span class="navbar-logo text-danger "><i class="bi bi-music-note-list"></i></span> <b class="name-logo">RockStars</b></a></div>
    </nav>
    <div class="fors">
    <form action = "script.php" method ="POST">
        <div class="container">
            <h3>Sign Up</h3>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <div class="hd d-flex justify-content-between">
                <div style="width:45%">
                    <div class="nom d-flex align-items-start">
                        <p><b>Nom</b></p>
                    </div>
                    <input type="text" placeholder="Enter Nom"class="w-100" name="nom_up"  required>
                </div>
                <div style="width:45%">
                    <div class="prenom d-flex align-items-start">
                        <p><b>Prénom</b></p>
                    </div>
                    <input type="text" placeholder="Enter Prénom" class="w-100" name="Prenom_up" required>
                </div>
            </div>
            <div class="email d-flex align-items-start">
                <p><b>Email</b></p>
            </div>
            <input type="text" placeholder="Enter Email" name="email_up" required>
            <div class="psw d-flex align-items-start">
                <p><b>Password</b></p>
            </div>
            <input type="password" placeholder="Enter Password" name="psw_up" required>
            <p class='mt'>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div class="clearfix">
                <button type="submit" name ="signup" class="signupbtn">Sign Up</button>
                <a href="http://localhost/application-web-gestion/"class="text-decoration-none text-white"> <button type="button" class="cancelbtn">Cancel</button></a>
            </div>
        </div>

    </form>
    </div>
</body>

</html>