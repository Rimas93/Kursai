<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
if (isset($_POST['yourName'])) {
    if ($_POST['yourName'] == "Rimas" && $_POST['password'] == "user") {
        $_SESSION['user'] = 1;
        $_SESSION['userName'] = "Rimas";
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
            <a class=\"navbar-brand\" href=\"#\">Namai</a>
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
<div class=\"containeris\">
<!-- FOR 123FLASHCHAT CODE BEGIN -->

    <iframe HEIGHT=\"575\" WIDTH=\"1000\" src=\"http://pokalbiai.eu:35555/htmlchat/123flashchat.html?init_host=flurim.eu&init_host_s=flurim.eu&init_host_h=flurim.eu&init_room=14&init_user=Ambr\" vspale=\"0\" scrolling=\"no\" noresize=\"noresize\" name=\"htmlchat\" marginwidth=\"0\" marginheight=\"0\" framespacing=\"0\" frameborder=\"0\" border=\"0\" />

<!-- FOR 123FLASHCHAT CODE END -->
</div>
";

}
/*
else{
    $_SESSION['admin']=0;
    header("location: index.php");
}
*/
if (isset($_SESSION['user']) && $_SESSION['user']==1){
    echo"<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Namai</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"radija.php\">Radija <span class=\"sr-only\">(current)</span></a></li>
            </ul>
            </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
             <li style='padding-top: 15px;padding-bottom: 15px;'> "; echo $_SESSION['userName'];  echo" </li> <li> <a href=\"index.php?logout=1\">Logout</a></li>


                         </ul>
        </div>
    </div>

</nav>
<div class=\"containeris\">
<!-- FOR 123FLASHCHAT CODE BEGIN -->

    <iframe HEIGHT=\"575\" WIDTH=\"1000\" src=\"http://pokalbiai.eu:35555/htmlchat/123flashchat.html?init_host=flurim.eu&init_host_s=flurim.eu&init_host_h=flurim.eu&init_room=14&init_user=Rimas\" vspale=\"0\" scrolling=\"no\" noresize=\"noresize\" name=\"htmlchat\" marginwidth=\"0\" marginheight=\"0\" framespacing=\"0\" frameborder=\"0\" border=\"0\" />

<!-- FOR 123FLASHCHAT CODE END -->
</div>";

}
/*else{
    $_SESSION['user']=0;
    header("location: index.php");
}
*/
if (isset($_SESSION['user']) && $_SESSION['user']==0 && isset($_SESSION['admin']) && $_SESSION['admin']==0) {
    header("location: index.php");
}
?>


</body>
</html>