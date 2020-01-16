<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmenu extends CI_Controller {

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

    public function rights_management()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 관리자 권한 관리',
        );
        $this->load->view('admin/adminmenu/rights_management', $data);
    }
    
    public function ip_management()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 관리자 접근 IP 설정',
        );
        $this->load->view('admin/adminmenu/ip_management', $data);
    }
    
    public function total_log()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 관리자 통합 로그',
        );
        $this->load->view('admin/adminmenu/total_log', $data);
    }
    
    public function timeout_setting()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 로그인 세션 타임 아웃 설정',
        );
        $this->load->view('admin/adminmenu/timeout_setting', $data);
    }
    
    public function edm_send()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - eDM 발송',
        );
        $this->load->view('admin/adminmenu/edm_send', $data);
    }
    
    public function edm_management()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - eDM 양식 관리',
        );
        $this->load->view('admin/adminmenu/edm_management', $data);
    }
    
    public function edm_log()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - eDM 발송 로그',
        );
        $this->load->view('admin/adminmenu/edm_log', $data);
    }
    
    public function edm_log_detail()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - eDM 발송 로그 (상세)',
        );
        $this->load->view('admin/adminmenu/edm_log_detail', $data);
    }
    
    public function banner_management()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 배너 관리',
        );
        $this->load->view('admin/adminmenu/banner_management_write', $data);
    }

}