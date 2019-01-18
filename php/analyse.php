<?php
session_start();
if(isset($_POST["Login"]) AND isset($_POST["MdP"]) AND isset($_POST["eMail"]) ){


    // Vérification de la validité des informations

    // Hachage du mot de passe

    // $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    // $DB= new PDO("mysql:host=localhost;dname=e_commerce","root","");

    // Insertion
      try{
$DB = new PDO('mysql:host=localhost;dbname=e_commerce; charset=utf8','root', 'karima1684');



//pour gerer les erreurs

    $req = $DB->prepare('INSERT INTO clients(pseudo, passe, email) VALUES(:pseudo, :passe, :email)');

    $req->execute(array(

   'pseudo' => $_POST["Login"],

    'passe' => $_POST["MdP"],
    
    'email' =>$_POST["eMail"]));
 }






    catch(PDOException $e){
  echo $e->getMessage();
  }

  header('Location: connexion.php');
}
  