<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>totines</title>
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
                    <a class="nav-link active" aria-current="page" href="accueil.php">accueil</a>
                </li>
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

    <fieldset>
        <legend>Inserer un totine</legend>
       <form action="addtontine.php" method="POST">
       <table align= "center">
    <tr>
       <td><input type="text" name="nom" size="20" placeholder="Nom " required></td>
    </tr>
    <tr>
        <td><input type="text" name="periodicite" size="20" placeholder="periodicite " required></td>
    </tr>
    <tr>
        <td><input type="date" name="dateDeb" size="20" placeholder="date debut" required></td>
    </tr>
    <tr>
        <td><input type="date" name="dateFin" size="20" placeholder="date fin" required></td>
    </tr>
    <tr class="sel">
        <td>
        <select name="id_responsable" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td><button type="submit">Inserer </button></td>
    </tr>

        </table>
       </form>
    </fieldset>
</body>
</html>