<?php

include "server.php";



// Veritabanı bağlantısını oluşturma

$conn = mysqli_connect($servername, $username, $password, $dbname);



// Veritabanı karakter setini ayarla

mysqli_set_charset($conn, "utf8mb4");



if (isset($_POST['submit'])) {



    // Form verilerini alma ve mysqli_real_escape_string() ile karakterleri güvenli hale getirme

    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $grade = mysqli_real_escape_string($conn, $_POST['grade']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $phone_input = mysqli_real_escape_string($conn, $_POST['phone_input']);



    // Verileri veritabanına ekleme sorgusu (member tablosu)

    $sql1 = "INSERT INTO member (student_id, department, grade, name, phone_input) VALUES ('$student_id', '$department', '$grade', '$name', '$phone_input')";



    // Verileri veritabanına ekleme sorgusu (backup tablosu)

    $sql2 = "INSERT INTO backup (student_id, department, grade, name, phone_input) VALUES ('$student_id', '$department', '$grade', '$name', '$phone_input')";



    if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {

        header("Location: welcome.php");

    } else {

        echo "<script> alert('Yanlış veya eksik bilgi girdiniz. Lütfen bilgilerinizi tekrar girin.'); </script>";

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

        <link rel="stylesheet" href="style/form.css">

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

                    <label for="student_id">Öğrenci Numaranız:</label>

                    <input type="text" id="student_id" name="student_id" maxlength="9" minlength="9" required><br>

                

                    <label for="department">Bölümünüz:</label>

                    <select id="department" name="department" required><br>

                        <option value="Bilgisayar Mühendisliği" selected>Bilgisayar Mühendisliği</option>

                        <option value="Biyomühendislik" >Biyomühendislik</option>

                        <option value="Çevre Mühendisliği" >Çevre Mühendisliği</option>

                        <option value="Elektronik Haberleşme Mühendisliği" >Elektronik Haberleşme Mühendisliği</option>

                        <option value="Endüstriyel Tasarım" >Endüstriyel Tasarım</option>

                        <option value="Enerji Sistemleri Mühendisliği">Enerji Sistemleri Mühendisliği</option>

                        <option value="Fizik" >Fizik</option>

                        <option value="Fotonik" >Fotonik</option>

                        <option value="Gıda Mühendisliği">Gıda Mühendisliği</option>

                        <option value="İnşaat Mühendisliği" >İnşaat Mühendisliği</option>

                        <option value="Kimya" >Kimya</option>

                        <option value="Kimya Mühendisliği" >Kimya Mühendisliği</option>

                        <option value="Makina Mühendisliği" >Makina Mühendisliği</option>

                        <option value="Malzeme Bilimi ve Mühendisliği" >Malzeme Bilimi ve Mühendisliği</option>

                        <option value="Matematik" >Matematik</option>

                        <option value="Mimarlık" >Mimarlık</option>

                        <option value="Moleküler Biyoloji ve Genetik" >Moleküler Biyoloji ve Genetik</option>

                        <option value="Şehir ve Bölge Planlama" >Şehir ve Bölge Planlama</option>

                        

                    </select><br>



                    <label for="grade">Sınıfınız:</label>

                    <select id="grade" name="grade" required><br>

                        <option value="Hazırlık" selected>Hazırlık</option>

                        <option value="1.Sınıf">1. Sınıf</option>

                        <option value="2.Sınıf">2. Sınıf</option>

                        <option value="3.Sınıf">3. Sınıf</option>

                        <option value="4.Sınıf">4. Sınıf</option>

                        <option value="Yüksek Lisans">Yüksek Lisans</option>

                        <option value="Doktora">Doktora</option>

                    </select><br>

                    <label for="name">Adınız ve Soyadınız:</label>

                    <input type="text" id="name" name="name" required><br>

                    

                    <label for="phone_input">Telefon Numaranız:</label>

                    <input type="tel" id="phone_input" name="phone_input" maxlength="11" minlength="11" required><br>

                    <input type="submit" id="submit" name="submit" value="Kayıt Ol">

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