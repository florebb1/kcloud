<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

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
	/* 2019-09-13 yss add Start */
    public function __construct(){
        parent::__construct();
		$this->load->model("graph_model", "graph");
    }
	/* 2019-09-13 yss add End */

    public function index()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage";
            redirect('/member/login?url='.$url);
        }else {
			$select_graph = $this->graph->GetGroup($userSeq); // $userSeq 에 등록된 서버(그래프 그룹)정보를 select option 으로 가져온다.

            $data = array(
                'title' => 'K-Cloud - 마이페이지',
                'select_graph' => $select_graph
            );
            $this->load->view('/mypage/index', $data);
        }
    }


    public function pop()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage";
            redirect('/member/login?url='.$url);
        }else {
			$select_graph = $this->graph->GetGroup2($userSeq); // $userSeq 에 등록된 서버(그래프 그룹)정보를 select option 으로 가져온다.

            $data = array(
                'title' => 'K-Cloud - 마이페이지',
                'select_graph' => $select_graph
            );
            $this->load->view('/mypage/pop', $data);
        }
    }


    public function modify()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/modify";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 회원정보수정',
            );
            $this->load->view('/mypage/modify', $data);
        }
    }

    public function online()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/online";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 온라인 신청',
            );
            $this->load->view('/mypage/online', $data);
        }
    }

    public function onlineList()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/onlineList";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 온라인 신청 리스트',
            );
            $this->load->view('/mypage/list', $data);
        }
    }

    public function monitor()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/monitor";
            redirect('/member/login?url='.$url);
        }else {
			$select_graph = $this->graph->GetGroup($userSeq); // $userSeq 에 등록된 서버(그래프 그룹)정보를 select option 으로 가져온다.

            $data = array(
                'title' => 'K-Cloud - 성능 모니터',
                'select_graph' => $select_graph
            );
            $this->load->view('/mypage/monitor', $data);
        }
    }
    public function log()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/log";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 로그 상세',
            );
            $this->load->view('/mypage/log', $data);
        }
    }

    public function report()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/report";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 취약점 보고서',
            );
            $this->load->view('/mypage/report', $data);
        }
    }

    public function qna()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/qna";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 문의하기',
            );
            $this->load->view('/mypage/qna', $data);
        }
    }
    public function confirm()
    {
        $userSeq = $this->session->userdata('userSeq');
        if(empty($userSeq)) {
            $this->load->helper('url');
            $url = "/mypage/qna";
            redirect('/member/login?url='.$url);
        }else {
            $data = array(
                'title' => 'K-Cloud - 확인현황',
            );
            $this->load->view('/mypage/confirm', $data);
        }
    }
}