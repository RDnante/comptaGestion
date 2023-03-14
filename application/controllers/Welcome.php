 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->session->set_userdata("user","test");
		// $this->session->sess_destroy();
		$this->load->model("Comptegeneral_model");

		$general["general"] = $this->Comptegeneral_model->get_all();
		$this->load->view('acceuil1',$general);
	}

	public function test(){
		$this->load->model("Comptegeneral_model");
		$numero =$this->input->post("numero");
		$intituler = $this->input->post("intituler");
		// $valiny = $this->Comptegeneral_model->insert_compteGeneral($numero,$intituler);
	// 	echo $valiny;

		// $this->Comptegeneral_model->get_all();

		$this->Comptegeneral_model->get_byId($numero);
	// 	echo "<br>";


		// $this->Comptegeneral_model->update(1,$numero,$intituler);
	// 	echo "<br>";

		// $this->Comptegeneral_model->delete(0);
	}

	public function tiers() {
		$this->load->model("CompteTiers_model");
		$general = $this->input->post("general");
		$code = $this->input->post("numero");
		$nom = $this->input->post("intituler");

		$this->CompteTiers_model->update(1,$general,$code,$nom);
	}
}
