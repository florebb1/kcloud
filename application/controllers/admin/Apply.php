<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {

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

    public function online_apply()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 온라인 신청 관리',
        );
        $this->load->view('admin/apply/online_apply', $data);
    }
    
    public function online_apply_detail()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 온라인 신청 관리 (상세)',
        );
        $this->load->view('admin/apply/online_apply_detail', $data);
    }
    
    public function apply_log()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 신청 처리 로그',
        );
        $this->load->view('admin/apply/apply_log', $data);
    }


}