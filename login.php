<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap.css">
        <script type="text/javascript" src="bootstrap.js"></script>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm kapsayici navbar-dark">
            <div class="container-fluid">
              <ul class="navbar-nav mx-auto">
                <a class="navbar-brand h1">Login</a>
              </ul>
            </div>
        </nav>

        <div class="bosluk">&nbsp;</div>
   
        <div class="container" id="b">

            <div id="c">

                <?php
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $validUsername = "g221210089@sakarya.edu.tr";
                    $validPassword = "g221210089";

                    $studentNumber = substr($username, 0, strpos($username, "@")); 
                    $password = $_POST["password"];

                    if ($password === $studentNumber) 
                    {
                        echo "Hoşgeldiniz: " . $studentNumber; 
                    } 
                    else 
                    {
                        header("Location: login.html"); 
                    }
                ?>

            </div>

            <div class="bosluk4">&nbsp;</div>

            <br>

            <a href="index.html">Ana Sayfaya Gitmek İçin Tıklayınız></a>
        </div>
  
        <div class="bosluk3">&nbsp;</div>

        <div class="footer">
            <div class="container" style="text-align: center;">Furkan Ay &copy; 2023</div>
        </div>
     </body>
</html>