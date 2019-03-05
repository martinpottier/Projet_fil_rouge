<?php
    // Stock le chemin du fichier dans une variable
    $filename = 'CSV/contact.csv';

    // Récupération des infomartions envoyer 
    // par l'utilisateur et la met dans un tableau
    $nom = [htmlspecialchars($_POST['nom'])];
    $mail = [htmlspecialchars($_POST['email'])];
    $prenom = [htmlspecialchars($_POST['prenom'])];
    $message = [htmlspecialchars($_POST['message'])];
    $contactTab = [
        "nom" => $nom, 
        "mail" => $mail, 
        "prenom" => $prenom, 
        "message" => $message
    ];

    // Ouvre le fichier en écriture 
    // le créer si il n'éxiste pas
    // Ecris a la fin du fichier
    $fp = fopen($filename, 'a');

    // Rentre tous les valeurs du tableau
    foreach($contactTab as $fields) {
        fputcsv($fp, $fields);
    }
    // Ferme le fichier
    fclose($fp);

    header ("location:reussi.php");
?>