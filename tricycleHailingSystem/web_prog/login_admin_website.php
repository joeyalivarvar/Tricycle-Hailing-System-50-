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
            echo "No user found - Bawal ka Igdi";
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
    <style>

        
        </style>
</head>
<body>
    <header class="header_title">
    <h1>Login Page</h1>
    </header>
    <h1>Login Page</h1>
    <br/>
<br/>
    <form action="" method="post">
        <label>User Name</label>
        <input type="text" name="username" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>