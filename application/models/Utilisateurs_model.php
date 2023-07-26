<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateurs_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function ajout_utilisateur($matricule,$nom,$prenom ,$embauche,$poste , $email) {
        $this->load->helper('string');

        $code_acces = random_string('alnum', 8);

        $data = array(
            'matricule' => $matricule,
            'nom' => $nom,
            'prenom' => $prenom,
            'embauche' => $embauche,
            'poste' => $poste,
            'email' =>  $email,
            'code_acces' => $code_acces
        );

        $this->db->insert('utilisateurs', $data);
    }
    public function get_dernier_utilisateurs_ajoute(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('utilisateurs',1);
        return $query->row();
    }
    public function verification($matricule, $code_acces) {
        $query = $this->db->get_where('utilisateurs', array('matricule' => $matricule, 'code_acces' => $code_acces));
        return $query->row_array(); 
    }
    public function get_all_utilisateurs(){
        $query = $this->db->get('utilisateurs');
        return $query->result();
    }
    public function supprimerLigne($matricule) {
        $this->db->where('matricule', $matricule);
        $this->db->delete('utilisateurs');
    }
    public function getUserByMatricule($matricule) {
        $query = $this->db->get_where('utilisateurs', array('matricule' => $matricule));
        return $query->row();
    }
    public function mettreAJourUtilisateur($matricule, $nom, $prenom,$emabauche,$poste,$email ) {

        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'embauche' => $emabauche,
            'poste' => $poste,
            'email' => $email     
        );
    
        $this->db->where('matricule', $matricule);
        $this->db->update('utilisateurs', $data);
    }
    public function matriculeExisteDeja($matricule) {
        $query = $this->db->get_where('utilisateurs', array('matricule' => $matricule));
        return $query->num_rows() > 0;
    }
}