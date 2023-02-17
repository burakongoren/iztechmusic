<!DOCTYPE html>

<html lang="tr">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>İYTE Müzik Topluluğu</title>

    <link rel="icon" href="images/img2.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/a471f68451.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&family=Roboto+Slab&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/welcome.css">

</head>





<body>

    <div id="progressbar"></div>

    <div id="scrollPath"></div>

    

    <div class="container">

        <div class="row">

            <div class="col-2">

                <h1>ARAMIZA HOŞGELDİN!</h1>

                <p>Oluşturduğumuz çevrimiçi tabloya bilgilerini yazarak diğer üyelerimizle iletişime geçebilir veya seninle iletişime geçmelerini sağlayabilirsin.<br>

                Hayalini kurduğun müzik grubunu kurmak için diğer üyelerimize burada ulaşabilirsin! <br>



                <a href="https://docs.google.com/spreadsheets/d/1FFRJBgj8hNcLhezD9D3t3uikIY7Xaq6sHwTtRPkObK8/edit?usp=sharing" class="btn">Haydi!</ol></a>

            </div>

            <div class="col-2" id="circle-ring">

                <div class="ring">

                    <img src="images/img2.png" alt="" onclick="homepage()">

                    <span class="circle"></span>

                </div>

                

            </div>

        </div>

    </div>

    

    <footer class="footer">

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

        function homepage(){

            window.location.href = 'index.php';

        }

    </script>

</body>



</html>