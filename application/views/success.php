<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> GESTION ENTREPRISE	</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4">Informations sur votre coordonnees:</h1>
        <div class="row">
            <div class="col-md-6">
                <h4>Matricule :</h4>
                <p class="lead"><?php echo $utilisateurs->matricule; ?></p>

                <h4>Nom :</h4>
                <p class="lead"><?php echo $utilisateurs->nom; ?></p>

                <h4>Prénom :</h4>
                <p class="lead"><?php echo $utilisateurs->prenom; ?></p>
            </div>
            <div class="col-md-6">
                <h4>Embauche :</h4>
                <p class="lead"><?php echo $utilisateurs->embauche; ?></p>

                <h4>Poste :</h4>
                <p class="lead"><?php echo $utilisateurs->poste; ?></p>

                <h4>Email :</h4>
                <p class="lead"><?php echo $utilisateurs->email; ?></p>

                <h4>Code d'accès :</h4>
                <p class="lead"><?php echo $utilisateurs->code_acces; ?></p>
            </div>
        </div>
        <div class="p-4">
            <a href="<?php echo base_url('authentification'); ?>" class="btn btn-primary">S'authentifier</a>
        </div>
    </div>
</div> 
        
</body>
</html>