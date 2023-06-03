
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>İYTE Müzik Topluluğu</title>
    <link rel="icon" href="images/img2.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a471f68451.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&family=Roboto+Slab&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
                "Helvetica Neue", sans-serif;
            scroll-behavior: smooth;

        }


        body{
            background-image: url(images/background.png);
            width: 100%;
            background-size: contain;
        }
        .container{
            color:#AEACAF;
            background-color: rgb(19, 16, 25, 0.7);
            border-radius:25px;
            padding:20px;
            max-width:500px;
        }
        .navbar{
            height: 14vh;
            width: 100%;
            padding: 0px;
            background-color: rgb(19, 16, 25, 0.7);
            color: #f25858;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: row;
            max-width: 100%;
            margin: auto;
            padding:10px;
        }
        .navbar img{
            width: 120px;
            background-color: rgb(15,15,14,0.5);
            border-radius: 50%;
            transition: 0.3s;
        }
        .navbar img:hover{
            width: 125px;
            
        }
        
        .footer{
            bottom: 0;
            background-color: rgb(38, 32, 45);
            padding: 20px 0;
            width: 100%;
            height: 200px;
            transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -moz-transform: translateY(200px);
            -ms-transform: translateY(200px);
            -o-transform: translateY(200px);
            
        }
        .footer a{
            text-decoration: none;
            list-style: none;
            color: #aaa;
        }
        .footer .social{
            text-align: center;
            padding-bottom: 10px;
            color: #dbdbdb;
        }
        .footer .social a{
            font-size: 20px;
            color: inherit;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            margin: 0px 12px;
            opacity: 0.75;
        }
        .footer .social a:hover{
            opacity: 0.9;
        }
        .footer ul{
            margin-top: 0;
            padding: 0;
            list-style: none;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
            text-align: center;
        }
        .footer ul a{
            color: #dbdbdb;
            text-decoration: none;
            opacity:0.8 ;
        }
        .footer ul li{
            display: inline-block;
            padding: 0 15px;
        }
        .footer ul li a:hover{
            opacity: 1;
        }
        .footer .copyright{
            margin-top: 25px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }
        .footer .imza{
            padding: 10px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }
        ::-webkit-scrollbar{
            width: 0;
        }
        /*scroll bar path*/
        #scrollPath{
            position: fixed;
            top: 0;
            right: 0;
            width: 8px;
            height: 100%;
            background: #3c3c3c;
            z-index: 10;
        }
        /*scroll bar*/
        #progressbar{
            position: fixed;
            top: 0;
            right: 0;
            width: 8px;
            background: linear-gradient(to top, #e6683c, #fff12e);
            animation: animate 5s linear infinite ;
            -webkit-animation: animate 5s linear infinite ;
            z-index: 100;
            opacity: 0.3;

        }

        #progressbar:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, #e6683c, #fff12e);
            filter: blur(10px);
            -webkit-filter: blur(10px);
        }
        #progressbar:after{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, #e6683c, #fff12e);
            filter: blur(30px);
            -webkit-filter: blur(30px);
        }
        @media screen and (max-width: 650px) {

            .header{
                display: none;
            }
            #adminpanel{
                display: none;
            }

        }







    </style>
