
var secOne = document.getElementsByClassName('patternA');

var projectsCreatedA = secOne[0].getElementsByClassName('project');

for(i=0; i <(projectsCreatedA.length)+2; i++){
var newDiv = document.createElement("div");
secOne[0].insertBefore(newDiv, secOne[0].childNodes[0]);
}

var secTwo = document.getElementsByClassName('patternB');

var projectsCreatedB = secTwo[0].getElementsByClassName('project');

for(i=0; i <(projectsCreatedB.length)+2; i++){
var newDiv = document.createElement("div");
secTwo[0].insertBefore(newDiv, secTwo[0].childNodes[0]);
}


var mqls = [ // list of window.matchMedia() queries
window.matchMedia( "(max-width: 700px)" ), // mobile
window.matchMedia( "(max-width: 1000px)" ), // tablet
]

function mediaqueryresponse(mql){
    if (mqls[0].matches){
        secOne[0].style.gridTemplateColumns = "1fr 1fr";
        projectsCreatedA[0].style.gridColumn="2/3";
        projectsCreatedA[0].style.gridRow="1/2";

        projectsCreatedA[1].style.gridColumn="2/3";
        projectsCreatedA[1].style.gridRow="2/3";

        projectsCreatedA[2].style.gridColumn="1/2";
        projectsCreatedA[2].style.gridRow="4/5";

        projectsCreatedA[3].style.gridColumn="1/2";
        projectsCreatedA[3].style.gridRow="5/6";

        projectsCreatedA[4].style.gridColumn="2/3";
        projectsCreatedA[4].style.gridRow="6/7";

        secTwo[0].style.gridTemplateColumns = "1fr 1fr";
        projectsCreatedB[0].style.gridColumn="2/3";
        projectsCreatedB[0].style.gridRow="1/2";

        projectsCreatedB[1].style.gridColumn="1/2";
        projectsCreatedB[1].style.gridRow="3/4";

        projectsCreatedB[2].style.gridColumn="1/2";
        projectsCreatedB[2].style.gridRow="4/5";        

    }else if (mqls[1].matches){
        secOne[0].style.gridTemplateColumns = "1fr 1fr 1fr";
        projectsCreatedA[0].style.gridColumn="2/3";
        projectsCreatedA[0].style.gridRow="1/2";

        projectsCreatedA[1].style.gridColumn="1/2";
        projectsCreatedA[1].style.gridRow="2/3";

        projectsCreatedA[2].style.gridColumn="1/2";
        projectsCreatedA[2].style.gridRow="3/4";

        projectsCreatedA[3].style.gridColumn="3/4";
        projectsCreatedA[3].style.gridRow="4/4";

        projectsCreatedA[4].style.gridColumn="3/4";
        projectsCreatedA[4].style.gridRow="4/5";

        secTwo[0].style.gridTemplateColumns = "1fr 1fr 1fr";
        projectsCreatedB[0].style.gridColumn="2/3";
        projectsCreatedB[0].style.gridRow="1/2";

        projectsCreatedB[1].style.gridColumn="2/3";
        projectsCreatedB[1].style.gridRow="2/3";

        projectsCreatedB[2].style.gridColumn="1/2";
        projectsCreatedB[2].style.gridRow="3/4";   
    }else{
        secOne[0].style.gridTemplateColumns = "1fr 1fr 1fr 1fr";
        projectsCreatedA[0].style.gridColumn="2/3";
        projectsCreatedA[0].style.gridRow="1/2";

        projectsCreatedA[1].style.gridColumn="4/5";
        projectsCreatedA[1].style.gridRow="1/2";

        projectsCreatedA[2].style.gridColumn="3/4";
        projectsCreatedA[2].style.gridRow="2/3";

        projectsCreatedA[3].style.gridColumn="1/2";
        projectsCreatedA[3].style.gridRow="3/4";

        projectsCreatedA[4].style.gridColumn="4/5";
        projectsCreatedA[4].style.gridRow="3/4";

        secTwo[0].style.gridTemplateColumns = "1fr 1fr 1fr 1fr";
        projectsCreatedB[0].style.gridColumn="2/3";
        projectsCreatedB[0].style.gridRow="1/2";

        projectsCreatedB[1].style.gridColumn="1/2";
        projectsCreatedB[1].style.gridRow="2/3";

        projectsCreatedB[2].style.gridColumn="3/4";
        projectsCreatedB[2].style.gridRow="2/3";   
    }
}

for (var i=0; i<mqls.length; i++){ // loop through queries
    mediaqueryresponse(mqls[i]) // call handler function explicitly at run time
    mqls[i].addListener(mediaqueryresponse) // call handler function whenever the media query is triggered
}