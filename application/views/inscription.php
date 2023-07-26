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
        <?php if(isset($error_message)): ?>
            <div class="alert alert-success"><?php echo $error_message; ?></div>
        <?php endif; ?>
		<h1>Inscription</h1>
		<form action="<?= base_url('ajout_utilisateur') ?>" method="post">
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" id="matricule" name="matricule" required>
            </div>
            <div class="form-group">
                <label for="nom ">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
			<div class="form-group">
                <label for="prenom ">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
			<div class="form-group">
                <label for="embauche ">Date d'embauche:</label>
                <input type="date" class="form-control" id="embauche" name="embauche" required>
            </div>
			<div class="form-group">
                <label for="poste ">Poste ou emploi:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="poste">Options</label>
                    </div>
                    <select class="custom-select" id="poste" name="poste">
                        <option selected>Choisissez</option>
                        <option value="employe">Employé</option>
                        <option value="admin">Admin</option>
                    </select>
                    </div>
            </div>
			<div class="form-group">
                <label for="email ">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
	</div>
</body>
</html>