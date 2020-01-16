<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    
    }
	public function index()
	{
		$data = array(
			'title' => 'K-Cloud 품질&CenterDot;성능 검증 지원 Portal',
			'info' => $this->api_model->getBanner()
		);
		// print_r($data);
		$this->load->view('index', $data);
	}

	public function loginCheck(){
		// if($this->session->user_data("userSeq") == ""){
		$newdata = array(
            'userSeq'  => $this->input->get("userSeq"),
            'userName'     => $this->input->get("userName"),
            'userId' => $this->input->get("userId")
        );

        $this->session->set_userdata($newdata);
		// }

	}

}