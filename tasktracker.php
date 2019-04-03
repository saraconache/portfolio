<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works &raquo; Task Tracker | Sarah V. Gomez Portfolio</title>
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
                        <h2>Task Tracker</h2>
<p>The task tracker is a personal project exploring Angular component-centered's framework. This is the first time I'm exploring design interpreted as components. This project also allowed me to learn key concepts on Typescript. This project's main focus is development, which is why I opted to rely on Bootstrap to handle stylistic decisions. </p>

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
        <img src="images/projects/tasktracker/tracker_mockup.png" alt="Task Tracker website design mockup">

        <video class="mobile" style="width:90%;" src="images/projects/tasktracker/tasktracker.mp4" controls playsinline loop muted></video>
        
  </div>
    </section>
    <section id="technologies">    
<h2>Technologies <span>Used</span></h2>
<div>
    <img src="images/angular-ico.svg" alt="Angular Icon">
    <img src="images/html-ico.svg" alt="HTML5 Icon">
    <img src="images/typescript-ico.svg" alt="Typescript Icon">
    <img src="images/sass-ico.svg" alt="SaSS Icon">
    <img src="images/bootstrap-ico.svg" alt="Bootstrap Icon">
  </div>
    </section>  
    <section id="dissection">
   <div id="smallPara">
    <h2>Technical Challenges</h2>
    <p>This project’s greatest challenges were having to learn how Angular framework works. This was especially complex coming from a vanilla javascript background. Although Angular can work on javascript alone, best practice is to develop using Typescript. This was also a development challenge.</p>
  

   </div>
   <div id="codepen">
     <pre>
    &lt;tr *ngFor="let task of taskList; 
    let i = index"&gt;
    &lt;td&gt;{{ i + 1 }}&lt;/td&gt;
    &lt;td&gt;{{task.title}} &lt;/td&gt;
    &lt;td&gt;{{task.description}}&lt;/td&gt;
    &lt;td&gt;
    &lt;select class="custom-select" 
    [(ngModel)]="task.status" 
    [ngClass]="task.status" name="statusOptions"&gt;
    &lt;option selected&gt;{{task.status}}&lt;/option&gt;
    &lt;option value="Completed"&gt;Completed &lt;/option&gt;
    &lt;option value="Planning"&gt;Planning&lt;/option&gt;
    &lt;/select&gt;
    &lt;/td&gt;
    &lt;td&gt;
    {{task.timeHour + 'h ' + task.timeMin + 'm'}}
    &lt;/td&gt;
    &lt;td&gt;&lt;button (click)="removeTask(i)"&gt;
    &#10005;
    &lt;/button&gt;
    &lt;/td&gt;&lt;/tr&gt;
     </pre>
   </div>
   <div>
    <h2>&lt;article id='<span class="htmlTitle">basicmarkup</span>'&lt;/article&gt;</h2>
    <p>Angular's data-binding directives are used to extend HTML5's capabilities. </p>
   </div>

    <div>
            <h2>#<span class="cssTitle">styles</span>{display: block;}</h2>
        <p>Used pre-defined styles from Bootstrap 4 to style web app.</p>

    </div>
  
   <div>
        <h2>export class <span class="jsTitle">Typescript</span></h2>
        <p>Typescript was explored in this solution as oposed to using ol' vanilla Javascript.</p>
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