<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <nav class="navbar">
        <a href="index.php"><img src="images/img2.png" alt=""></a>
    </nav>
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-12">
                <h1>Akor Sihirbazı</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="scales col-12">
                <label for="scale">Bir gam seçiniz.</label>
                <select name="scale" id="scale" onchange="toggleSelect()">
                    <option value="none" selected></option>
                    <option value="minor">Minör</option>
                    <option value="major">Majör</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="chords col-12" id="minor_chords" style="display:none;">
                <label for="minor_chords">Bir minör akor seçiniz.</label>
                <select id="minor" class="m_chords" onchange="toggleSelect()">
                    <option value="0" selected>Am</option>
                    <option value="1">Bbm</option>
                    <option value="2">Bm</option>
                    <option value="3">Cm</option>
                    <option value="4">C#m</option>
                    <option value="5">Dm</option>
                    <option value="6">D#m</option>
                    <option value="7">Em</option>
                    <option value="8">Fm</option>
                    <option value="9">F#m</option>
                    <option value="10">Gm</option>
                    <option value="11">G#m</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="chords col-12" id="major_chords" style="display:none;">
                <label for="major_chords">Bir majör akor seçiniz.</label>
                <select id="major" class="m_chords" onchange="toggleSelect()">
                    <option value="3" selected>C</option>
                    <option value="4">C#</option>
                    <option value="5">D</option>
                    <option value="6">D#</option>
                    <option value="7">E</option>
                    <option value="8">F</option>
                    <option value="9">F#</option>
                    <option value="10">G</option>
                    <option value="11">G#</option>
                    <option value="0">A</option>
                    <option value="1">Bb</option>
                    <option value="2">B</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-dark">
                    <thead>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1. Ses</th>
                        <td id="first"></td>
                      </tr>
                      <tr>
                        <th scope="row">3. Ses</th>
                        <td id="third"></td>
                      </tr>
                      <tr>
                        <th scope="row">5. Ses</th>
                        <td id="fifth"></td>
                      </tr>
                      <tr>
                        <th scope="row">7. Ses</th>
                        <td id="seventh"></td>
                      </tr>
                      <tr>
                        <th scope="row">9. Ses</th>
                        <td id="nineth"></td>
                      </tr>
                      <tr>
                        <th scope="row">11. Ses</th>
                        <td id="eleventh"></td>
                      </tr>

                    </tbody>
                  </table>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p id="table_title_scale"></p>
            </div>
        </div>
        
    </div>
    
    <script>
        function toggleSelect() {
            var selected_scale = document.getElementById("scale");
            var minor_chords = document.getElementById("minor_chords");
            var major_chords = document.getElementById("major_chords");
            var minor = document.getElementById("minor");
            var major = document.getElementById("major");

            var minor_title_text = "Minör aralıklar 3-4-3-4-3 yarım ses aralıklarından oluşur";
            var major_title_text = "Majör aralıklar 4-3-4-3-3 yarım ses aralıklarından oluşur";


            var chordList = ["A (La)", "Bb (Si bemol)", "B (Si)", "C (Do)", "C# (Do diyez)", "D (Re)", "D# (Re diyez)", "E (Mi)", "F (Fa)", "F# (Fa diyez)", "G (Sol)", "G# (Sol diyez)", 
            "A (La)", "Bb (Si bemol)", "B (Si)", "C (Do)", "C# (Do diyez)", "D (Re)", "D# (Re diyez)", "E (Mi)", "F (Fa)", "F# (Fa diyez)", "G (Sol)", "G# (Sol diyez)", 
            "A (La)", "Bb (Si bemol)", "B (Si)", "C (Do)", "C# (Do diyez)", "D (Re)", "D# (Re diyez)", "E (Mi)", "F (Fa)", "F# (Fa diyez)", "G (Sol)", "G# (Sol diyez)"];

            

            if (selected_scale.value == "minor") {
                minor_chords.style.display = "block"; 
                major_chords.style.display = "none";
                table_title_scale.innerHTML = minor_title_text;
                
                first.innerHTML = chordList[minor.value];
                third.innerHTML = chordList[parseInt(minor.value)+3];
                fifth.innerHTML = chordList[parseInt(minor.value)+7];
                seventh.innerHTML = chordList[parseInt(minor.value)+10];
                nineth.innerHTML = chordList[parseInt(minor.value)+14];
                eleventh.innerHTML = chordList[parseInt(minor.value)+17];
                 
            } 
            else if (selected_scale.value == "major") {
                minor_chords.style.display = "none"; 
                major_chords.style.display = "block"; 
                table_title_scale.innerHTML = major_title_text;

                first.innerHTML = chordList[major.value];
                third.innerHTML = chordList[parseInt(major.value)+4];
                fifth.innerHTML = chordList[parseInt(major.value)+7];
                seventh.innerHTML = chordList[parseInt(major.value)+11];
                nineth.innerHTML = chordList[parseInt(major.value)+14];
                eleventh.innerHTML = chordList[parseInt(major.value)+17];
                
            }
            else {
                minor_chords.style.display = "none"; 
                major_chords.style.display = "none"; 
                first.style.display = "none";
            }


        }


        

    </script>
</body>
    
<footer class="footer" id="footer" >
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
</script>

</html>