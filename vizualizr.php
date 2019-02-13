<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Vizualizr | Sarah V. Gomez Portfolio</title>
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
                        <h2>Vizualizr Image Editor</h2>
<p>This project started as a personal exercise to learn more about CSS variables and the possibility of integration with javascript. As the project <a href="https://github.com/saraconache/css-variablesPlayground">evolved</a>. I analized the potential o
creating a tool that could be useful for future web development practices. Vizualizr aims to represent in a visual manner the chosen units for specific css filters on a desired image. </p>

    </article>
    <div id="screenshot">
        <img src="images/projects/vizualizr/vizualizrmockup.jpg" alt="Vizualizr mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/js-ico.svg" alt="JS Icon">
  </div>
    </section>  
    <section id="dissection">
        <div id="smallPara">
         <h2>Technical Challenges</h2>
         <p>Working around the logistics of CSS variables, how can I name them so that it is easy to replace and update in javascript? See the <a href="http://www.sarahvgomez.com/demo/vizualizr">working demo here</a>.</p>
        </div>
        <div id="codepen">
        <pre>
        :root {
        --basecolor: rebeccapurple;
        --border: 0px;
        --blur: 0%;
        --contrast: 100%;
        --grayscale: 0%;
        --hue-rotate: 0deg;
        --invert:0%;
        --saturate: 100%;
        --sepia: 0%;}

        img{
        border: var(--border) solid var(--basecolor);
        filter: grayscale(var(--grayscale)) 
        blur(var(--blur)) contrast(var(--contrast)) 
        hue-rotate(var(--hue-rotate)) saturate(var(--saturate))
         sepia(var(--sepia)) invert(var(--invert));
        }
     </pre>
        </div>
        <div>
         <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
         <p>Range inputs for each CSS filter with custom datasets in order to facilitate the integration of javascript.</p>
        </div>
     
         <div>
                 <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
             <p>CSS3 variables. Variables, variables. Having previously relied on SaSS to compile CSS written with variables, this was a new concept to explore all together. </p>
     
         </div>
       
        <div>
             <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
             <p>Learning about the usage of keyword 'this' in javascript when an object's method is invoked. </p>
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