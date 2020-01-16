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
	
    public function login()
    {
        $data = array(
            'title' => 'K-Cloud - 로그인',
        );
        $this->load->view('member/login', $data);
    }
    public function register()
    {
        $data = array(
            'title' => 'K-Cloud - 회원가입 약관동의',
        );
        $this->load->view('member/register', $data);
    }
    public function register_form()
    {
        $data = array(
            'title' => 'K-Cloud - 회원가입',
        );
        $this->load->view('member/register_form', $data);
    }
    public function register_email()
    {
        $data = array(
            'title' => 'K-Cloud - 회원가입 이메일인증',
        );
        $this->load->view('member/register_email', $data);
    }
    public function register_result()
    {
        $data = array(
            'title' => 'K-Cloud - 회원가입 결과',
        );
        $this->load->view('member/register_result', $data);
    }
    
    
    public function find_id()
    {
        $data = array(
            'title' => 'K-Cloud - 아이디찾기',
        );
        $this->load->view('member/find_id', $data);
    }
    public function find_id_result()
    {
        $data = array(
            'title' => 'K-Cloud - 아이디찾기 결과',
        );
        $this->load->view('member/find_id_result', $data);
    }
    public function find_pw()
    {
        $data = array(
            'title' => 'K-Cloud - 비밀번호찾기',
        );
        $this->load->view('member/find_pw', $data);
    }
    public function find_pw_result()
    {
        $data = array(
            'title' => 'K-Cloud - 비밀번호찾기 결과',
        );
        $this->load->view('member/find_pw_result', $data);
    }
   
    
    public function secession()
    {
        $data = array(
            'title' => 'K-Cloud - 회원탈퇴',
        );
        $this->load->view('member/secession', $data);
    }
    public function secession_info()
    {
        $data = array(
            'title' => 'K-Cloud - 회원탈퇴 유의사항 확인',
        );
        $this->load->view('member/secession_info', $data);
    }
    public function secession_result()
    {
        $data = array(
            'title' => 'K-Cloud - 회원탈퇴 결과',
        );
        $this->load->view('member/secession_result', $data);
    }


}