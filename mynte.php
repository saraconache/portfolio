<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Mynte | Sarah V. Gomez Portfolio</title>
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
                        <h2>Mynte</h2>
This academic project involved creating a logo for a fictitious marketing company in order to present a business proposal while studying New Media Production & Design at the <a href="https://www.sait.ca">Southern Alberta Institute of Technology.</a> The logo design adopts the aromatic herb, mint, as an inspiration due to Mynte being a homophone word.
The simplified green leaf vector and tracked sans-serif typography is used to accentuate the very clear-cut taste of mint. Mynte is a company that values working smart, efficiently, and clean. </p>

    </article>
    <div id="screenshot">
    <img src="images/projects/mynte/mynte_logo.png" alt="Mynte logo">
    <img src="images/projects/mynte/myntelogov2.png" alt="Mynte logo turquoise version">
    <img src="images/projects/mynte/myntelogov3.png" alt="Mynte logo black version">
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
          <h2>&lt;typography='NORDICA'&gt;</h2>
          <img src="images/projects/mynte/myntefont.png" alt="Mynte project typography - Nordica">
        </div>
        <div>
          <h2>&lt;logo&gt;</h2>
          <img src="images/projects/mynte/myntelogo-04.png" alt="Mynte logo design">
        </div>
        <div>
          <h2>&lt;color-palette&gt;</h2>
          <img src="images/projects/mynte/myntecolors-02.png" alt="Mynte project color palette">
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