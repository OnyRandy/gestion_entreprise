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
        <?php if(isset($message)): ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>
    <h2>Liste des employés actifs</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Poste/Emploi</th>
                    <th>Date d'embauche</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?php echo $user->matricule; ?></td>
                        <td><?php echo $user->nom; ?></td>
                        <td><?php echo $user->prenom; ?></td>
                        <td><?php echo $user->poste; ?></td>
                        <td><?php echo $user->embauche; ?></td>
                        <td>
                            <a href="<?php echo base_url('supprimer/' . $user->matricule);?>"class="btn btn-danger">Supprimer</a>
                            <a href="<?php echo base_url('modifier/' . $user->matricule); ?>" class="btn btn-primary">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo base_url('ajouter');?>" class="btn btn-success">Ajouter</a>    
        <a href="<?php echo base_url('deconnexion'); ?>" class="btn btn-danger">Déconnexion</a>
    </div>
        
        
        
    
    

        
</body>
</html>