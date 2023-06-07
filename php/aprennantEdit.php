<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>  

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Apprenant Edit 
                        <a href="../index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        require '../config/dbconect.php';
                        if(isset($_GET['id']))
                        {
                            $apprenant_id =  $_GET['id'];
                            $query = "SELECT * FROM apprenant WHERE id='$apprenant_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $apprenant = mysqli_fetch_array($query_run);
                                ?>
                                <form action="../php/code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $apprenant['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nom</label>
                                        <input type="text" name="nom" value="<?=$apprenant['nom'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Prenom</label>
                                        <input type="text" name="prenom" value="<?=$apprenant['prenom'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date de Naissance</label>
                                        <input type="date" name="date_de_naissance" value="<?=$apprenant['date_de_naissance'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Formation de base </label>
                                        <input type="text" name="formation_de_base" value="<?=$apprenant['formation_de_base'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Ville d'origine </label>
                                        <input type="text" name="ville_d_origine" value="<?=$apprenant['ville_d_origine'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_apprenant" class="btn btn-primary">
                                            Update apprenant
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>