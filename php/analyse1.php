 <?php session_start(); ?>
 <?php
 //connexion à la base de données
 require_once 'config.php';


 $con=mysqli_connect($host,$username,$password,$dbname);
 //verification des donnée du formulaire
  
if(isset($_POST['pseudo']) && isset($_POST['passe']))
  {

      $pseudo = mysqli_real_escape_string($con,$_POST['pseudo']);
      $passe = mysqli_real_escape_string($con,$_POST['passe']);
   
   $sql="SELECT * FROM clients where pseudo='$pseudo'";

   if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    }

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

    if ($row['passe']==$passe) {
        # code...
        $_SESSION['pseudo']=$pseudo;
        echo "<script>window.location = 'espace-membre.php'</script>";

        


    }


    else{

    echo "<script>window.location = 'connexion.php'</script>";
    }

 }
  
 ?>