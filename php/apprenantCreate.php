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

    <title>apprenant Create</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>
    

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Apprenant Add 
                            <a href="../index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="../php/con de.php" method="POST">

                            <div class="mb-3">
                                <label> Nom</label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Prenom</label>
                                <input type="text" name="prenom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date De Naissance</label>
                                <input type="date" name="date_de_naissance" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Formation de Base</label>
                                <input type="text" name="formation_de_base" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ville d'Origine </label>
                                <input type="text" name="ville_d_origine" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_apprenant"  class="btn btn-primary">ENREGISTRE</button></a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>