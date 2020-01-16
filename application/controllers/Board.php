<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

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
	
    public function notice()
    {
        $data = array(
            'title' => 'K-Cloud - 공지사항',
        );
        $this->load->view('board/notice', $data);
    }
    public function notice_view()
    {
        $data = array(
            'title' => 'K-Cloud - 공지사항',
        );
        $this->load->view('board/notice_view', $data);
    }


    public function pds()
    {
        $data = array(
            'title' => 'K-Cloud - 자료실',
        );
        $this->load->view('board/pds', $data);
    }
    public function pds_view()
    {
        $data = array(
            'title' => 'K-Cloud - 자료실',
        );
        $this->load->view('board/pds_view', $data);
    }
        
    
    public function faq()
    {
        $data = array(
            'title' => 'K-Cloud - FAQ',
        );
        $this->load->view('board/faq', $data);
    }
    public function faq_view()
    {
        $data = array(
            'title' => 'K-Cloud - FAQ',
        );
        $this->load->view('board/faq_view', $data);
    }



}