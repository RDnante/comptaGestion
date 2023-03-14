<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompteTiers_model extends CI_model {
    public function complement_code($code) {
        $taille_code = strlen($code);
        $reste = 5 - $taille_code;
        for ($i=0; $i < $reste ; $i++) { 
            $code = $code."0";
        }
        return $code;
    }

    public function insert_compteTiers($general,$numero,$intutile) {
        if ($numero < 0 || strlen($numero) > 5){
            return 0;
        }
        else {
            try {
                $numero = $this->complement_code($numero);
                $req = "insert into comptetiers values(default,%s,%s,%s)";
                $req = sprintf($req,$general,$numero,$this->db->escape($intutile));

                $this->db->query($req);
                echo $req;
                return 1;
            } catch (Throwable $th) {
                return 0;
            }
        }
    }

    public function get_all() {
        $req = "select * from comptetiers";
        $query = $this->db->query($req);
        $valiny = $query->result_array();

        return $valiny;
    }

    public function get_byId($id) {
        $req = "select * from comptetiers where idcomptetiers = %s";
        $req = sprintf($req,$id);
        echo $req;

        $query = $this->db->query($req);
        // $valiny = $query->result_array();

        var_dump($valiny);
    }

    public function update($id,$general,$code,$intutile) {
        if ($code < 0 || strlen($code) > 5){
            return 0;
        }
        else {
            $req = "update comptetiers set idcomptegeneral=%s, code=%s, intitule=%s where idcomptegeneral = %s";
            $code = $this->complement_code($code);
            $req = sprintf($req,$general,$code,$this->db->escape($intutile),$id);
    
            $this->db->query($req);

            echo $req;
        }
    }

    public function delete($id) {
        $req = "delete from comptetiers where idcomptetiers = %s";
        $req = sprintf($req,$id);

        echo $req;
    }
}

?>