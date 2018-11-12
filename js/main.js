/* Code Syntax Highlighting */
  function syntaxHighlights() { 
      var codeArray = document.getElementsByTagName("pre"),  /* create a variable for your code container.
      getElementsByTagName creates an array. In order to target all <code> instances we must create a loop */
      singleQuoteReg = /'(.*?)'/g,
      //  doubleQuoteReg = /"(.*?)"/g,
      htmlTagReg = /(&lt;[^\&]*&gt;)/g,
      keywordsJsReg = /\b(new|var|if|do|function|while|switch|for|foreach|in|continue|break)(?=[^\w])/g,
      globalJsReg = /\b(document|window|Array|String|Object|Number|\$)(?=[^\w])/g,
      specialJsReg = /\b(getElementsBy(TagName|ClassName|Name)|querySelector|querySelectorAll|getElementById|typeof|instanceof)(?=[^\w])/g,
      specialMethReg = /\b(indexOf|match|replace|toString|length)(?=[^\w])/g,
      specialPhpReg  = /\b(define|echo|print_r|var_dump)(?=[^\w])/g,
      specialCommentReg  = /\/\* (.*?) \*\//g,
      inlineCommentReg = /(\/\/.*)/g,
      mysqlReg = /\b(CREATE|ALL|DATABASE|TABLE|GRANT|PRIVILEGES|IDENTIFIED|FLUSH|SELECT|UPDATE|DELETE|INSERT|FROM|WHERE|ORDER|BY|GROUP|LIMIT|INNER|OUTER|AS|ON|COUNT|CASE|TO|IF|WHEN|BETWEEN|AND|OR)(?=[^\w])/
      for(var i=0; i < codeArray.length; i++){ // Start with a variable equal to 0. As long as the number of nodes in codeArray is less than the variable then keep adding a number
          var data = codeArray[i].innerHTML, // each code node within codeArray name it 'data' 
             // data = data.replace(doubleQuoteReg, '<span class="string">&quot;$1&quot;</span>'); 
             data = data.replace(singleQuoteReg, '<span class="string">&apos;$1&apos;</span>'); 
             data = data.replace(keywordsJsReg, '<span class="keywordsJsReg">$1</span>');
             data = data.replace(htmlTagReg, '<span class="htmlTags">$1</span>');
             data = data.replace(globalJsReg, '<span class="globalJsReg">$1</span>');
             data = data.replace(specialJsReg, '<span class="specialJsReg">$1</span>');
             data = data.replace(specialMethReg, '<span class="specialMethReg">$1</span>');
             data = data.replace(specialPhpReg, '<span class="specialPhpReg">$1</span>');
             data = data.replace(specialCommentReg, '<span class="specialCommentReg">/* $1 */</span>');
             data = data.replace(inlineCommentReg, '<span class="inlineCommentReg">$1</span>');
             data = data.replace(mysqlReg, '<span class="mysqlReg">$1</span>');  
         codeArray[i].innerHTML = data; 
      }
  } 

window.addEventListener("load", syntaxHighlights); 




/* Re-create typing effect */
var i = 0;
var speed = 50;

intro.addEventListener("click", function(e) {
  e.preventDefault();
  if (e.target.nodeName == "A") {
    var syntaxString = e.target.title;
    function typeWriter() {
      if (i < syntaxString.length) {
        newLineCommand.innerHTML += syntaxString.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    typeWriter();
  }
});



/* No Javascript enabled? Fallback */
var noJavascriptEnabled = document.querySelector('HTML');
noJavascriptEnabled.classList.remove('no-js');

/* MENU */
var nav = document.getElementById('nav');
var navlinks = nav.getElementsByTagName('a');

function toggleNav() {

  if(nav.classList.contains('active')){
    nav.classList.remove('active')}
    else{nav.classList.add('active') }

    // ternary operator example
    // (nav.classList.contains('active')) ? nav.classList.remove('active') : nav.classList.add('active');
  }

document.getElementById('nav-icon').addEventListener('click', function(e) {
    e.preventDefault();
    toggleNav();
});

// for(var i = 0; i < navlinks.length; i++) {
//     navlinks[i].addEventListener('click', function() {
//       toggleNav();
//   });
// }