<?php
    try
    {

      $msg = 'Le message a été envoyé avec succès';
      $user = 'hoam4690';
      $password = '6KAxr3cL6*Qy';
      $pdo = new PDO('mysql:host=localhost;dbname=hoam4690_portfolio; charset=utf8', $user, $password);

    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }

    //Si les variables existes
    if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['user_message'])) {

    //Envoyer les données dans la BDD
      $req = $pdo->prepare(' INSERT INTO contact (username, mail, user_message, date_message) VALUES(?, ?, ?, NOW())');
      $res = $req->execute(array(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['user_message'])));
      

  }

    if (count($_POST)>0) echo "<p class=\"msg-user\">$msg</p>";
          

  ?>