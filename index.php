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
            <div id="content">
                <div id="title">
                    <div id="welkom">
                        <?php
                            echo "Welkom op de website voor de PHP eindopdracht van Tim Groenewold";
                        ?>
                    </div>
                </div>    
            </div>
    </body>
</html>
