<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['inscription'] = 'Welcome/inscription';

$route['supprimer/(:any)'] = 'Welcome/supprimer/$1';

$route['modifier/(:any)'] = 'Welcome/modifier/$1';

$route['sauvegarder/(:any)'] = 'Welcome/sauvegarder/$1';

$route['modifier_user'] = 'Welcome/modifier_user';

$route['deconnexion'] = 'Welcome/deconnexion';
 

$route['ajouter'] = 'Welcome/ajouter';

$route['authentification'] = 'Welcome/authentification';

$route['validation'] = 'Welcome/connexion';

$route['accueil'] = 'Welcome/accueil';

$route['page_admin'] = 'Welcome/page_admin';

$route['ajout_utilisateur'] = 'Welcome/ajout_utilisateur';

$route['ajout_nouveau_utilisateur'] = 'Welcome/ajout_nouveau_utilisateur';

$route['inscription/success'] = 'Welcome/success';


