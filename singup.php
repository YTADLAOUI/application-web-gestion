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
            width: 70%;
            border-radius: 4px;
            border: none;
            font-family: inherit;
            outline: none;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            padding: 0.9rem 0.7rem;
            font-size: 17px;
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
    </style>
</head>


<body>

    <form>
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <div class="email">
                <p><b>Email</b></p>
            </div>
            <input type="text" placeholder="Enter Email" name="email" required>

            <div class="psw">
                <p><b>Password</b></p>
            </div>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <div class="psw">
                <p><b>Repeat Password</b></p>
            </div>
            <input type="password" placeholder="Enter Password" name="psw-Repeat" required>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </div>

    </form>

</body>

</html>