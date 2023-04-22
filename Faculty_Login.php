<?php

if(isset($_POST['log'])){
    $query = "select * from admin where username ='$_POST[username]' AND password = '$_POST[password]'";
    $chose1 = filter_input(INPUT_POST, 'logas', FILTER_SANITIZE_STRING);
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run) AND $chose1){
        while($row =mysqli_fetch_assoc($query_run))
        {
            echo"<script>
            alert('Login Succesful');
            window.location.href ='Admin.php';
            </script>;";
        }
    }
    if(mysqli_num_rows($query_run) AND !($chose1)){
        while($row =mysqli_fetch_assoc($query_run))
        {
            echo"<script> alert('faculty Portal will be open soon');</script>";
        }
    }
    else{
        echo"<script> alert('Enter correct value');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="Gallery/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Gallery/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Gallery/favicon_io/favicon-16x16.png">
    <title>Login</title>
    <link rel="stylesheet" href="stylefor_Login.css">
</head>
<body>
    <div class="title2">
        <div class="title1">
             <div class="logo">
             <img style="width: 100px;" src="MASlogo.jpg" alt="">
        </div>
          <div class="school">
            <h1>Mount Assisi School</h1>
            <h2>Poreyahat, Godda, Jharkhand</h2>
          </div>
        </div>
    </div>
    <style>
        .title1{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            
        }
    </style>
    <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 50; margin-left: 20%;margin-top: 5%;">Faculty Log In</h1>
    <div class="biggerContainer">
        <div class="container">
            <!-- form for login  -->
        <form action="" method="post">
            <p><input type="text" name="username" id ="username" placeholder="Username or phone number"></p>
            <p><input type="password" name="password" id="password" placeholder="Password"></p>
            <fieldset>
                <legend>Login As</legend>
                    <select name="logas" id="logas">
                        <option value="">--Select--</option>
                        <option value="adm">Admin</option>
                        <option value="">faculty</option>
                    </select>
            </fieldset>
            <br>
            <p><button type="submit" name="log">LogIn</button></p>
        </form>
        <!-- end of login  -->
        </div>
    </div>
</body>
</html>
