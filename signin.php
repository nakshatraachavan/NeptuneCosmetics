<?php
$login= false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql="select * from users where username='$username' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num == 1)
    {
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location:index.php");
    }
    else
    {
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="partials/logstyle.css";
  </head>
  <body>

 <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?> 
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container my-4">
     <form action="/Makeup/signin.php" method="post">
        <h3>Log In</h3>

             <label for="username">Username</label>
            <input type="text" placeholder="Enter Username " id="username" name="username" aria-describedby="emailHelp">

            <label for="password">Password</label>
            <input type="password" placeholder=" Enter Password" id="password" name="password">
            <br>
            <div class="text-center">
                
            <p>Don't have an account<br> for <a href="/Makeup/signup.php" class="link user-actions"><strong>Sign up</strong></a>?</p>
          </div>
               <button type="submit" class="button">Log in</button>

     </form>
    </div>
</body>
</html>