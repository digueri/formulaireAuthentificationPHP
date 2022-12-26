<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('connexion.php');
    if($_POST['motdepasse']!=$_POST['motdepasse1']){
        echo '<h1>PassWords no conform</h1>';
        include('Inscription.html');
    }
    else{
 $sqlQuery='INSERT INTO adherent(nom,prenom,login,motPasse) VALUES (:nom,:prenom,:login,:motdepasse)';
$inser=$db->prepare($sqlQuery);

$inser->execute([
          'nom' =>$_POST['nom'],
          'prenom'=>$_POST['prenom'],
          'login'=>$_POST['login'],
          'motdepasse'=>$_POST['motdepasse'],
        ]
        );
        echo '<h1>inscrit avec succes</h1>';
        include('Authentification.html');
    }
?>

</body>
</html>