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

    //Envoyer le message
    $req = $pdo->prepare('INSERT INTO contact (username, mail, user_message, date_message) VALUES(?, ?, ?, NOW())');
    $resultat = $req->execute(array($_POST['username'], $_POST['mail'], $_POST['user_message']));

    if (count($_POST)>0) echo "<p class=\"msg-user\">$msg</p>";
          

  ?>