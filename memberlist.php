<?php
include "server.php";
$table = "admin_db";

session_start();

if (!isset($_SESSION['user_id']) || (time() - $_SESSION['login_time']) > 1800) {
    header("Location: giris.php");
}
if (isset($_POST['submit'])) {
    session_destroy();
    header("Location: giris.php");
}


//connect to database
$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
mysqli_set_charset($conn, 'utf8');

//execute sql query
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}


?>


<!--HTML Page -->


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
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style/memberlist.css">

        <script type="text/javascript">
            let progress = document.getElementById("progressbar");
            let totalHeight = document.body.scrollHeight - window.innerHeight;
            window.onscroll = function(){
                let progressHeight = (window.pageYOffset / totalHeight) * 100;
                progress.style.height = progressHeight + "%";
            }

            

            function selectAll(source) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = source.checked;
                }
            }

        </script>
    
    </head>

    <body>
        <div id="progressbar"></div>
        <div id="scrollPath"></div>
        <nav class="navbar">
            <a href="index.php"><img src="images/img2.png" alt=""></a>
            <a>    
                <?php
                $query = "SELECT COUNT(*) AS row_count FROM member";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $row_count = $row['row_count'];
                ?>
            </a>  
            <form class="buttonside" action="" method="POST" >
                <input type="submit" id="submit" name="submit" value="Güvenli Çıkış">
            </form> 
        </nav>
        
        <div class="container">
            <a href="" id="toplam">
                <?php
                // Toplam satır sayısı anlık üye sayısına eşittir
                echo "Toplam Üye Sayısı: " . $row_count;
                ?>
            </a>
            
            <table class='table table-dark table-striped'>
                
                   
                <tr>
                    <th><input type="checkbox" id="allcheckboxes" onclick="selectAll(this)">Hepsini Seç</th>
                    <th>Öğrenci Numarası</th>
                    <th>Bölümü</th>
                    <th>Sınıfı</th>
                    <th>Adı ve Soyadı</th>
                    <th>Telefon Numarası</th>
                </tr>
                <?php
                class Product {
                    private $conn;
                    private $student_id;
                    private $department;
                    private $grade;
                    private $name;
                    private $phone_input;

                    public function __construct($conn) {
                        $this->conn = $conn;
                        mysqli_set_charset($this->conn, 'utf8');
                    }

                    public function getData() {
                        $sql = "SELECT student_id, department, grade, name, phone_input FROM member";
                        $result = mysqli_query($this->conn, $sql);
                        $output = '<form action="delete.php" method="post">';
                        if (mysqli_num_rows($result) > 0) {    
                            while ($row = mysqli_fetch_assoc($result)) {
                                $this->student_id = $row['student_id'];
                                $this->department = $row['department'];
                                $this->grade = $row['grade'];
                                $this->name = $row['name'];
                                $this->phone_input = $row['phone_input'];



                                $output .= '<div class="rows">'.
                                                '<tr>'.
                                                '<td><input type="checkbox" class="delete-checkbox" name="selected[]" value="'.$this->student_id.'" /></td>'.
                                                '<td>'.$this->student_id.
                                                '</td><td>'.$this->department.
                                                '</td><td>'.$this->grade.
                                                '</td><td>'.$this->name.
                                                '</td><td>'.$this->phone_input.'</td>'.
                                                '</tr>'.
                                            '</div>';
                            }
                        }
                        else{
                            echo "<tr><td colspan='4'>Üye bulunamadı.</td></tr>";
                        }

                        $output .= '<input type="submit" id="delete-product-btn" name="delete" value="Üye Sil" /></form>';

                        return $output;
                    }

                }

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $product = new Product($conn);
                echo $product->getData();
                mysqli_close($conn);
                ?>
            </table>
            <form class="buttons" action="">
                <button type='submit' name='indir' id='indir' formaction='indir.php'>İndir(Excel'i Türkçe kullananlar için)</button>
                <button type='submit' name='download' id='download' formaction='download.php'>Download(For those who use Excel in English)</button>
            </form>
        </div>
        <footer id="footer">
            <div class="social">
                <a href="https://www.instagram.com/iytemuzik"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://discord.gg/ptPnwnWv46"><i class="fa-brands fa-discord discord"></i></a>
                <a href="https://www.youtube.com/channel/UC0pSz262JIyrNwxceGCTppw"><i class="fa-brands fa-youtube youtube"></i></a>
            </div>
            <ul class="homebutton">
                <li>
                    <a href="index.php">Ana Sayfa</a>
                </li>
            </ul>
            <p class="copyright">
                İzmir Yüksek Teknoloji Enstitüsü @2023
            </p>
            <p class="imza">Powered by <a href="https://github.com/burakongoren">Moody</a></p>
        </footer>
    </body>
</html>