<?php
if(!isset($_SESSION)){
    session_start();
}
    include_once("connections/connection.php");
    $con=connection();

    if(isset($_POST['login'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="SELECT * FROM acount WHERE user_name='$username' AND password='$password'";
        $user=$con->query($sql) or die($con->error);
        $row=$user->fetch_assoc();
        $total=$user->num_rows;

        if($total>0){
            $_SESSION['UserLogin']=$row['user_name'];
            $_SESSION['Access']=$row['access'];

            echo header("Location: index.php");
        }
        else{
            //echo "No user found - Bawal ka Igdi";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tricycle hailing System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>

        
        </style>
</head>
    <body> 
    <h2><p class="l1">Welcome To Pasakay Golden Country Home</p></h2>
    <br/>
    <h3>(Tricycle Hailing System)</h3>

    <img src="images/tricycle.png" alt="tricycle">
    <div class="main-center">
    <div class="vertical-center">
    <header class="header_title">
    <h1>Administrator</h1>
    </header>
    <br/>
    <br/>
    <form action="" method="post">
        <label>User Name</label>
        <br/>
        <input type="text" name="username" id="username">
        <br/>
        <label>Password</label>
        <br/>
        <input type="password" name="password" id="password">
        <br/>
        <section class="mb-5">
         
            <button class="btn btn-primary">Primary</button>
        </section>
        <br/>
        <br/>
        <a href="#" class="btn-signup" name="sign-btn"method="post">Create Account</a>
    </form>
    </div>
    </div>
</body>
</html>