<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="assets/favicon.png"/>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/wayponts.js"></script>
  <script defer type="text/javascript" src="js/app.js"></script>
  <title>Amélie Houël | Portfolio</title>

</head>

<body class="bg-purple">

  <header id="header" class=" flex between w100 bg-purple header">
      <img class="personal-logo" src="assets/desktop/header/personal-logo.svg" alt="personal-logo"> 
      <ul class="" id="list">
       <img class="nav-shape" id="navShape" src="assets/desktop/header/nav-shape.svg" alt="navShape">
       <a class="text-white nav-choice" id="navChoice" href="#home">Accueil</a>
       <a class="text-white nav-choice" id="navChoice" href="#presentation">Présentation</a>
       <a class="text-white nav-choice" id="navChoice" href="#project">Projets</a>
       <a class="text-white nav-choice" id="navChoice" href="#contact">Contacts</a>
      </ul>
      <div class="burger" id="burger" alt="Burger-menu">
        <div class="line-burger" id="lineBurger"></div>
      </div>
  </header>

  

  <section class="flex center hero-header" id="home">
    <div class="hero-titles">
      <h1 id="heroH1">Amélie Houël</h1>
      <h2 id="heroH2">Developpeuse Web</h2>
      <h3 class="light" id="heroH3">UX/UI designer</h3>
    </div>
    <img class="hero-shape" src="assets/desktop/heroheader/hero-shape.svg" alt="heroHeader-shape">
    <img class="hero-line" src="assets/desktop/heroheader/HeroLine.svg" alt="heroHeader-line">  
  </section>

  <section class="flex center column presentation" id="presentation">
    <div class="bg-white flex evenly w100 presentation-container"> 
      <img class='portrait' src="assets/desktop/presentation/me.jpg" alt="photo portrait">

      <div class="presentation-text"> 
        <h2 class="text-blue bold">Présentation</h2>
        <p>Il y a un an, j’ai démarré une reconversion professionnelle en intégrant un bachelor Web au sein de l’école HETIC. 
           En 1 an, j’ai pu y apprendre principalement le design web mais aussi les bases du développement front end et back end. 
           Aujourd’hui, je me spécialise dans le domaine du développement web afin de rassembler tout ce que je recherche pour ma future 
           vie professionnelle. L’étude des comportements humains et la créativité avec l’UX/UI design, puis les nouvelles technologies et 
           la technique avec le développement web. Afin de développer ma pratique et mes compétences dans ce domaine, je suis à la recherche 
           d'un stage d’une durée de 01 mois à compter du 01 mars 2020.</p>
      </div>

      <div class="ta-c flex column center bg-blue aside">
        <a class="text-white" href="assets/PDF/CV-Amélie Houël-stage.pdf" target = "_blank">
          <p>Télécharger mon cv</p></a>
        <div class="flex column">
          <img src="assets/desktop/presentation/presentation-line.svg" alt="deco">
          <img class="triangle" src="assets/desktop/presentation/presentation-triangle.svg" alt="triangle_déco">
        </div>
        <a class="text-white" href="assets/PDF/Book-AH1.pdf" target = "_blank">
          <p>Télécharger mon book</p></a>
        <div class="flex column">
          <img src="assets/desktop/presentation/presentation-line.svg" alt="deco">
          <img class="triangle" src="assets/desktop/presentation/presentation-triangle.svg" alt="triangle_déco">
        </div>
      </div>
      
    </div>
  </section>

  <section class="bg-white ta-c projects" id="project">
    <h2 id="project-title" class="text-blue bold">Projets ( <span>en construction</span> )</h2>

    <div class="flex evenly pictures">
      <img class="individual-pic" id="project1" src="assets/desktop/projets/1.jpg" alt="project 1">
      <img class="individual-pic" id="project2" src="assets/desktop/projets/2.jpg" alt="project 2">
      <img class="individual-pic" id="project3" src="assets/desktop/projets/3.jpg" alt="project 3">
    </div>

    <div class="flex evenly pictures">
      <img class="individual-pic" id="project4" src="assets/desktop/projets/4.jpg" alt="project 4">
      <img class="individual-pic" id="project5" src="assets/desktop/projets/5.jpg" alt="project 5">
      <img class="individual-pic" id="project6" src="assets/desktop/projets/6.jpg" alt="project 6">
    </div>

  </section>
  
  <section class="flex column center contact" id="contact">
    <img class="contact-line" src="assets/desktop/contacts/contact-line.svg" alt="line-decoration">
    <img class="contact-shape" src="assets/desktop/contacts/contact-shape.svg" alt="contact-shape">

    <div class="form-container">
      <h2 class="text-blue bold"> Me contacter </h2>

      <form id="form"  method="post">
        <div class="flex column">
            <label class="light text-purple" for="name">Votre identité :</label>
            <input type="text" id="name" name="username" placeholder="prenom nom" required>
        </div>
        <div class="flex column">
            <label class="light text-purple" for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="mail" placeholder="dev@dev.com" required>
        </div>
        <div class="flex column">
            <label class="light text-purple" for="msg">Votre Message :</label>
            <textarea id="msg" name="user_message" placeholder=" Avez-vous une question ?" required></textarea>
        </div>
        <button class="text-white bold bg-purple" type="submit">Envoyer</button>
      </form>
    </div>
    <?php require('post.php');  ?>
  </section>
  

  <footer class="flex center footer"> 
      <a href="https://github.com/AmelieHouel" target="_blank" class="social"><img  src="assets/desktop/footer/github.svg" alt="icon-github"></a>
      <a href="https://dribbble.com/AmelieHouel" target="_blank" class="social"><img src="assets/desktop/footer/dribbble.svg" alt="icon-dribbble"></a>
      <a href="https://www.linkedin.com/in/am%C3%A9liehou%C3%ABl/" target="_blank" class="social"><img src="assets/desktop/footer/linkedin.svg" alt="icon-linkedin"></a>
      <a href="https://www.behance.net/amelie_houel" target="_blank" class="social"><img src="assets/desktop/footer/behance.svg" alt="icon-behance"></a>
  </footer>

</body>
</html>
