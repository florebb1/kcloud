<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirm extends CI_Controller {

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

    public function iaas()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 확인 현황 (IaaS)',
        );
        $this->load->view('admin/confirm/iaas', $data);
    }
    
    public function paas()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 확인 현황 (PaaS)',
        );
        $this->load->view('admin/confirm/paas', $data);
    }
    
    public function saas()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 확인 현황 (SaaS)',
        );
        $this->load->view('admin/confirm/saas', $data);
    }
    
    public function etc()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 확인 현황 (기타)',
        );
        $this->load->view('admin/confirm/etc', $data);
    }
    public function write()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 확인 현황 등록',
        );
        $this->load->view('admin/confirm/write', $data);
    }

}