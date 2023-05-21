<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>İletişim</title>
        <link rel="stylesheet" href="bootstrap.css">
        <script type="text/javascript" src="bootstrap.js"></script>
        <link rel="stylesheet" href="iletisim.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm kapsayici navbar-dark">
            <div class="container-fluid">
              <ul class="navbar-nav mx-auto">
                <a class="navbar-brand h1">İletişim</a>
              </ul>
            </div>
        </nav>

        <div class="bosluk">&nbsp;</div>
   
        <div class="container" id="b">
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $email = $_POST["email"];
                $gender = $_POST["gender"];
                $message = $_POST["message"];
                $country = $_POST["country"];
      
                echo "<p>Adınız: $name</p>";
                echo "<p>Soyadınız: $surname</p>";
                echo "<p>E-posta Adresiniz: $email</p>";
                echo "<p>Cinsiyetiniz: $gender</p>";
                echo "<p>Mesajınız: $message</p>";
                echo "<p>Ülkeniz: $country</p>";
            }
        ?>

        <br>
            <a href="index.html">Ana Sayfaya Dönmek İçin Tıklayınız</a>
        </div>
  
        <div class="bosluk3">&nbsp;</div>

        <div class="footer">
            <div class="container" style="text-align: center;">Furkan Ay &copy; 2023</div>
        </div>

    </body>
</html>

