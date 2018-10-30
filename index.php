<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Homepage</title>
    </head>
    <body>
         <div id="header"> 
            <div class="navblock">
		<ul>
			<li><a href="index.php">Home</a></li>
                        <li><a href="Weather.php">Weather</a></li>
                        <li><a href="Rssfeed.php">Rss Feed</a></li>
                        <li><a href="Myinterests.php">My Interests</a></li>
                        <li><a href="Infoform.php">Info Form</a></li>
		</ul>
            </div>
        </div>  
            <div id="welkom">
			<div id="welkomContent">
				<div id="intro">
                                    <?php
					echo "Welkom bij de PHP eindopdracht van <br> Tim Groenewold";                          
                                    ?>
				</div>
				<div id="introText">
					<?php
					echo "Op deze website kunt u vinden wat het weer is in Drenthe, het nieuwste nieuws van Tweakers, mijn intresses en een leuke formulier.";
					?>
				</div>
                </div>    
            </div>
    </body>
</html>
