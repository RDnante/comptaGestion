<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function index() {
        $this->load->library("upload");

        $config["upload_path"] = "./uploads/";
        echo $config["upload_path"];
        $config["allowed_types"] = "gif|jpg|png|pdf";
        $confiig["max_size"] = "10000";
        $config["max_width"] = "1920";
        $config["max_height"] = "1920";

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            echo "tsy nety ny upload";
            echo $error['error'];
        }
        else {
            $data = array('upload_data' => $this->upload->data());
            echo "nety ny upload";
            echo $data['upload_data']['file_name'];
            var_dump($data['upload_data']);
        }
    }
}

?>