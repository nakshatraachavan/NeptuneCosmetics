<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
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

    <!-- <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
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
    ?> -->
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container my-4">
     <form action="/Makeup/signup.php" method="post">
        <h3>Sign Up</h3>
        <center><a href="/Makeup/signin.php"><h6><strong>or Login here</strong></h6></a>
            </center>
             <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" id="username" name="username" aria-describedby="emailHelp">

            <label for="password">Password</label>
            <input type="password" placeholder=" Enter a  Password" id="password" name="password">

            <label for="cpassword">Confirm Password</label>
            <input type="password"  placeholder="Confirm password" id="cpassword" name="cpassword"> 
                <button type="submit" class="button">SignUp</button>

     </form>
    </div>
</body>
</html>