<?php
session_start();
require '../config/dbconect.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date_de_naissance'];
$formation_de_base = $_POST['formation_de_base'];
$ville_d_origine =  $_POST['ville_d_origine'];

if(isset($nom,$prenom ,$date_de_naissance,$formation_de_base,$ville_d_origine ))
{
    $sql = "INSERT INTO apprenant (nom, prenom, 
date_de_naissance, formation_de_base, ville_d_origine)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$formation_de_base', '$ville_d_origine')";
    
    $query_run = mysqli_query($conn, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "apprenant  Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "apprenant not  Successfully";
        header("Location: ../index.php");
        exit(0);
    }
}


    $sql = "INSERT INTO apprenant (nom, prenom, 
date_de_naissance, formation_de_base, ville_d_origine)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$formation_de_base', '$ville_d_origine')";


// Fermer la connexion à la base de données

if(isset($_POST['delete_apprenant']))
{    $apprenant_id = mysqli_real_escape_string($conn, $_POST['delete_apprenant']);

    $query = "DELETE FROM apprenant WHERE id='$apprenant_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../index.php");
        exit(0);
    }
}

if(isset($_POST['update_apprenant']))
{
    $apprenant_id = $_POST['apprenant_id'];

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $formation_de_base = $_POST['formation_de_base'];
    $ville_d_origine =  $_POST['ville_d_origine'];
    $query = "UPDATE apprenant SET nom='$nom', prenom='$prenom', date_de_naissance='date_de_naissance', formation_de_base='formation_de_base', ville_d_origine='ville_d_origine' WHERE id='$apprenant_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "appprenant Updated Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../index.php");
        exit(0);
    }

}


if(isset($_POST['save_apprenant']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $formation_de_base = $_POST['formation_de_base'];
    $ville_d_origine =  $_POST['ville_d_origine'];

    
    $query = "INSERT INTO apprenant (nom, prenom, 
    date_de_naissance, formation_de_base, ville_d_origine) VALUES (' $nom','$prenom',' $date_de_naissance','$formation_de_base','$ville_d_origine')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "apprenant Created Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "apprenant Not Created";
        header("Location: ../index.php");
        exit(0);
    }
}

?>