<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; DKKI | Sarah V. Gomez Portfolio</title>
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
                        <h2>DKKI</h2>
<p><a href="http://www.dkki-co.com/">DKKI</a> is a manufacturing company of electrical thermocouples and accessories located in Iran.  The challenge of this project was to redesign their new website to modern web standards, in order to help the company’s mission of expanding business across Europe, while keeping the company’s essence through its brand colors. The project started with an analysis of the website’s current information and page count. The original website had a dropdown navigation of more than 5 levels in depth. This required some UX analysis before starting to work on the new design’s wireframe. The main concept in this new design is to restructure the website’s navigation in order to simplify the user’s search query once inside the site. </p>
    </article>
    <div id="screenshot">
        <div id="bubbleOne_p1">
        100vh Above the fold design showcasing foundy industry.
        </div>
        <div id="bubbleTwo_p1">
        Redistribution of company partnership to a second plane. Instead of having these two links as the first thing you see when you enter the website.
        </div>
    <img src="images/projects/dkki/dkki_mockup.jpg" alt="DKKI Website design mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/psd-ico.svg" alt="Adobe Photoshop Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">
    <img src="images/wp-ico.svg" alt="Wordpress Icon">
    <img src="images/in-ico.svg" alt="Invision Icon">
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/sass-ico.svg" alt="SaSS Icon">
  </div>
    </section>  
    <section id="dissection">
   <div id="smallPara">
    <h2>Technical Challenges</h2>
    <p>After the wireframe and mock-up was presented, the website was developed using HTML5 and CSS3 technology, and then adapted as a PHP powered theme onto the popular content management platform, Wordpress.</p>

   </div>
   <div id="codepen">
      <p data-height="350" data-theme-id="dark" data-slug-hash="QrGQjE" data-default-tab="css,result" data-user="saraconache" data-pen-title="DKKI Text format" class="codepen">See the Pen <a href="https://codepen.io/saraconache/pen/QrGQjE/">DKKI Text format</a> by saraconache (<a href="https://codepen.io/saraconache">@saraconache</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
   </div>
   <div>
    <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
    <p>Markup follows a single, landing page design of different sections.</p>
   </div>

    <div>
            <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
        <p>In order to succesfully adapt to Wordpress, I imported a dummy content pluging that generated random content to style efficiently.</p>

    </div>
  
   <div>
        <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
        <p>This website used Javascript to generate smooth scrolling effect from the top of the navigation.</p>
   </div>
 
            </section>
            <section id="branding">
                <div>
                  <h2>&lt;typography='Open Sans'&gt;</h2>
                  <img src="images/projects/dkki/dkkifont.png" alt="DKKI logo typography - Open Sans">
                </div>
                <div>
                  <h2>&lt;logo&gt;</h2>
                  <img src="images/projects/dkki/dkkilogo.png" alt="DKKI redesigned logo">
                </div>
                <div>
                  <h2>&lt;color-palette&gt;</h2>
                  <img src="images/projects/dkki/dkkicolors-05.png" alt="DKKI color palette">
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
  if(ypos > 400){
    bubbleTwo_p1.style.display = "inline-block";
  }else{
    bubbleTwo_p1.style.display = "none";
  }
}
</script>
    </body>
</html>