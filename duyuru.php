
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

        <link rel="stylesheet" href="style/duyuru.css">

    

    </head>



    <body>

        <div id="progressbar"></div>

        <div id="scrollPath"></div>

        <nav class="navbar">

            <a href="index.php"><img src="images/img2.png" alt=""></a>

        </nav>

        <div class="container">

            <div class="form">

                <ul>

                    <li>İYTE Müzik Topluluğu’na üye olmak için okulumuz öğrencisi olmanız zorunludur!</li>

                    <li>Topluluğumuzun stüdyo ihtiyaçları sebebiyle üye kayıt ücreti 20₺ olarak belirlenmiştir.</li> 

                    <li>Aşağıda belirttiğimiz IBAN’a 20₺ gönderebilir veya topluluk yetkililerimize nakit ödeme yapabilirsiniz.</li>

                    <li>Ödemenizin dekontunu aşağıya bırakmış olduğumuz e-posta adresine göndermeniz gerekmektedir!</li>

                </ul>

                <div class="notification">

                    <p>Üyeliğinizin onaylanması için e-posta adresimize dekont gönderiminiz zorunludur!</p>

                </div>

                <div class="info">

                    <br>

                    <h4>ALICI ADI SOYADI</h4>

                    <p>Nisanur AYHAN</p>

                    <h4>IBAN</h4>

                    <p>TR09 0001 0001 3889 7424 3250 05</p>

                    <h4>E-POSTA</h4>

                    <p>muzik.iyte@gmail.com</p><br>



                    <form action="form.php" >

                        <input id="box" type="checkbox" required>

                        <label for="box">Okudum, kabul ediyorum.</label><br>

                        <button id="submit" name="submit" onclick="redirect()">Devam Et</button>

                    </form>

                </div>

                

            </div> 

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



            function redirect() {

                if (document.querySelector('#checkbox').checked) {

                    window.location.href = 'form.php';

                }

            }

        </script>

    </body>

</html>