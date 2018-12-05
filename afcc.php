<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; AFCC | Sarah V. Gomez Portfolio</title>
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
                        <h2>AFCC</h2>
                        <p>This logo was designed as part of much bigger proposal for the <a href="https://www.afccalgary.org/">Aboriginal Friendship Centre of Calgary</a>’s new logo and organization branding.  This design seeks to rebrand the organization’s outdated look and create a much more approachable overall image. The concept behind this logo is the abstraction of three tepees unto a set of triangles arranged within themselves. The set of different sizes of triangles represents the idea of how defining is aboriginal heritage in an individual as well as define the presence of every person or ‘link’ within the aboriginal community no matter how big or small.</p>

    </article>
    <div id="screenshot">
        <img src="images/projects/afcc/afcc_logo.png" alt="AFCC logo tepee design">
        <img src="images/projects/afcc/afcc_logoicon-03.png" alt="AFCC tepee icon">
        <img src="images/projects/afcc/afcc_logov2-04.png" alt="AFCC logo tepee black">    
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
              <h2>&lt;typography='MOON'&gt;</h2>
              <img src="images/projects/afcc/afcc_fonts.png" alt="AFCC logo typography - MOON">
            </div>
            <div>
              <h2>&lt;logo&gt;</h2>
              <img src="images/projects/afcc/afcc_logo.png" alt="AFCC logo">
            </div>
            <div>
              <h2>&lt;color-palette&gt;</h2>
              <img src="images/projects/afcc/afcc_colors-04.png" alt="AFCC logo color palette">
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
}
</script>
    </body>
</html>