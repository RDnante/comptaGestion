<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login_model extends CI_model {
        public function verification($email,$mdp) {
            $req = "select * from personne where email = '%s' and mdp = '%s'";
            $requete = sprintf($req,$email,$mdp);

        
            $query = $this->db->query($requete);

            $result = $query->result_array();

            $valiny = array();

            foreach ($result as $row) {
                $valiny = $row;
            }

            return $result;
        }
    }
?>