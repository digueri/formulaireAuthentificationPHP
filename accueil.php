<?php
session_start();
$_SESSION['login']=$_COOKIE['login'];
echo $_SESSION['login'] . ' est en ligne';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="log.css">
    <title>Accueil</title>
    
</head>
<body>
<a  href="decon.php">Deconnecter</a>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="photo.jpeg" alt=""width="100" height="100" class="d-inline-block align-text-top">       
        </a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="nav-link" href="Authentification.html">Authentification</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                   <a class="nav-link" href="inscription.php">inscription</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="tontine.php">tontine</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="decon.php">Deconnecter</a>
               </li>
           </ul>
       </div>
    </div>
</nav>

   
</body>
</html>