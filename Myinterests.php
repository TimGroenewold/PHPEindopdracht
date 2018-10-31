<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Myinterests</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body <?php 
            include_once 'Weather.php';

            $weather = explode(" ", getWeatherStringEmmen());
            $color=getColor($weather[2]);

            function getColor($a){  
                
            
                if($a>=1 && $a<= 7) {
                    echo '<div style="background-image:url(Foto/Storm.jpg);">Content</div>';
            }   elseif ($a >= 8 && $a <= 14) {
                    echo '<div style="background-image:url(Foto/f-rain.jpg);">Content</div>';
            }   elseif ($a >= 15 && $a <= 21) {
                    echo '<div style="background-image:url(Foto/snow.jpg);">Content</div>';
            }   elseif ($a >= 22 && $a <= 28) {
                       echo '<div style="background-image:url(Foto/cloudy.png);">Content</div>';
            }   elseif ($a >= 29 && $a <= 35) {
                    echo '<div style="background-image:url(Foto/sunny.jpg);">Content</div>';
            }   elseif ($a >= 36 && $a <= 42) {
                       echo '<div style="background-image:url(Foto/s-rain.jpg);">Content</div>';
            }
            
            }
            ?>>
        <div id="header"> 
            <div class="navblock">
		<ul>
			<li><a href="index.php">Home</a></li>
                        <li><a href="MyWeather.php">Weather</a></li>
                        <li><a href="Rssfeed.php">Rss Feed</a></li>
                        <li><a href="Myinterests.php">My Interests</a></li>
                        <li><a href="Infoform.php">Info Form</a></li>
		</ul>
            </div>
        </div>  
            <div id="content">
                <?php
                
                ?>
            </div>
    </body>
</html>         