<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Wine Lab | Sarah V. Gomez Portfolio</title>
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
                        <h2>Wine Lab by CRU</h2>
<p>The demand of e-learning modules is on the rise as our world evolves digitally. Organizations across the world use e-learning platforms to deliver content to both their users as well as their employees. This academic project was based on the challenge of creating an e-learning application to teach users a new skill as well as test the user's skills as they progress through their learning. This assignment was worked as a team. Project team: <a href="http://tamiamuller.com/">Tamia Muller</a> (project management), <a href="http://allyssaanderson.com/">Allyssa Anderson</a> (videography), <a href="http://annamcneill.ca/">Anna McNeill</a> (scripting), <a href="http://www.angela-castro.com">Angela Castro</a>(graphic design), and myself(web development).
  </p>

    </article>
    <div id="screenshot">
        <div id="bubbleOne_p1">
        Landing page sets the tone of the e-learning web app, as well as presents general information about the course.
        </div>
        <div id="bubbleTwo_p1">
        Each module, or "chapter", follows a specific color palette to ensure continuity.
        </div>
        <div id="bubbleThree_p1">
        Drag-n-Drop assessments with the help of Javascript's dataTransfer.setData() method.
        </div>
    <img src="images/projects/winelab/winelab_mockup.jpg" alt="Wine lab by cru website mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/psd-ico.svg" alt="Adobe Photoshop Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">
    <img src="images/wp-ico.svg" alt="Wordpress Icon">
    <img src="images/js-ico.svg" alt="JS Icon">
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/sass-ico.svg" alt="SaSS Icon">
  </div>
    </section>  

    <section id="dissection">
   <div id="smallPara">
    <h2>Technical Challenges</h2>
    <p>My role as web developer in this project proved to be particularly complex in two aspects: the integration of graphical components to ensure learning, and the use of interactive assessments to effectively gauge the user's acquired knowledge. </p>

    <p>This e-learning web app had to be, not only a responsive web application that abided by the already-set brand guidelines established by the team, but also embody the e-learning applications' interactivity using Javascript.</p>

   </div>
   <div id="codepen">
      <p data-height="373" data-theme-id="dark" data-slug-hash="oQWZOL" data-default-tab="css,result" data-user="saraconache" data-pen-title="Module Icons" class="codepen">See the Pen <a href="https://codepen.io/saraconache/pen/oQWZOL/">Module Icons</a> by saraconache (<a href="https://codepen.io/saraconache">@saraconache</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
   </div>
   <div>
    <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
    <p>The markup for the learning modules consisted in recreating good ol' iframes designs but with the use of divs. This required some help of Javascript.</p>
   </div>

    <div>
            <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
        <p>The most predominant thing of this particular design is that there is no body scrolling. The e-learning web app is supposed to be encompassed within the viewports dimensions. </p>

    </div>
  
   <div>
        <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
        <p>Module page design was conceived toggling visibility between containers to replicate the behavior of iframes, as well as most assessments had a Drag-n-Drop component of some sort: from dragging and dropping images, to fill in the blanks, and a word search.</p>
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