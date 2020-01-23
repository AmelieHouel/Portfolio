var button = document.querySelector('button');
var cursor = document.getElementById('cursor');
var position; 
var lastPosition = 0;
var links = document.querySelectorAll("a");

button.addEventListener('click', function(){
  var name = document.getElementById('name').value;
  var mail = document.getElementById('mail').value;
  var msg = document.getElementById('msg').value;
  console.log('bonjour '+name+ ' ,votre mail : '+mail+', votre message : '+ msg);
});


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