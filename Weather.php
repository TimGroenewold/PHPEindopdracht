<?php
    function getWeatherStringEmmen()
    {   
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="Emmen, NL")';
        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=xml";
		

		
        $reader = new XMLReader();
        $tempLocation = 0;
        $tempText = '';
        $tempCode = '';
        $location = '';

        if (!$reader->open($yql_query_url))
        {
            print "can't read link";
        }

        while ($reader->read())
        {
            if ($reader->nodeType == XMLReader::ELEMENT)
            {
                $name = $reader->name;

                if ($name == 'yweather:location')
                {
                    $location = $reader->getAttribute('city');
                }

                if ($name == 'yweather:condition')
                {
                    $tempText = $reader->getAttribute('text');
                    $tempCode = $reader->getAttribute('code');
                    $tempLocation = $reader->getAttribute('temp');
                }
            }

            if (in_array($reader->nodeType, array(XMLReader::TEXT, XMLReader::CDATA, XMLReader::WHITESPACE, XMLReader::SIGNIFICANT_WHITESPACE)) && $name != '')
            {
                $value = $reader->value;
            }
        }
        return $location . " " . $tempLocation . " " . $tempCode . " " . $tempText;
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Weather</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
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
        <?php
            echo getWeatherStringEmmen();		
			
			$getWeather= getWeatherStringEmmen();
			
			$weather = explode (" ", $getWeather);
			$color=getColor($weather[2]);
                        function getColor($a)
                        {
                            if($a>=1 && $a<=7) return "green";

                            if($a>=8 && $a<=14) return "orange";

                            if($a>=15 && $a<=21) return "blue";

                            if($a>=22 && $a<=28) return "yellow";

                            if($a>=29 && $a<=35) return "red";

                            if($a>=36 && $a<=42) return "purple";

                            return "black";
                        }
        ?>      
                <span style='color:<?=$color?>'>Text</span>
        </div>
    </body>
</html>