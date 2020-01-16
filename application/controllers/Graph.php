<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller{
	public function __construct(){
        parent::__construct();
		$this->load->model("graph_model", "graph");

    }
    public function mypage(){
        $userSeq = $this->session->userdata('userSeq');
		$gp_id = $this->input->get("gp_id");

        if(!empty($userSeq)){
			$graph_data = $this->graph->GetGraph($userSeq,$gp_id); // $userSeq 에 관련된 그래프를 가져온다.

			echo json_encode($graph_data);
        }
    }

    public function List_ajax01($page=0){
		$gp_type = $this->input->post('gp_type');

		$WHERE_arr = Array(); // 검색조건 시작.

        if(trim($this->input->post('sel_value'))!=""){ // 검색어가 있으면.
            $WHERE_arr[] = "`".$this->input->post('sel_subject')."` LIKE '%".trim($this->input->post('sel_value'))."%'";
        }


        if(count($WHERE_arr) > 0){
            $WHERE = " WHERE ".implode(" AND ",$WHERE_arr);
        }else{
            $WHERE = "";
        }

        $SQL = "SELECT *
            FROM g5_graph AS gp
			LEFT OUTER JOIN g5_member AS mb ON (mb.mb_no=gp.gp_mb_no)
            ".$WHERE."
            ORDER BY gp_id ASC
        ";

        $query = $this->db->query($SQL);
        $total = $query->num_rows();


        $list_ajax = "/graph/list_ajax01";
        $per_page = $this->input->post('per_page')? $this->input->post('per_page') : 25; // 페이지당 리스트 갯수.


        // 페이지네이션 시작.
        $this->load->library('pagination');
        $config = Array();

        $config['base_url'] = $list_ajax;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = "<div class='pagination'>";
        $config['full_tag_close'] = '</div>';
        $config['prev_link'] = 'Prev';
        $config['next_link'] = 'Next';
        $config['cur_tag_open'] = "<a href='#' class='active'>";
        $config['cur_tag_close'] = '</a>';

        $this->pagination->initialize($config);

        $pagination_html = $this->pagination->create_links();
        // 페이지네이션 끝.

        if($page != 0){
            $offset = ($page-1) * $per_page;
        }else{
            $offset = 0;
        }

        $LIMIT = " LIMIT ".$offset.",".$per_page;

        $sql_A = $SQL.$LIMIT;
        $query = $this->db->query($sql_A);

        $HTML_CODE = '';
        //$HTML_CODE .= '<div>'.$sql_A.'</div>';
		switch($gp_type){
			case('1'):
				$HTML_CODE .= '<div class="bd-callout bd-callout-info">가용성</div>';
				break;
			case('2'):
				$HTML_CODE .= '<div class="bd-callout bd-callout-info">응답시간</div>';
				break;
			case('3'):
				$HTML_CODE .= '<div class="bd-callout bd-callout-info">탄력성</div>';
				break;
			case('4'):
				$HTML_CODE .= '<div class="bd-callout bd-callout-info">이벤트 알림</div>';
				break;
			case('5'):
				$HTML_CODE .= '<div class="bd-callout bd-callout-info">Interrupt 발생</div>';
				break;
			default:
				break;
		}

        $HTML_CODE .= '<table class="table table-i">';
            $HTML_CODE .= '<thead>';
                $HTML_CODE .= '<tr>';
                    $HTML_CODE .= '<th style="text-align:center;">No.</th>';
                    $HTML_CODE .= '<th style="text-align:center;">단체명/서비스명</th>';
                    $HTML_CODE .= '<th style="text-align:center;">호스트명</th>';
					switch($gp_type){
						case('1'): // 가용성
							$HTML_CODE .= '<th style="text-align:center;">일 가용률</th>';
							$HTML_CODE .= '<th style="text-align:center;">주 가용률</th>';
							$HTML_CODE .= '<th style="text-align:center;">월 가용률</th>';
							$HTML_CODE .= '<th style="text-align:center;">년 가용률</th>';
							break;
						case('2'): // 응답시간
							$HTML_CODE .= '<th style="text-align:center;">현재</th>';
							$HTML_CODE .= '<th style="text-align:center;">평균</th>';
							$HTML_CODE .= '<th style="text-align:center;">최저</th>';
							$HTML_CODE .= '<th style="text-align:center;">최대</th>';
							break;
                        /*
						case('3'): // 탄력성
							$HTML_CODE .= '<th style="text-align:center;">최근</th>';
							$HTML_CODE .= '<th style="text-align:center;">평균</th>';
							$HTML_CODE .= '<th style="text-align:center;">최대</th>';
							$HTML_CODE .= '<th style="text-align:center;">최저</th>';
							break;
                        */
						case('4'): // 이벤트 알림 지연
							$HTML_CODE .= '<th style="text-align:center;">현재</th>';
							$HTML_CODE .= '<th style="text-align:center;">정상</th>';
							$HTML_CODE .= '<th style="text-align:center;">장애</th>';
							$HTML_CODE .= '<th style="text-align:center;">전체</th>';
							break;
						case('5'): // Interrupt 발생
							$HTML_CODE .= '<th style="text-align:center;">현재</th>';
							$HTML_CODE .= '<th style="text-align:center;">평균</th>';
							$HTML_CODE .= '<th style="text-align:center;">최저</th>';
							$HTML_CODE .= '<th style="text-align:center;">최대</th>';
							break;
						default:
							break;
					}
					$HTML_CODE .= '<th style="text-align:center;">수정 / 삭제</th>';
                $HTML_CODE .= '</tr>';
            $HTML_CODE .= '</thead>';
            $HTML_CODE .= '<tbody>';
                if($query->num_rows() > 0){
                    $NO_IDX = $total - $offset;

                    foreach($query->result_array() AS $val){
						$graph_data = $this->graph->GetGraph($val['gp_mb_no'],$val['gp_id']); // $userSeq 에 관련된 그래프를 가져온다.

                        $HTML_CODE .= '<tr>';
                            $HTML_CODE .= '<td style="text-align:center;color:#CCCCCC;background-color:#212124;">'.$NO_IDX.'</td>';
                            $HTML_CODE .= '<td style="text-align:center;color:#CCCCCC;background-color:#212124;">'.$val['mb_name'].'</td>';
                            $HTML_CODE .= '<td style="text-align:center;color:#CCCCCC;background-color:#212124;">';
                                $HTML_CODE .= $val['gp_hostname'];
                                $HTML_CODE .= '<br><a href="'.$graph_data['ALL'].'" target="_blank" style="color:#CCCCCC;">자세히보기</a>';
                            $HTML_CODE .= '</td>';
							switch($gp_type){
								case('1'): // 가용성
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['AA_1'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['AA_2'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['AA_3'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['AA_4'].'</td>';
									break;
								case('2'): // 응답시간
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['BB_1'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['BB_2'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['BB_3'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['BB_4'].'</td>';
									break;
                                /*
								case('3'): // 탄력성
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['CC_1'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['CC_2'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['CC_3'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['CC_4'].'</td>';
									break;
                                */
								case('4'): // 이벤트 알림 지연
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['DD_1'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['DD_2'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['DD_3'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['DD_4'].'</td>';
									break;
								case('5'): // Interrupt 발생
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['EE_1'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['EE_2'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['EE_3'].'</td>';
									$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['EE_4'].'</td>';
									break;
								default:
									break;
							}
							$HTML_CODE .= '<td style="text-align:center;background-color:#212124;">';
							$HTML_CODE .= '<a href="/admin/monitor/editGraph/'.$val['gp_id'].'" class="badge badge-success" title="수정하기">Edit</a> &nbsp; ';
							$HTML_CODE .= '<a href="#" onclick=\'graph_del("'.$val['gp_id'].'");\' class="badge badge-danger" title="삭제하기">Del</a>';
							$HTML_CODE .= '</td>';
                        $HTML_CODE .= "</tr>";
                        $NO_IDX--;
                    }
                }else{
                    $HTML_CODE .= '<tr>';
                        $HTML_CODE .= '<td colspan="8" style="text-align:center;">내용이 없습니다.</td>';
                    $HTML_CODE .= '</tr>';
                }
            $HTML_CODE .= '</tbody>';
        $HTML_CODE .= '</table>';


        $data = Array(
            'list_html' => $HTML_CODE,
            'pagination_html' => $pagination_html
        );
        echo json_encode($data);
    }

    public function List_ajax02($page=0){
		$WHERE_arr = Array(); // 검색조건 시작.

        if(trim($this->input->post('sel_value'))!=""){ // 검색어가 있으면.
            $WHERE_arr[] = "`".$this->input->post('sel_subject')."` LIKE '%".trim($this->input->post('sel_value'))."%'";
        }


        if(count($WHERE_arr) > 0){
            $WHERE = " WHERE ".implode(" AND ",$WHERE_arr);
        }else{
            $WHERE = "";
        }

        $SQL = "SELECT *
            FROM g5_graph AS gp
			LEFT OUTER JOIN g5_member AS mb ON (mb.mb_no=gp.gp_mb_no)
            ".$WHERE."
            ORDER BY gp_id ASC
        ";

        $query = $this->db->query($SQL);
        $total = $query->num_rows();


        $list_ajax = "/graph/list_ajax02";
        $per_page = $this->input->post('per_page')? $this->input->post('per_page') : 25; // 페이지당 리스트 갯수.


        // 페이지네이션 시작.
        $this->load->library('pagination');
        $config = Array();

        $config['base_url'] = $list_ajax;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = "<div class='pagination'>";
        $config['full_tag_close'] = '</div>';
        $config['prev_link'] = 'Prev';
        $config['next_link'] = 'Next';
        $config['cur_tag_open'] = "<a href='#' class='active'>";
        $config['cur_tag_close'] = '</a>';

        $this->pagination->initialize($config);

        $pagination_html = $this->pagination->create_links();
        // 페이지네이션 끝.

        if($page != 0){
            $offset = ($page-1) * $per_page;
        }else{
            $offset = 0;
        }

        $LIMIT = " LIMIT ".$offset.",".$per_page;

        $sql_A = $SQL.$LIMIT;
        $query = $this->db->query($sql_A);

        $HTML_CODE = '';
        //$HTML_CODE .= '<div>'.$sql_A.'</div>';
        $HTML_CODE .= '<div class="bd-callout bd-callout-info">이벤트 진단</div>';

        $HTML_CODE .= '<table class="table table-i">';
            $HTML_CODE .= '<thead>';
                $HTML_CODE .= '<tr>';
                    $HTML_CODE .= '<th style="text-align:center;">No.</th>';
                    $HTML_CODE .= '<th style="text-align:center;">단체명/서비스명</th>';
                    $HTML_CODE .= '<th style="text-align:center;">호스트명</th>';
                    $HTML_CODE .= '<th style="text-align:center;">내용</th>';
                $HTML_CODE .= '</tr>';
            $HTML_CODE .= '</thead>';
            $HTML_CODE .= '<tbody>';
                if($query->num_rows() > 0){
                    $NO_IDX = $total - $offset;

                    foreach($query->result_array() AS $val){
						$graph_data = $this->graph->GetGraph($val['gp_mb_no'],$val['gp_id']); // $userSeq 에 관련된 그래프를 가져온다.

                        $HTML_CODE .= '<tr>';
                            $HTML_CODE .= '<td style="text-align:center;background-color:#212124;color:#CCCCCC;">'.$NO_IDX.'</td>';
                            $HTML_CODE .= '<td style="text-align:center;background-color:#212124;color:#CCCCCC;">'.$val['mb_name'].'</td>';
                            $HTML_CODE .= '<td style="text-align:center;background-color:#212124;color:#CCCCCC;">';
                                $HTML_CODE .= $val['gp_hostname'];
                                //$HTML_CODE .= '<br><a href="'.$graph_data['ALL'].'" target="_blank">자세히보기</a>';
                            $HTML_CODE .= '</td>';
                            $HTML_CODE .= '<td style="text-align:center;background-color:#212124;">'.$graph_data['F_1'].'</td>';
                        $HTML_CODE .= "</tr>";
                        $NO_IDX--;
                    }
                }else{
                    $HTML_CODE .= '<tr>';
                        $HTML_CODE .= '<td colspan="4" style="text-align:center;">내용이 없습니다.</td>';
                    $HTML_CODE .= '</tr>';
                }
            $HTML_CODE .= '</tbody>';
        $HTML_CODE .= '</table>';


        $data = Array(
            'list_html' => $HTML_CODE,
            'pagination_html' => $pagination_html
        );
        echo json_encode($data);
    }


    public function delete($gp_id=false){
        if($gp_id){
			$result = $this->db->delete('g5_graph', Array('gp_id' => $gp_id));

			if($result){
				$arr = Array('code' => '0000','msg' => '삭제성공');
			}else{
				$arr = Array('code' => '4444','msg' => '파일 처리 실패. [DB Delete error]');
			}

		}else{
			$arr = Array('code' => '4444','msg' => '파일 처리 실패. [DB Delete error]');
		}

		echo json_encode($arr);
    }


    public function edited(){

		$gp_id = trim($this->input->post('gp_id'));

		$gp_code = trim($this->input->post('gp_code'));
		$gp_name = trim($this->input->post('gp_name'));

		$update_data = Array(
			'gp_code' => $gp_code,
			'gp_name' => $gp_name
		);


		$result = $this->db->update('g5_graph', $update_data, Array('gp_id' => $gp_id));

		if($result){
			$arr = Array('code' => '0000','msg' => '수정성공');
		}else{
			$arr = Array('code' => '4444','msg' => '파일 처리 실패. [DB Update error]');
		}
		echo json_encode($arr);
    }
}

?>