<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> GESTION ENTREPRISE	</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
	<div class="row">
		<h1 class="text-center">GESTION ENTREPRISE</h1>
		<h3>Veuiller choisir : </h3>
	</div>
	<div class="container justify-content-center mt-5">
	<a href="<?php echo base_url('inscription');?>" class="btn btn-primary">Inscription</a>
	<a href="<?php echo base_url('authentification'); ?>" class="btn btn-primary">S'authenthifier</a>
	</div>
</body>
</html>
