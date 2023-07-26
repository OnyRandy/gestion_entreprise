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
        <h1 class="display-4">ACCUEIL</h1>
        <?php 
            $matricule = $this->session->userdata('matricule');
            $code_acces = $this->session->userdata('code_acces');
        ?>
        <div class="row">
            <div class="col-md-6">
                <h4>Matricule :</h4>
                <p class="lead"><?php echo $matricule; ?></p>
            </div>
            <div class="col-md-6">
                <h4>Code d'accès :</h4>
                <p class="lead"><?php echo $code_acces; ?></p>
            </div>
        </div>
        <a href="<?php echo base_url('deconnexion'); ?>" class="btn btn-danger">Déconnexion</a>
    </div>
</div>
        
        
        
    
    

        
</body>
</html>