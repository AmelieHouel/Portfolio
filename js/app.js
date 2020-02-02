//Mouse 

var button = document.querySelector('button');
var cursor = document.getElementById('cursor');
var position; 
var lastPosition = 0;
var links = document.querySelectorAll("a");
var form = document.getElementById('form');
var body = document.querySelector('body');


window.addEventListener("scroll", scrollUpdate);

function scrollUpdate(e) {
  lastPosition = window.scrollY;
  cursor.style.top = -15 + lastPosition + position + "px";
}

document.addEventListener("mousemove", mouseMove);

function mouseMove(e) {
  position = e.clientY;
  cursor.style.left = -15 + e.clientX + "px";
  cursor.style.top = -15 + e.clientY + lastPosition + "px";
}

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener("mouseover", function() {
    cursor.classList.add("hover");
  });
}

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener("mouseout", function() {
    cursor.classList.remove("hover");
  });
}

//form.addEventListener("mouseover", function() {
  //body.style.cursor="pointer";
//});


// formulaire

//button.addEventListener('click', function(){
 // var name = document.getElementById('name').value;
  //var mail = document.getElementById('mail').value;
  //var msg = document.getElementById('msg').value;
  //console.log('bonjour '+name+ ' ,votre mail : '+mail+', votre message : '+ msg);
//});



// animation in scroll

var ids =['project-title', 'project1', 'project2', 'project3', 'project4', 'project5', 'project6'];

ids.forEach(function(id) {
  var element = document.getElementById(id);

  var waypoint = new Waypoint({
    element: element,
    handler: function(direction) {
      element.classList.add('is-active');
    },
    offset:'95%'
  });
})



// animation purple-form header au scroll 


window.addEventListener('scroll', function onWindowsScroll() {
  var indice = document.getElementById('navShape');
  var scrolls = [0, 630, 1500, 3200];
  var formePositions = ['10%', '30%', '60%', '80%'];
  var lastPositionScroll = window.scrollY;
  console.log(lastPosition + "px");

  for(i=0;i<scrolls.length;i++) {
    if(lastPositionScroll > scrolls[i]-1){
      indice.style.left= formePositions[i];
    } else {
    }
  }
});



// animation title onload

var title = document.getElementById('heroH1');

window.addEventListener("DOMContentLoaded", function() {
    title.style.opacity="1";
    setTimeout(waitingH1, 3000);
});


function waitingH1 () {
  var h2 = document.getElementById('heroH2');
  var h3 = document.getElementById('heroH3');
  h2.style.opacity="1";
  h3.style.opacity='1';
}

// Burger menu

var open = document.getElementById('burger');
var header = document.getElementById('header');
var list = document.getElementById('list');
var lis = document.querySelectorAll('#navChoice');
var burgerMenu = document.getElementById('burger');


burgerMenu.addEventListener('click', function(){
  burgerMenu.classList.toggle('active');
});

open.addEventListener('click', function() {
  header.classList.toggle('is-open');
  list.classList.toggle('is-opened');
});

for(i=0;i<lis.length;i++){
  lis[i].addEventListener('click', function() {
    header.classList.remove('is-open');
    list.classList.remove('is-opened');
  })
}
