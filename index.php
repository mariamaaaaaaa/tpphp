<?php
 require_once ("./etudiant.php");
 require_once ("./database/connexion.php");
 global $connect;
 //instanciation
 $etudiant= new etudiant (
    [
        "name" =>"diouf",
        "lastname" => "bella",
        "classe" => "CM1",
        "numero" => "77 404 00 28",
        "email" => "belladiouf00@gmail.com",
        "adresse" => "parcelles",
        "moyenne" => "19/20",
        "age" => "11",
        "sexe" => "feminin",
        "identifiant" => "777"

         
    ]
 );
 var_dump($etudiant);

 $query = $connect -> prepare ('INSERT INTO `etudiant` (`nom`, `prenom`, `classe`, `numero`, `email`, `adresse`, `moyenne`, `age`, `sexe`, `identifiant`) VALUES (?,?,?,?,?,?,?,?,?,?)') ;
 $result = $query -> execute ([
    $etudiant -> getname(),
    $etudiant -> getlastname(),
    $etudiant -> getclasse(),
    $etudiant -> getnumero(),
    $etudiant -> getemail(),
    $etudiant -> getadresse(),
    $etudiant -> getmoyenne(),
    $etudiant -> getage(),
    $etudiant -> getsexe(),
    $etudiant -> getidentifiant()
 ]);
 if ($result){
    $message = "ajouté avec succès";
    } 
    else {
        $message = "une erreur";
    }

    echo $message; 