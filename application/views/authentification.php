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
	<?php if(isset($login_error)): ?>
        <div class="alert alert-danger"><?php echo $login_error; ?></div>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Connexion</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('validation') ?>" method="post">
							<div class="form-group">
								<label for="matricule">Matricule :</label>
								<input type="text" class="form-control" name="matricule" required>
							</div>
							<div class="form-group">
								<label for="code_acces">Code acces :</label>
								<input type="password" class="form-control" name="code_acces" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Se connecter</button>
						</form> 
                    </div>
					
                </div>
            </div>
        </div>
	</div>
</body>
</html>