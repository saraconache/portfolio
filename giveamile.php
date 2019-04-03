<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Give A Mile | Sarah V. Gomez Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/speechbubbles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       </head>
    <body>
 <header>
     <h1 id="webHeading" class="mainHeading"><a href="index.php"><span>sarahvgomez</span></a>.<a href="works.php">portfolio</a>.web</h1>
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
        <main id="project">
            <section id="preview">
                <article id="fixed" class="fixedCSS">  
                        <h2>Give A Mile</h2>
<p><a href="https://giveamile.org/">Give A Mile</a> is a nonprofit organization that uses a crowdfunding model to provide flights to applicants, joining them with their critically or palliatively ill loved ones.</p>
<p>They hold an annual Mother’s and Father’s Day event, for which new mail <a href="https://mailchimp.com/">Mailchimp</a> templates were provided for their different types of newsletters. Most of these newsletters differ in message and audience, so each type required a slightly different design.</p> 
<p>Newsletter development required adapting to email HTML&amp;CSS requirements, such as inline styling and HTML table structures.</p>
    </p>
    </article>
    <div id="screenshot">
        <div id="bubbleOne_p1">
        Dedicated campaign design header for mail communication.
        </div>
        <div id="bubbleTwo_p1">
        Testimonial video compilation.
        </div>
        <img src="images/projects/giveamile/donate_miles.png" alt="Give A Mile Newsletter design mockup">
        <img style="margin-top:40px;" src="images/projects/giveamile/mailchimp_campaign.png" alt="Give A Mile Newsletter design mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">

  </div>
    </section>  
   
            </main>
<script async defer src="js/main.js"></script> 
<script>
  var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
if(viewportWidth < 700){
  fixed.classList.remove('fixedCSS');
}
/* Project Preview scrolling*/
window.onscroll = function (event) {
  var headerImgOffset = screenshot.getBoundingClientRect();
var imgTop = headerImgOffset.top;
var imgBottom = headerImgOffset.bottom;
var imgHeight = screenshot.offsetHeight;
var viewportHeight = document.documentElement.clientHeight;

var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
if (viewportWidth > 801) {
  if (imgBottom < viewportHeight) { 
          fixed.classList.remove('fixedCSS');
    }else{
          fixed.classList.add('fixedCSS');
  }
}else{
  fixed.classList.remove('fixedCSS');
}

/* Speech bubbles! */
var ypos = window.pageYOffset;
  if(ypos > 5){
  bubbleOne_p1.style.display = "inline-block";
  }else{
    bubbleOne_p1.style.display = "none";
  }
  if(ypos > 357){
    bubbleTwo_p1.style.display = "inline-block";
  }else{
    bubbleTwo_p1.style.display = "none";
  }
}
</script>
    </body>
</html>