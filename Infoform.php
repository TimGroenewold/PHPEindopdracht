
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Infoform</title>
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
                <form method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
                <p><label>Your Name<strong>*</strong><br>
                <input type="text" size="48" name="name" value="<?PHP if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>"></label></p>
                <p><label>Email Address<strong>*</strong><br>
                <input type="email" size="48" name="email" value="<?PHP if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"></label></p>
                <p><label>Subject<br>
                <input type="text" size="48" name="subject" value="<?PHP if(isset($_POST['subject'])) echo htmlspecialchars($_POST['subject']); ?>"></label></p>
                <p><label>Enquiry<strong>*</strong><br>
                <textarea name="message" cols="48" rows="8"><?PHP if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?></textarea></label></p>
                <p><input type="submit" name="sendfeedback" value="Send Message"></p>
                </form>           
                    
        <?PHP
            if($_POST && isset($_POST['sendfeedback'], $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {

              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $message = $_POST['message'];

              if(!$name) {
                $errorMsg = "Please enter your Name";
              } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
                $errorMsg = "Please enter a valid Email address";
              } elseif(!$message) {
                $errorMsg = "Please enter your comment in the Message box";
              } else {
                echo "$name<br>";
                echo "$email<br>";
                echo "$subject<br>";
                echo "$message<br>";
              }

            }
        ?>
        </div>    
    </body>
</html> 
      
              
           