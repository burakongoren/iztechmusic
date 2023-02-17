<?php

include "server.php";

session_start();







//connect to database

$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

$table = "admin_db";



if (!$conn) {

    die("Bağlantı hatası: " . mysqli_connect_error());

}

if (isset($_POST['submit'])) {

    $user_id = $_POST['user_id'];

    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM $table WHERE user_id = '$user_id' AND user_password = '$user_password'";

    $result = mysqli_query($conn, $sql);



    if (mysqli_num_rows($result) > 0) {

        $_SESSION['user_id'] = $user_id;

        $_SESSION['login_time'] = time();

        header("Location: memberlist.php");

    } else {

        echo "<script>alert('Kullanıcı adı veya şifre yanlış. Lütfen tekrar deneyin.')</script>";

    }

}

mysqli_close($conn);



?>







<!DOCTYPE html>

<html lang="tr">



    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>İYTE Müzik Topluluğu</title>

        <link rel="icon" href="images/img2.png"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="https://kit.fontawesome.com/a471f68451.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Poppins&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style/giris.css">

    </head>



    <body>

        <div id="progressbar"></div>

        <div id="scrollPath"></div>

        <nav class="navbar">

            <a href="index.php"><img src="images/img2.png" alt=""></a>

        </nav>

        <div class="form">

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="second">

                    <label for="user_id">Kullanıcı Adı:</label>

                    <input type="text" id="user_id" name="user_id" required><br>

                

                    <label for="user_password">Şifre:</label>

                    <input type="password" id="user_password" name="user_password" required><br>



        

                    <input type="submit" id="submit" name="submit" value="Giriş Yap">

                </div>

            </form> 

        </div>

        <footer id="footer">

            <div class="social">

                <a href="https://www.instagram.com/iytemuzik"><i class="fa-brands fa-instagram"></i></a>

                <a href="https://discord.gg/ptPnwnWv46"><i class="fa-brands fa-discord discord"></i></a>

                <a href="https://www.youtube.com/channel/UC0pSz262JIyrNwxceGCTppw"><i class="fa-brands fa-youtube youtube"></i></a>

            </div>

            <ul class="list">

                <li>

                    <a href="index.php">Ana Sayfa</a>

                </li>

            </ul>

            <p class="copyright">

                İzmir Yüksek Teknoloji Enstitüsü @2023

            </p>

            <p class="imza">Powered by <a href="https://github.com/burakongoren">Moody</a></p>

        </footer>

        <script type="text/javascript">

            let progress = document.getElementById("progressbar");

            let totalHeight = document.body.scrollHeight - window.innerHeight;

            window.onscroll = function(){

                let progressHeight = (window.pageYOffset / totalHeight) * 100;

                progress.style.height = progressHeight + "%";

            }



            document.getElementById("phone_input").value = "05";

            document.getElementById("phone_input").addEventListener("input", function() {

                if (this.value.length === 1 || this.value.length === 2) {

                    this.value = "05";

                } else if (this.value.substring(0, 2) !== "05") {

                    this.value = "05" + this.value.substring(2);

                }

            });



        </script>

    </body>

</html>