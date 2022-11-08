<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	    <!-- ================== END core-css ================== -->

</head>
<style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
        body {
            font-family: 'Lato', sans-serif;
            color: #fffcfc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
            background-color: black;
            background-image: url('guitar.jpg');
            background-size : cover;
        }
        
        input {
            width: 100%;
            border-radius: 4px;
            border: none;
            font-family: inherit;
            outline: none;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            padding: 0.9rem 0.7rem;
            font-size: 17px;
        }
        .psw{
          margin-top:4%;
        }
        
        .chec {
            margin-top: 4%;
        }
        
        .chec input {
            width: 30px;
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
        .logo{
          position: absolute;

        }
    </style>
</head>


<body>
<nav>
  <div class="logo">
    <img src="" alt="">
  </div>
</nav>
    <form>
        <div class="container">
            <h1>Sign In</h1>
            <p>Welcome back to our application enjoy it.</p>
            <hr>
            <div class="email">
                <p><b>Email</b></p>
            </div>
            <input type="text" placeholder="Enter Email" name="email" required>

            <div class="psw">
                <p><b>Password</b></p>
            </div>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <div class="chec">
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> <span>Remember me</span>
            </div>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign in</button>
            </div>
            <div class="text-center">
                <p>Not a member? <a href="http://localhost/projetGestion/singup.php">Register</a></p>
            </div>

    </form>

    
</body>

</html>