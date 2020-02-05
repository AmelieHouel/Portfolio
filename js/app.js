var lastPosition;
var open = document.getElementById('burger');
var header = document.getElementById('header');
var list = document.getElementById('list');
var lis = document.querySelectorAll('#navChoice');
var burgerMenu = document.getElementById('burger');

// animation purple-form header au scroll 


window.addEventListener('scroll', function onWindowsScroll() {
  var indice = document.getElementById('navShape');
  var scrolls = [0, 630, 1500, 2500];
  var formePositions = ['10%', '30%', '60%', '80%'];
  var lastPosition = window.scrollY;

  for(i=0;i<scrolls.length;i++) {
    if(lastPosition > scrolls[i]-1){
     indice.style.left= formePositions[i];
    } else {
      console.log('coucou');
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

// animation wayponts

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

// Burger menu

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
    burgerMenu.classList.remove('active');

  })
}

