<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function inscription()
	{
		$this->load->view('inscription');
	}
	public function authentification()
	{
		$this->load->view('authentification');
	}
	public function ajout_utilisateur()
	{
		$matricule = $this->input->post('matricule');
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$embauche = $this->input->post('embauche');
		$poste = $this->input->post('poste');
		$email = $this->input->post('email');

		$this->load->model('Utilisateurs_model');
		
		if ($this->Utilisateurs_model->matriculeExisteDeja($matricule)) {
			$data['error_message'] = 'Le matricule existe déjà, veuillez en choisir un autre.';
			$this->load->view('inscription', $data);
		} else {
			
			$this->Utilisateurs_model->ajout_utilisateur($matricule, $nom, $prenom, $embauche, $poste, $email);
			$data['utilisateurs'] = $this->Utilisateurs_model->get_dernier_utilisateurs_ajoute();
			$this->load->view('success', $data);
		}


	}
	public function ajout_nouveau_utilisateur()
	{
		$matricule = $this->input->post('matricule');
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$embauche = $this->input->post('embauche');
		$poste = $this->input->post('poste');
		$email = $this->input->post('email');

		$this->load->model('Utilisateurs_model');

		if ($this->Utilisateurs_model->matriculeExisteDeja($matricule)) {
			$data['error_message'] = 'Le matricule existe déjà, veuillez en choisir un autre.';
			$this->load->view('inscription', $data);
		} else {
			$this->Utilisateurs_model->ajout_utilisateur($matricule, $nom, $prenom, $embauche, $poste, $email);
			
			$this->load->model('Utilisateurs_model');
		
			$resultat['users'] = $this->Utilisateurs_model->get_all_utilisateurs();
				
			$this->load->view('page_admin',$resultat);
			
			
		}


/*
		$this->Utilisateurs_model->ajout_utilisateur($matricule,$nom,$prenom ,$embauche,$poste , $email);

		$this->load->model('Utilisateurs_model');
		
		$resultat['users'] = $this->Utilisateurs_model->get_all_utilisateurs();
				
		$this->load->view('page_admin',$resultat); */
	}
	public function success() {
        $this->load->view('success');
    }
	public function connexion() {
        $matricule = $this->input->post('matricule');
        $code_acces = $this->input->post('code_acces');

		$this->load->model('Utilisateurs_model');
		$user = $this->Utilisateurs_model->verification($matricule, $code_acces);

		if ($user) {
			$this->session->set_userdata('matricule', $user['matricule']);
			$this->session->set_userdata('code_acces', $user['code_acces']);
			
			if($user['poste'] === 'employe'){
				$this->load->view('accueil');
			} elseif ($user['poste'] === 'admin') {
				$this->load->model('Utilisateurs_model');
		
				$resultat['users'] = $this->Utilisateurs_model->get_all_utilisateurs();
				
				
				$this->load->view('page_admin',$resultat);
			}			
		} else {
			$data['login_error'] = 'Nom d\'utilisateur ou mot de passe incorrect.';
			$this->load->view('authentification',$data);
		}

    }
	public function accueil() {
        $this->load->view('accueil');
    }
	public function ajouter() {
		$this->load->view('ajouter');
    }
	public function supprimer($matricule) {
        $this->load->model('Utilisateurs_model');
        $this->Utilisateurs_model->supprimerLigne($matricule);

		$this->load->model('Utilisateurs_model');
		$resultat['users'] = $this->Utilisateurs_model->get_all_utilisateurs();

        $this->load->view('page_admin',$resultat);
    }
	public function modifier($matricule) {
		$this->load->model('Utilisateurs_model');

		$data['user'] = $this->Utilisateurs_model->getUserByMatricule($matricule);
	
		$this->load->view('modifier_user', $data);
	}
	public function sauvegarder($matricule) {
		$this->load->model('Utilisateurs_model');

		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$embauche = $this->input->post('embauche');
		$poste = $this->input->post('poste');
		$email = $this->input->post('email');
		
		$this->Utilisateurs_model->mettreAJourUtilisateur($matricule, $nom, $prenom,$embauche,$poste,$email);
	
		$this->load->model('Utilisateurs_model');
		$resultat['users'] = $this->Utilisateurs_model->get_all_utilisateurs();

        $this->load->view('page_admin',$resultat);
	}
	public function deconnexion() {
		$this->session->sess_destroy();
	
		$this->load->view('authentification');
	}
}
