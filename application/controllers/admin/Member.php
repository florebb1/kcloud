<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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

    public function menagement()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 회원관리',
        );
        $this->load->view('admin/member/menagement', $data);
    }
    
    public function member_detail()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 회원관리 (상세)',
        );
        $this->load->view('admin/member/member_detail', $data);
    }
    
    public function human()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 휴먼 계정 관리',
        );
        $this->load->view('admin/member/human', $data);
    }
    
    public function ip()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 회원 로그인 IP 제한',
        );
        $this->load->view('admin/member/ip', $data);
    }
    
    public function secession()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 탈퇴회원',
        );
        $this->load->view('admin/member/secession', $data);
    }
    
    public function log()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 회원 로그',
        );
        $this->load->view('admin/member/log', $data);
    }

}