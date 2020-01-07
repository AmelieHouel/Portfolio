var button = document.querySelector('button');


button.addEventListener('click', function(){
  var name = document.getElementById('name').value;
  var mail = document.getElementById('mail').value;
  var msg = document.getElementById('msg').value;
  console.log('bonjour '+name+ ' ,votre mail : '+mail+', votre message : '+ msg);
});