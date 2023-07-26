<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GESTION ENTREPRISE</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4">Modification</h1>
                <form method="post" action="<?php echo base_url('sauvegarder/' . $user->matricule); ?>">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" name="nom" value="<?php echo $user->nom; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" class="form-control" name="prenom" value="<?php echo $user->prenom; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="embauche">Date d'embauche:</label>
                        <input type="date" class="form-control" value="<?php echo $user->embauche; ?>" name="embauche" required>
                    </div>
                    <div class="form-group">
                        <label for="poste">Poste ou emploi:</label>
                        <select class="custom-select" name="poste">
                            <option value="employe" <?php echo ($user->poste === 'employe') ? 'selected' : ''; ?>>Employé</option>
                            <option value="admin" <?php echo ($user->poste === 'admin') ? 'selected' : ''; ?>>Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="<?php echo $user->email; ?>" name="email" required>
                    </div>

                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
