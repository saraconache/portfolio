<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Jet Hydrovac | Sarah V. Gomez Portfolio</title>
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
                        <h2>Jet Hydrovac</h2>
<p><a href="http://www.jethydrovac.com/">Jet Hydrovac </a>is a hydro-excavation company in Calgary that needed to redesign and restructure their current website. The challenge of this design was to work with the small amount of content and resources that was already on their existing website and arrange it in a palatable arrangement in which the user could navigate through their content more easily. The main concept for this design is easy access, understanding the company’s general idea in order to increase client conversion rate. The use of a lead form both in the header and footer seeks to help this specific goal.
 This project was done while working for Matterhorn Solutions, in collaboration with <a href="https://roxann.me/">Roxann Corpuz</a>, who was in charge of the development. "</p>

    </article>
    <div id="screenshot">
        <div id="bubbleOne_p1">
        Header Call To Action form strategy for client conversions.
        </div>
        <div id="bubbleTwo_p1">
        Image Gallery integration.
        </div>
        <div id="bubbleThree_p1">
        Expandable section with modular divs to showcase all different services.
        </div>
    <img src="images/projects/jethydrovac/jethydrovac_mockup.jpg" alt="Jet Hydrovac website design mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/psd-ico.svg" alt="Adobe Photoshop Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">
    <img src="images/in-ico.svg" alt="Invision Icon">
  </div>
    </section>  
   
            </main>
<script async defer src="js/main.js"></script> 
<script>
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
  if(ypos > 957){
    bubbleThree_p1.style.display = "inline-block";
  }else{
    bubbleThree_p1.style.display = "none";
  }
}
</script>
    </body>
</html>