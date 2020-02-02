<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/wayponts.js"></script>
  <script defer type="text/javascript" src="js/app.js"></script>
  <title>Portfolio</title>


</head>

<body class="bg-purple">

  <div class="cursor" id="cursor"></div>

  <header id="header" class=" flex between w100 bg-purple header">
    <img class="personal-logo" src="assets/desktop/header/personal-logo.svg" alt="personal-logo">
      <ul class="" id="list">
       <img class="nav-shape" id="navShape" src="assets/desktop/header/nav-shape.svg" alt="navShape">
       <a class="text-white nav-choice" id="navChoice" href="#home"><li>Accueil</li></a>
       <a class="text-white nav-choice" id="navChoice" href="#presentation"><li>Présentation</li></a>
       <a class="text-white nav-choice" id="navChoice" href="#project"><li>Projets</li></a>
       <a class="text-white nav-choice" id="navChoice" href="#contact"><li>Contacts</li></a>
      </ul>
  </header>

  <div class="burger" id="burger" alt="Burger-menu">
    <div class="line-burger" id="lineBurger"></div>
  </div>

  <section class="flex center hero-header" id="home">
    <div class="hero-titles">
      <h1 id="heroH1">Amélie Houël</h1>
      <h2 class="ta-c" id="heroH2">Developpeuse Web</h2>
      <h3 class="ta-c light" id="heroH3">UX/UI designer</h3>
    </div>
    <img class="hero-shape" src="assets/desktop/heroheader/hero-shape.svg" alt="heroHeader-shape">
    <img class="hero-line" src="assets/desktop/heroheader/HeroLine.svg" alt="heroHeader-line">  
  </section>

  <section class="flex center column presentation" id="presentation">
    <div class="bg-white flex evenly w100 presentation-container"> 
      <img class='portrait' src="assets/desktop/presentation/me.jpg" alt="photo portrait">

      <div class="presentation-text"> 
        <h2 class="ta-c text-blue bold">Présentation</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="ta-c flex column center bg-blue aside">
        <a class="text-white" href="./PDF/CV-Amélie Houël-stage.pdf" target = "_blank">
          <p>Télécharger mon cv</p>
          <div class="flex column">
            <img src="assets/desktop/presentation/presentation-line.svg" alt="deco">
            <img class="triangle" src="assets/desktop/presentation/presentation-triangle.svg" alt="triangle_déco">
          </div></a>
      </div>
      
    </div>
  </section>

  <section class="bg-white ta-c projects" id="project">
    <h2 id="project-title" class="text-blue bold">Projets</h2>

    <div class="flex evenly pictures">
      <img class="individual-pic" id="project1" src="assets/desktop/projets/photo1.jpg" alt="project 1">
      <img class="individual-pic" id="project2" src="assets/desktop/projets/photo2.jpg" alt="project 2">
    </div>

    <div class="flex evenly pictures">
      <img class="individual-pic" id="project3" src="assets/desktop/projets/photo3.jpg" alt="project 3">
      <img class="individual-pic" id="project4" src="assets/desktop/projets/photo4.jpg" alt="project 4">
    </div>

    <div class="flex evenly pictures">
      <img class="individual-pic" id="project5" src="assets/desktop/projets/photo5.jpg" alt="project 5">
      <img class="individual-pic" id="project6" src="assets/desktop/projets/photo6.jpg" alt="project 6">
    </div>

  </section>
  
  <section class="flex column center contact" id="contact">
    <img class="contact-line" src="assets/desktop/contacts/contact-line.svg" alt="line-decoration">
    <img class="contact-shape" src="assets/desktop/contacts/contact-shape.svg" alt="contact-shape">

    <div class="form-container">
      <h2 class="text-blue bold"> Me contacter </h2>

      <form id="form" action="post.php" method="post">
        <div class="flex column">
            <label class="light text-purple" for="name"> Votre identité : </label>
            <input type="text" id="name" name="username" required>
        </div>
        <div class="flex column">
            <label class="light text-purple" for="mail"> Votre e-mail : </label>
            <input type="email" id="mail" name="mail" required>
        </div>
        <div class="flex column">
            <label class="light text-purple" for="msg"> Votre Message : </label>
            <textarea id="msg" name="user_message" placeholder=" Avez-vous une question ?" required></textarea>
        </div>
        <button class="text-white bold bg-purple" type="submit">Envoyer</button>
      </form>

    </div>


  </section>

  <footer class="flex center footer"> 
      <a href="https://github.com/AmelieHouel" target="_blank" class="social"><img  src="assets/desktop/footer/github.svg" alt="icon-github"></a>
      <a href="https://dribbble.com/AmelieHouel" target="_blank" class="social"><img src="assets/desktop/footer/dribbble.svg" alt="icon-dribbble"></a>
      <a href="https://www.linkedin.com/in/am%C3%A9liehou%C3%ABl/" target="_blank" class="social"><img src="assets/desktop/footer/linkedin.svg" alt="icon-linkedin"></a>
      <a href="https://www.behance.net/amelie_houel" target="_blank" class="social"><img src="assets/desktop/footer/behance.svg" alt="icon-behance"></a>
  </footer>

</body>
</html>
