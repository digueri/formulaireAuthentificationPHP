<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>


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
               
           </ul>
       </div>
    </div>
</nav>

    <form action="addAdherent.php" method="POST">
    <div class=""><h1 align="center">Inscription</h1></div>
        <hr>
    <div align="center">
   <input type="text" name="nom" size="20" placeholder="nom" required> <br> <br> 
    <input type="text" name="prenom" size="20" placeholder="prenom" required> <br> <br>
    <input type="email" name="login" size="20" placeholder="E-mail" required> <br> <br>
    <input type="password" name="motdepasse" size="20" placeholder="motdepasse" required> <br> <br>
    <input type="password" name="motdepasse1" size="20" placeholder="confirmez motdepasse" required> <br> <br>
    
    <button type="submit">S'inscrire</button> <br> <br>
    <a href="Authentification.html">Connectez-vous</a>
    </div>
</form>
</body>
</html>