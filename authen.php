
<?php
    include('connexion.php');
    if(isset($_POST['ok'])){
        $mail=$_POST['login'];
        $pwd=$_POST['motdepasse'];
        $sql="select * from adherent where login='$mail' AND motPasse='$pwd'";
        $reponse = $db->query($sql);
        if($reponse -> rowCount()>0){
            setcookie('login',$_POST["login"],time()+3600*24*24*365,'/','',true,true);
            include('accueil.php');
        }
        else{
            echo' identifiants incorrect';
            header('Authentification.html');
        }
    }
?>