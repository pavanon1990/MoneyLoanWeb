<?php
    include 'functions/config.php'; 
    if(isset($_POST['loginsbm'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pwd = md5($password);
        
        $queryUser = "select * from tbl_users where username = '".$username."' and password = '".$pwd."'";

        $result = $con->query($queryUser);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $_SESSION["id"] = $row["id"];
              $_SESSION["username"] = $row["username"];
            }
            echo "<script>window.location.href='index.php'</script>";
        } 
        else{

        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css"rel="stylesheet"/>
<link href="css/login.css"rel="stylesheet"/>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <h1 class="text-center login-title">Sign in</h1>
            <div class="account-wall">

                <form method="post" class="form-signin">
                <input style="margin-bottom:20px;" type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input style="margin-bottom:20px;" type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" name="loginsbm" type="submit">
                    Sign in
                </button>
               
                
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>