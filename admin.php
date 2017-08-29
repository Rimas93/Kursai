<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
session_start();
if (isset($_POST['yourName'])) {
    if ($_POST['yourName'] == "Ambr" && $_POST['password'] == "admin") {
        $_SESSION['admin'] = 1;
        $_SESSION['adminName'] = "Ambr";
    }
}
if (isset($_SESSION['admin']) && $_SESSION['admin']==1){
    echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"home.php\">Namai</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"radija.php\">Radija <span class=\"sr-only\">(current)</span></a></li>
                <li class=\"active\"><a href=\"admin.php\">Admin <span class=\"sr-only\">(current)</span></a></li>
            </ul>
            </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li style='padding-top: 15px;padding-bottom: 15px;'> "; echo $_SESSION['adminName'];  echo" </li> <li> <a href=\"index.php?logout=1\">Logout</a></li>


                         </ul>
        </div>
    </div>

</nav>

";

}
else{
    $_SESSION['admin']=0;
    header("location: index.php");
}

/*echo "<h1 style='color: yellow'>Svetaines vartotoju duomenys!!!!!!!!!!!!!</h1>";
echo "<h2 style='color: green'>Svetaines Adminas</h2><br>";
echo "<h3 style='color: red'>Login: Ambr, Password: admin</h3><br>";
echo "<h2 style='color: green'>Paprastas svetaines vartotojas</h2><br>";
echo "<h3 style='color: red'>Login: Rimas, Password: user</h3><br>";
?>*/
?>
<div class="conterner">
<div class="well col-xs-6 col-xs-offset-3">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Upload Files</legend>
            <!--     Failas       -->
            <div class="form-group">
                <label for="inputEmail" class="col-xs-3 control-label">Failas</label>
                <div class="col-xs-3">
                    <input type="hidden" name="upload" value="true">
                    <input type="file" class="form-control" name="file">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div>
<div class="clearfix"></div>
<?php

if (isset($_POST['upload']) && $_POST['upload']=='true'){
    print_r($_FILES);
    define('PATH','C:\xampp\htdocs\web\file');
    echo "<h3>Forma uzpildyta</h3>";
    $file=$_FILES['file']['tmp_name'];  //Laikinas vardas
    $newName=$_FILES['file']['name'].time(); //tikras vardas
    $fileInfo=pathinfo($newName); //failo info
    $ext=$fileInfo['extension'];
    echo $ext;
    if ($ext!='jpg' ||$ext!='png'){
        echo "<h3>Wrong file</h3>";
    }
    else{
        move_uploaded_file($file, PATH.'\\'.$newName);
        echo "<h3>Pavyko!!!</h3>";
        echo
    }
}

?>
<img src='' alt=''>
</body>
</html>