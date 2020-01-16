<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller {

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
    public function __construct(){
        parent::__construct();
		$this->load->model("graph_model", "graph");
    }

    public function event_management()
    {
		$total_cnt = $this->graph->Total_cnt();

        $data = array(
            'title' => 'K-Cloud 관리자 - 성능 모니터 현황',
            'total_cnt' => $total_cnt,
        );
        $this->load->view('admin/monitor/event_management', $data);
    }

    public function diagnosis()
    {
		$total_cnt = $this->graph->Total_cnt();
        $data = array(
            'title' => 'K-Cloud 관리자 - 이벤트 진단',
            'total_cnt' => $total_cnt,
        );
        $this->load->view('admin/monitor/diagnosis', $data);
    }

    public function editGraph($idx=false){
        if(!$idx) redirect('/', 'refresh'); // url 헬퍼 autoload

        $SQL = "
			SELECT
			*
			FROM g5_graph AS gp
			LEFT OUTER JOIN g5_member AS mb ON (mb.mb_no=gp.gp_mb_no)
			WHERE gp_id='".$idx."'
		";
        $query = $this->db->query($SQL);

        if($query->num_rows() > 0){
            $row = $query->row_array();
        }

        $data = array(
            'title' => 'K-Cloud 관리자 - 성능 모니터 현황',
            'row' => $row
        );
        $this->load->view('admin/monitor/edit_graph', $data);
    }


    public function member_detail()
    {
        $data = array(
            'title' => 'K-Cloud 관리자 - 성능 모니터 현황',
        );
        $this->load->view('admin/monitor/edit_graph', $data);
    }

}