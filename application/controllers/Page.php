<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
	
    public function purpose()
    {
        $data = array(
            'title' => 'K-Cloud - 목적 및 법적 근거',
        );
        $this->load->view('page/purpose', $data);
    }
    public function verification()
    {
        $data = array(
            'title' => 'K-Cloud - 품질/성능 검증 사업',
        );
        $this->load->view('page/verification', $data);
    }
    
    
    public function availability()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(가용성)',
        );
        $this->load->view('page/availability', $data);
    }
    public function responsiveness()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(응답성)',
        );
        $this->load->view('page/responsiveness', $data);
    }
    public function scalability()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(확장성)',
        );
        $this->load->view('page/scalability', $data);
    }
    public function responsibility()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(신뢰성)',
        );
        $this->load->view('page/responsibility', $data);
    }
    public function persistence()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(서비스 지속성)',
        );
        $this->load->view('page/persistence', $data);
    }
    public function support()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(서비스 지원)',
        );
        $this->load->view('page/support', $data);
    }
    public function customer()
    {
        $data = array(
            'title' => 'K-Cloud - 검증기준(고객 대응)',
        );
        $this->load->view('page/customer', $data);
    }
    
    
	public function guide()
    {
        $data = array(
            'title' => 'K-Cloud - 온라인 신청 안내',
        );
        $this->load->view('page/guide', $data);
    }
	public function application()
    {
        $id = $this->session->userdata('userId');
        if($id == "" || $id == null) {
            redirect('member/login?url=/page/application');
        }else {
            redirect('mypage/online');
        }

    }
    
    
    public function online()
    {
        $data = array(
            'title' => 'K-Cloud - 온라인 신청',
        );
        $this->load->view('mypage/online', $data);
    }
    
    public function moniter()
    {
        $data = array(
            'title' => 'K-Cloud - 성능 모니터',
        );
        $this->load->view('page/moniter', $data);
    }
    public function report()
    {
        $data = array(
            'title' => 'K-Cloud - 취약점 보고서',
        );
        $this->load->view('page/report', $data);
    }
    public function qna()
    {
        $data = array(
            'title' => 'K-Cloud - 문의하기',
        );
        $this->load->view('page/qna', $data);
    }


    public function iaas()
    {
        $data = array(
            'title' => 'K-Cloud - 확인 현황(IaaS)',
        );
        $this->load->view('page/iaas', $data);
    }
    public function paas()
    {
        $data = array(
            'title' => 'K-Cloud - 확인 현황(PaaS)',
        );
        $this->load->view('page/paas', $data);
    }
    public function saas()
    {
        $data = array(
            'title' => 'K-Cloud - 확인 현황(SaaS)',
        );
        $this->load->view('page/saas', $data);
    }
    public function etc()
    {
        $data = array(
            'title' => 'K-Cloud - 확인 현황(기타)',
        );
        $this->load->view('page/etc', $data);
    }
    public function details() {
        $data = array(
            'title' => 'K-Cloud - 확인 현황',
        );
        $this->load->view('page/details', $data);
    }

    public function sitemap() {
        $data = array(
            'title' => 'K-Cloud - 사이트맵',
        );
        $this->load->view('page/sitemap', $data);
    }

    public function privacy() {
        $data = array(
            'title' => 'K-Cloud - 개인정보처리방침',
        );
        $this->load->view('page/privacy', $data);
    }
    public function terms() {
        $data = array(
            'title' => 'K-Cloud - 서비스 이용약관',
        );
        $this->load->view('page/terms', $data);
    }
}