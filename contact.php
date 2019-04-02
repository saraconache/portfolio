<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact | Sarah V. Gomez Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
 <header>
     <h1 id="contactHeading" class="mainHeading"><a href="index.php"><span>sarahvgomez</span></a>.<a href="contact.php">contact</a></h1>
            <nav id="nav">
                    <button class="nav-icon" id="nav-icon"><span></span></button>
                    <ul>
                      <li><a href="index.php"><i class="material-icons">home</i></a></li>
                      <li><a href="about.php"><i class="material-icons">person</i></a></li>
                      <li><a href="works.php"><i class="material-icons">work</i></a></li>
                      <li><a href="contact.php"><i class="material-icons">email</i></a></li>
                    </ul>
            </nav>
</header>
        <main id="contact">  
        <article>
            <h2>Find me at:</h2>
            <p>info [at] sarahvgomez [dot] com<br>
                    <a href="http://codepen.io/saraconache">codepen.io/saraconache</a><br>
                    <a href="http://github.com/saraconache">github.com/saraconache</a></p>
        </article>
            <form action="handle.php" method="POST">
                <div class="personalInfo">
                        <div class="group">
                        <input type="text" id="name" required="required" name="name">
                        <label for="name">Name</label>
                        </div>

                        <div class="group">
                        <input type="text" id="email" required="required" name="email">
                        <label for="email">Email</label>
                        </div>
                </div>
                        <div class="group">
                        <input type="text" id="subject" name="subject" required>
                        <label for="subject">Subject</label>
                        </div>

                        <div class="groupTextarea">
                        <textarea name="message" id="message" required></textarea>
                        <label for="subject">Message</label>
                        </div>
                        <button id="contactButton" name="send">Send Message</button>
            </form>

      </main>
<script async defer src="js/main.js"></script> 

</body>
</html>