<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>RssFeed</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="header">   
            <div id="content">
                <div id="wrapper">
                    <div id="feed_div">
                        <?php
                            $rss = simplexml_load_file('http://feeds.feedburner.com/tweakers/mixed');
                                echo '<h2>'. $rss->channel->title . '</h2>';	
                                    foreach ($rss->channel->item as $item) 
                                    {
                                        echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
                                        echo "<p class='desc'>" . $item->description . "</p>";
                                    } 
                        ?>
                    </div>
                </div> 
            </div>   
        </div>      
    </body>
</html>         