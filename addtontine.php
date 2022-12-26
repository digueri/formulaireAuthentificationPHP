<?php
include('connexion.php');
$sqlQuery='INSERT INTO tontine(nom,periodicite,dateDeb,dateFin,idResponsable) VALUES (:nom,:periodicite,:date_deb,:date_fin,:id_Responsable)';
$inser=$db->prepare($sqlQuery);
$inser->execute([
          'nom' =>$_POST['nom'],
          'periodicite'=>$_POST['periodicite'],
          'date_deb'=>$_POST['date_deb'],
          'date_fin'=>$_POST['date_fin'],
          'id_Responsable'=>$_POST['id_responsable']
        ]
        );
        echo '<h1>tontine ajoutee avec succes</h1>';
?>
