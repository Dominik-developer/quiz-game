<!DOCTYPE html>
<html  lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>Najquiz.com</title>
    <meta name="description" content="Najepszy quiz w internecie"/>
    <meta name="keywords" content="Quiz" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dominik Szczepański" />
    <link rel="stylesheet"href="Quiz1.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="stylesheet"href="quiz_css/fontello.css" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <div class="hedder">
            <div class="logo">
              <!--  <img src=.'quiz.jpg' style="float: left;"/> -->
                <span style="color: #c34f4f"> najquiz</span>.com
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="nav">
            <ol>
                <li><a href="witam.php">Strona główna</a></li>
                <li><a href="Quiz1.php">Graj</a></li>
                <li><a href="#">Kontakt</a>
                    <ul>
                        <li><a href="#">Mail</a></li>
                       
                        <li><a href="#">Telefon</a></li>
                    </ul>
                </li>
               
                <li><a href="#">Akty prawne</a>
                    <ul>
                        <li><a href="#">Regulamin <br>serwisu</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">O nas</a>
                    <ul>
                        <li><a href="autor.php">Autor</a></li>
                    </ul>                              
                </li>
                


            </ol>


        </div>
    </div>  

    
        <?php

            for($i=1; $i<=10; $i++)
            {
            if(isset($_POST["$i"])== false)
            $_POST["$i"]=0;
            $user[$i] = $_POST["$i"];
            }

            $kol = file('kolejnosc', FILE_IGNORE_NEW_LINES );
            $poprawne = file('poprawne.txt', FILE_IGNORE_NEW_LINES);

            echo "<br>";
            $punkty=0;
            for($i=1; $i<=10; $i++)
            {
                if($user[$i]==$poprawne[$kol[$i-1]])
                $punkty++;
            }
        ?>

    <div class="content">

        <div class="pkt">
            <?php
            echo "Twój wynik to:"."<br>".$punkty."/10"
            ?>
        </div>  <br><br>

        <div class="socials">
            <div class="socialdivs">  
                <div class="fb">
                    <i class="icon-facebook-1"></i>
                </div> 
                <div class="yt">
                    <i class="icon-youtube"></i>
                </div> 
                <div class="tw">
                    <i class="icon-twitter"></i>
                </div> 
                <div class="ig">
                    <i class="icon-instagram-filled"></i>
                </div> 
                <div style="clear:both"></div>
            </div>
        </div>
        <div class="footer">
             Dominik Szczepański - najquiz.com &copy; 2023 
    </div>

	<script src="jquery-1.11.3.min.js"></script>
	
    <script>

        $(document).ready(function() {
        var NavY = $('.nav').offset().top;
        
        var stickyNav = function(){
        var ScrollY = $(window).scrollTop();
            
        if (ScrollY > NavY) { 
            $('.nav').addClass('sticky');
        } else {
            $('.nav').removeClass('sticky'); 
        }
        };
        
        stickyNav();
        
        $(window).scroll(function() {
            stickyNav();
        });
        });
	
    </script>

</body>
</html>


