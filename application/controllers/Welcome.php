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
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

	public function get_data() {

		$this->load->database();
		$query = $this->db->select("*")
					->from("register")
					->order_by("id", "DESC")
					->get()
					->result();
		$this->db->close();
		
		$data["status"] = 1;
		$data["msg"] = "success";
		$data["result"] = $query;
		
		echo json_encode($data);
	}

	public function add_data() {
		$params = $this->input->post();

		$dataInsert = array(
			'first_name' => $params["first_name"],
			'last_name' => $params["last_name"]
		);

		$this->load->database();
		if ($this->db->insert("register", $dataInsert)) {
			$data["status"] = 1;
			$data["msg"] = "success";
			echo json_encode($data);
		}
		$this->db->close();
	}
}
