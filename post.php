<?php
  $name = htmlspecialchars($_POST['username']);
  $mail = htmlspecialchars($_POST['mail']);
  $user_message =htmlspecialchars($_POST['user_message']);


 // Connexion à la base de données

 try
 {
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'amelie', 'rootamelie', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
     }
     catch(Exception $e)
     {
        die('Erreur : '.$e->getMessage());
      }

    $req = $bdd->prepare('INSERT INTO messages (username, mail, user_message, date_message) VALUES(:username, :mail, :user_message, NOW())');
    $req->bindValue(':username', $name, PDO::PARAM_STR);
    $req->bindValue(':mail', $mail, PDO::PARAM_STR);
    $req->bindValue(':user_message', $user_message, PDO::PARAM_STR);
    $req->execute() or die();


     if (count($_POST)>0) echo "votre message a été enrégistré avec succès";
     header('Location: index.php');
 ?>
