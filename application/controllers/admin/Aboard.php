<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboard extends CI_Controller {

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
            'title' => 'K-Cloud 관리자 - 공지사항',
        );
        $this->load->view('admin/aboard/notice', $data);
    }
    
    public function notice_write()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 공지사항 (쓰기/수정)',
        );
        $this->load->view('admin/aboard/notice_write', $data);
    }
    
    public function pds()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 자료실',
        );
        $this->load->view('admin/aboard/pds', $data);
    }
    
    public function pds_write()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 자료실 (쓰기/수정)',
        );
        $this->load->view('admin/aboard/pds_write', $data);
    }
    
    public function faq()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - FAQ',
        );
        $this->load->view('admin/aboard/faq', $data);
    }
    
    public function faq_write()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - FAQ (쓰기/수정)',
        );
        $this->load->view('admin/aboard/faq_write', $data);
    }

}