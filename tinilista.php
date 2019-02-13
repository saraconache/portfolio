<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; tinilista app | Sarah V. Gomez Portfolio</title>
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
                        <h2>tinilista App</h2>
Personal project <a href="https://codepen.io/saraconache/pen/gqjbJa">exploring</a> the concept of hybrid apps (applications created with web technologies - html, css, and js - later compiled into functioning mobile apps). This project also explores the usage web storage API localStorage() to store and retrieve data stored temporarily on the browser; making this a flexible and tiny list app (tinilista) where you can store small to dos and safe for later!</p>

    </article>
    <div id="screenshot">
        <img src="images/projects/tinilista/tinilistamockup-01.jpg" alt="PeachnTeal website design mockup">
  </div>
    </section>
    <section id="technologies">
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/css-ico.svg" alt="CSS3 Icon">
    <img src="images/js-ico.svg" alt="JS Icon">
    <img src="images/psd-ico.svg" alt="Adobe Photoshop Icon">
    <img src="images/ai-ico.svg" alt="Adobe Illustrator Icon">
  </div>
    </section>  
    <section id="dissection">
        <div id="smallPara">
         <h2>Technical Challenges</h2>
         <p>Understand how we can use javascript to store information as opposed to using server-side languages (PHP) to use cookies or sessions in order to be able to compile the work into a hybrid app using Apache Cordova (hybrid apps are built using HTML, CSS, and js). </p>
       
     
        </div>
        <div id="codepen">

            <p class="codepen" data-height="562" data-theme-id="dark" data-default-tab="css,result" data-user="saraconache" data-slug-hash="gqjbJa" data-pen-title="To-do list">See the Pen <a href="https://codepen.io/saraconache/pen/gqjbJa/">
                To-do list</a> by saraconache (<a href="https://codepen.io/saraconache">@saraconache</a>)
                on <a href="https://codepen.io">CodePen</a>.</p>
              <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

        </div>
        <div>
         <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
         <p>Each item in the tiniLista is made up of a general unordered list with separate list items inside an overflowing div (for when the list grows).</p>
        </div>
     
         <div>
                 <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
             <p>Lists tend to be very boring. The dashes are done with the 'before' pseudo-element to style it so that it looks more like a real handwritten list.</p>
     
         </div>
       
        <div>
             <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
             <p>Adding event listeners to toggle classes in order to give the appearance of struck out items that are done with the list, as well as the ability to clear out the data (total amount of items from the list in just a click.)</p>
        </div>
      
                 </section>
     
    <section id="branding">
        <div>
          <h2>&lt;typography='Caveat & Major Mono Display'&gt;</h2>
          <img src="images/projects/tinilista/tinilista-fonts.png" alt="tiniLista project typography - Caveat">
          <img src="images/projects/tinilista/tinilista-fonts2.png" alt="tiniLista project typography - Major Mono Display">
        </div>
        <div>
          <h2>&lt;logo&gt;</h2>
          <img src="images/projects/tinilista/tinilista-logo-01.png" alt="tiniLista logo design">
        </div>
        <div>
          <h2>&lt;color-palette&gt;</h2>
          <img src="images/projects/tinilista/tinilistapalette-06.png" alt="tiniLista project color palette">
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