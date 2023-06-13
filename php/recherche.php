<?php
/*
require_once "config/dbconect.php";

//Recuperation de la liste des participants
$terme=$recherche =$conn->real_escape_string($_GET['search']);
$sql="SELECT * FROM apprenants WHERE nom LIKE '%$terme' OR prenom LIKE '%$terme%' OR date_de_naissance LIKE '%$terme%' OR formation_de_base LIKE '%$terme%' OR ville_d_origine LIKE '%$terme%'";
$recup= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Résultat de recherche</title>
</head>
<body>
<main>
    <div class="link_container">
        <a class="link" href="../index.php">Retour à la liste complète</a>
    </div>

    <table>
        <thead>

        <?php
        
        if (mysqli_num_rows($recup)>0){

            //On verifie si la liste des participants n'est pas nulle
        
        ?>
            <tr>
            <p class='message'>Résultat sur le terme de recherche : <?=$terme?></p>
            
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>PRENOM</th>
                                    <th>DATE DE Naissance</th>
                                    <th> FORMATION DE BASE</th>
                                    <th> VILLE D'ORIGINE</th>
                                    <th>Action</th>
                                
            </tr>
        </thead>
        <tbody>
            <?php
                while($appprenant=mysqli_fetch_assoc($recup)){
            ?>
            <tr>
            <td><?= $appprenant['id']; ?></td>
                                                <td><?= $appprenant['nom']; ?></td>
                                                <td><?= $appprenant['prenom']; ?></td>
                                                <td><?= $appprenant['date_de_naissance']; ?></td>
                                                <td><?= $appprenant['formation_de_base']; ?></td>
                                                <td><?= $appprenant['ville_d_origine']; ?></td>
                                               
                
                                                <td>
                                                    <a href="php/apprenantView.php?id=<?= $appprenant['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="php/aprennantEdit.php?id=<?= $appprenant['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="php/code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_apprenant" value="<?=$appprenant['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
            </tr>

            <?php
                }
            }

            else {
                echo "<p class='message'>Aucun résultat pour le terme de recherche: $terme</p>";
            }
            */

            ?>
<!---
        </tbody>
    </table>
</main>
</body>
</html> -->
<?php
    session_start();
    require_once '../config/dbconect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Apprenant CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('../php/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Apprenant Details
                            <a href="./php/apprenantCreate.php" class="btn btn-primary float-end">Add Apprenant</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>PRENOM</th>
                                    <th>DATE DE Naissance</th>
                                    <th> FORMATION DE BASE</th>
                                    <th> VILLE D'ORIGINE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                 require_once '../config/dbconect.php';
                                 $terme=$conn->real_escape_string($_GET['search']);
                                 
                                    $query = "SELECT * FROM apprenant WHERE id LIKE '%$terme' OR nom LIKE '%$terme%' OR prenom LIKE '%$terme%' OR date_de_naissance LIKE '%$terme%' OR formation_de_base LIKE '%$terme%' OR ville_d_origine LIKE '%$terme%'";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $appprenant)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $appprenant['id']; ?></td>
                                                <td><?= $appprenant['nom']; ?></td>
                                                <td><?= $appprenant['prenom']; ?></td>
                                                <td><?= $appprenant['date_de_naissance']; ?></td>
                                                <td><?= $appprenant['formation_de_base']; ?></td>
                                                <td><?= $appprenant['ville_d_origine']; ?></td>
                                               
                                                <td>
                                                    <a href="php/apprenantView.php?id=<?= $appprenant['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="php/aprennantEdit.php?id=<?= $appprenant['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="php/code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_apprenant" value="<?=$appprenant['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>