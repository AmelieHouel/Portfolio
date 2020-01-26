//Mouse 

var button = document.querySelector('button');
var cursor = document.getElementById('cursor');
var position; 
var lastPosition = 0;
var links = document.querySelectorAll("a");




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


// formulaire

button.addEventListener('click', function(){
  var name = document.getElementById('name').value;
  var mail = document.getElementById('mail').value;
  var msg = document.getElementById('msg').value;
  console.log('bonjour '+name+ ' ,votre mail : '+mail+', votre message : '+ msg);
});


// animation in scroll

var ids =['titleProjet', 'projet1','projet2', 'projet3', 'projet4', 'projet5', 'projet6'];

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



// animation forme header au scroll 

function onWindowsScroll(){
  var indice = document.getElementById('formeScroll');
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
};

window.addEventListener('scroll', onWindowsScroll);