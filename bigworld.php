<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Big World Little Carryon | Sarah V. Gomez Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
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
                        <h2>Big World Little Carryon</h2>
<p><a href="http://bigworldlittlecarryon.com/">Big World Little Carryon</a> is a traveling blog of an American couple who wish to travel the world on their spare time with the least amount of luggage they can both bring. The main objective for this logo design was to be able to encompass their objective behind their blog, which is to “travel as often as they can with as little they can manage”.  The presence of a carry-on was an important element that had to be present due to the blog’s iconic name. The first approaches of the logo considered different graphic styles in order to explore the different possibilities of delivering the same message: travel light, travel everywhere. 
</p>

    </article>
    <div id="screenshot">
    <img src="images/projects/bigworld/bigworldlittlecarryon-01.png" alt="Initial logo design - Traveling logos">
    <img src="images/projects/bigworld/bigworldlittlecarryon2-02.png" alt="Final stages of logo design - Traveling logo">
    <img src="images/projects/bigworld/bigworldlittlecarryon_logo.png" alt="Final traveling logo">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/psd-ico.svg" alt="Adobe Photoshop Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">
  </div>
    </section>  

    <section id="branding">
        <div>
          <h2>&lt;typography='CODE BOLD / Ammys Handwriting'&gt;</h2>
          <img src="images/projects/bigworld/bigworldfonts.png" alt="Big World Little Carryon project typography - Code Bold">
        </div>
        <div>
          <h2>&lt;logo&gt;</h2>
          <img src="images/projects/bigworld/bigworldlittlecarryon_logo.png" alt="Big World Little carry-on logo">
        </div>
        <div>
          <h2>&lt;color-palette&gt;</h2>
          <img src="images/projects/bigworld/bigworldcolors-03.png" alt="Big World Little carry-on  project color palette">
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
}
</script>
    </body>
</html>