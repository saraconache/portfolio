<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; SAITNav | Sarah V. Gomez Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/speechbubbles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
        pre{
          margin: 0 auto;
          background: #1E2226;
          padding: 1rem 0;
        }
        @media (max-width: 450px) {
       pre {
         font-size: 0.7rem;
       }}
       @media (min-width: 451px) {
        pre {
         font-size: 0.7rem;
       } 
       }
       @media (min-width: 700px) {
        pre {
         font-size: unset;
       } 
       }
        </style>
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
                        <h2>SAITNav</h2>
<p>SAITNav is an academic group project developed as our <a href="https://www.sait.ca/programs-and-courses/full-time-studies/diplomas/new-media-production-and-design">NMPD</a> capstone project. This project explored working with augmented reality to create a wayfinding solution for SAIT’s campus. We decided to use front-end web technologies, graphic design <a href="http://tamiamuller.com/">video production</a>, <a href="http://hectorarevalo.ca/">3D modeling</a>, and <a href="http://www.angela-castro.com">animation</a>. </p>

<p>As the person responsible for the web app's development, it required studying on the browser’s current capability of recreating AR experiences with the use of existing WebGL-AR JavaScript libraries. </p>

    </article>
    <div id="screenshot" style="background:#005EB8;">
        <div id="bubbleOne_p1">
        Single page Wordpress layout. Each section pulls a Wordpress page content.
        </div>
        <div id="bubbleTwo_p1">
        SVG Animated Icons on hover. Each icon design moved/transformed differently.
        </div>
        <div id="bubbleThree_p1">
        Portfolio section pulls a different work on each page load. Showcasing the project.
        </div>
        <img src="images/projects/saitnav/SAITnav_mockup.png" alt="PeachnTeal website design mockup">

        <video src="images/projects/saitnav/saitnav_demo.mp4" autoplay loop muted></video>
        
  </div>
    </section>
    <section id="technologies">    
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/in-ico.svg" alt="Invision Icon">
    <img src="images/js-ico.svg" alt="JS Icon">
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/sass-ico.svg" alt="SaSS Icon">
  </div>
    </section>  
    <section id="dissection">
   <div id="smallPara">
    <h2>Technical Challenges</h2>
    <p>Using <a href="https://aframe.io/">A-FRAME</a>, a leading AR Javascript framework made for building augmented reality experiences on the web, we were able to use HTML5 markup to set up different scenes composed of cameras, anchors, models, and lights. </p>
  

   </div>
   <div id="codepen">
     <pre>
        &lt;a-scene embedded arjs="debugUIEnabled: false; 
        trackingMethod: best;" vr-mode-ui="enabled: false"&gt;

        &lt;a-entity&gt;
        &lt;a-marker-camera preset="custom" type="pattern" 
        url="pattern.patt">&lt;/a-marker-camera&gt;
        &lt;a-text value="TO SENATOR BURNS BUILDING" width="1.5" 
        wrap-count="16" align="center" position="-0.1 0.3 0.9" 
        rotation="-90 0 0" shader="msdf" 
        font="TitilliumWeb-Regular.json" color="white"&gt;
        &lt;/a-text&gt;&lt;/a-entity&gt;
            
        &lt;a-entity geometry="primitive:plane;" rotation="-90 0 0" 
        position="0 -0.2 -0.3"  scale="1.9 2.9 0" 
        material="shader:gif;src:url(CC2SB.gif);" 
        gif=""&gt;&lt;/a-entity&gt;&lt;a-gltf-model src="arrow.gltf" 
        position="0 0 1.3" rotation="-10 180 0" scale="1 1 1" 
        width="1" height="1" depth="1" 
        animation-mixer="loop:repeat"&gt;&lt;/a-gltf-model&gt;
        &lt;/a-scene&gt;
     </pre>
   </div>
   <div>
    <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
    <p>Each scene corresponds to a specific instruction on how to get to a destination and it is composed of a 3D animated arrow model, an instructional video, and a guide text.</p>
   </div>

    <div>
            <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
        <p>As a web app solution for SAIT, CSS styles were adjusted to ensure SAIT Brand guidelines.</p>

    </div>
  
   <div>
        <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
        <p>HTML5 geolocation API was used to serve the user the correct set of directions depending on where they were located within campus. </p>
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