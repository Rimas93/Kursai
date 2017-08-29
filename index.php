<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
session_start();
if (isset($_GET['logout'])){
    if ($_GET['logout']=1){
        $_SESSION['admin']=0;
        echo $_SESSION['admin'];
    }
}
if (isset($_GET['logout'])){
    if ($_GET['logout']=1){
        $_SESSION['user']=0;
        echo $_SESSION['user'];
    }
}
?>
<!--form-->
<div class="container">
<div class="well col-xs-6 col-xs-offset-3">
    <form class="form-horizontal" action="home.php" method="post">
        <fieldset>
            <legend>Sveiki atvyke. Norint matyti turini prasome prisijungti!!!!</legend>
            <!--     VARDAS       -->
            <div class="form-group">
                <label for="inputEmail" class="col-xs-3 control-label">Login</label>
                    <div class="col-xs-3">
                    <input type="text" class="form-control"  placeholder="Vardas" name="yourName">
                    </div>
            </div>
            <!--     PASSWORD       -->
            <div class="form-group">
                <label for="inputEmail" class="col-xs-3 control-label">Password</label>
                <div class="col-xs-3">
                    <input type="password" class="form-control"  placeholder="Password" name="password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div>
</body>
</html>