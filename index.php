<?php
session_start();
require_once './config/dbconect.php';

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Rediriger vers la page de connexion
    header("Location: login.php");
    exit();
}
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
        <?php include('./php/message.php'); ?>

        <div class="row">
            <div class="col">
                <form class="searchbox form-inline float-end" action="./php/recherche.php" method="$_POST" style="color:white; border-radius:10px; margin-top:50px;">
                    <input type="search" name="search" id="" required>
                    <input type="submit" value="Rechercher">
                </form>

                <form action="deconnexion.php" method="POST" class="float-end" style="color:white; border-radius:10px; margin-left:-620px;">
                    <input type="submit" value="Déconnexion">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Apprenant Details
                            <a href="./php/apprenantCreate.php" class="btn btn-primary float-end">Add Apprenant</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nom</th>
                                        <th>PRENOM</th>
                                        <th>DATE DE Naissance</th>
                                        <th>FORMATION DE BASE</th>
                                        <th>VILLE D'ORIGINE</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once './config/dbconect.php';
                                    $query = "SELECT * FROM apprenant ";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $appprenant) {
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
                                                    <form action="php/code.php" method="POST" onsubmit="return confirmDelete();" class="d-inline">
                                                        <button type="submit" name="delete_apprenant" value="<?= $appprenant['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<h5>No Record Found</h5>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete() {
            return confirm("Voulez-vous vraiment supprimer cet élément ?");
        }
    </script>

</body>

</html>
