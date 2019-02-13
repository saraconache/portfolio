<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; PeachnTeal | Sarah V. Gomez Portfolio</title>
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
                        <h2>Peach &amp; Teal</h2>
<p><a href="http://www.peachnteal.com">Peach & Teal</a> is a start up business in party planning and personalized favors. Their main market will be mainly online, where they want to be able to offer their packages as well as their consultation services. The main challenge of this project is to be able to design a simple yet elegant ecommerce site that offers a first introductory page with all of the necessary information regarding their company and what they do. 

This project was designed at every scale, from branding, logo, and color guidelines, to the wireframe, mock-ups, front-end markup to CMS platform development. 
</p>

    </article>
    <div id="screenshot">
        <div id="bubbleOne_p1">
        Single page Wordpress layout. Each section pulls a Wordpress page content.
        </div>
        <div id="bubbleTwo_p1">
        SVG Animated Icons on hover. Each icon design moved/transformed differently.
        </div>
        <div id="bubbleThree_p1">
        Portfolio section pulls a different work on each page load. Showcasing the project.
        </div>
        <img src="images/projects/peach/PeachnTeal_mockup.jpg" alt="PeachnTeal website design mockup">
        
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
    <p>Client required a single page Wordpress design for their introductory website. This presented an interesting opportunity. The website required a diferent set up of Wordpress' famous The Loop, each separate page was to be retreived by Wordpress and displayed as a section on the main page.</p>
  

   </div>
   <div id="codepen">
     <pre>
        &lt;?php the_field('news_box_title',6); ?&gt;
        &lt;?php 
        $query = new WP_Query( 'pagename=img-header');
        // The Loop
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '&lt;div class="entry-content"&gt;';
            the_content();
            echo '&lt;/div&gt;';
          }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
              ?&gt;
     </pre>
   </div>
   <div>
    <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
    <p>This website's markup follows a conventional landing page format, where typical separate pages are condensed into sections within one page.</p>
   </div>

    <div>
            <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
        <p>Usage of CSS pseudo-elements allowed the incorporation of small details like the pink heart attached to the contact form, which is conveniently located on top of Alberta, where PeachnTeal is from.</p>

    </div>
  
   <div>
        <h2>var title = '<span class="jsTitle">javascript rocks</span>';</h2>
        <p>Because of the nature of single pages links (anchors), smooth scrolling was essential for the overall experience of this website.</p>
   </div>
 
            </section>

            <section id="branding">
              <div>
                <h2>&lt;typography='NORDICA'&gt;</h2>
                <img src="images/projects/peach/peachfont.png" alt="PeachnTeal project typography - Nordica">
              </div>
              <div>
                <h2>&lt;logo&gt;</h2>
                <img src="images/projects/peach/peachlogo-01.png" alt="PeachnTeal logo">
              </div>
              <div>
                <h2>&lt;color-palette&gt;</h2>
                <img src="images/projects/peach/peachpalette.png" alt="PeachnTeal project color palette">
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