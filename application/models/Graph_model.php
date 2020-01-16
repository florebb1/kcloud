<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph_Model extends CI_Model{
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertGraph($data_graph){
        return $this->db->insert("g5_graph",$data_graph);
    }

	public function Total_cnt(){
        $SQL = "SELECT *
            FROM g5_graph AS gp
			LEFT OUTER JOIN g5_member AS mb ON (mb.mb_no=gp.gp_mb_no)
            ORDER BY gp_id ASC
        ";

        $query = $this->db->query($SQL);
        $total = $query->num_rows();

		return $total;
	}

    // 그래프 가져오기.
    public function GetGraph($userSeq,$gp_id){
		$sql_A = "
			SELECT
				*
			FROM g5_graph
				WHERE gp_mb_no='".$userSeq."' AND gp_useflag='Y' AND gp_id='".$gp_id."'
			LIMIT 0,1
		";
        $query = $this->db->query($sql_A);

		$graph_data = Array();

		if($query->num_rows() > 0){
            $row = $query->row_array();


			$graph_data['ALL'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'ALL');

			// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 당월 가용율 - 100%
			$graph_data['A'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_1','538','200');

			// HOME -> MYPAGE -> 성능 모니터 -> 가용성
			$graph_data['A_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_1','250','200');
			$graph_data['A_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_2','250','200');
			$graph_data['A_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_3','250','200');
			$graph_data['A_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_4','250','200');

			$graph_data['AA_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_1','303','250');
			$graph_data['AA_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_2','303','250');
			$graph_data['AA_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_3','303','250');
			$graph_data['AA_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_4','303','250');

			$graph_data['AAA_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_1','440','200');
			$graph_data['AAA_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_2','440','200');
			$graph_data['AAA_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_3','440','200');
			$graph_data['AAA_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'A_4','440','200');

			// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 응답시간 - 0.19 sec
			$graph_data['B'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_1','538','200');

			// HOME -> MYPAGE -> 성능 모니터 -> 응답시간
			$graph_data['B_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_1','250','200');
			$graph_data['B_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_2','250','200');
			$graph_data['B_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_3','250','200');
			$graph_data['B_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_4','250','200');

			$graph_data['BB_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_1','303','250');
			$graph_data['BB_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_2','303','250');
			$graph_data['BB_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_3','303','250');
			$graph_data['BB_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_4','303','250');

			$graph_data['BBB_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_1','440','200');
			$graph_data['BBB_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_2','440','200');
			$graph_data['BBB_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_3','440','200');
			$graph_data['BBB_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'B_4','440','200');

			/*
            // 마이페이지 메인 -> 성능 모니터 알림 현황 -> 탄력성 - 2019-09-13 90 sec
			$graph_data['C'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'C','538','200');

			// HOME -> MYPAGE -> 성능 모니터 -> 탄력성
			$graph_data['C_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'I','250','200');
			$graph_data['C_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'J','250','200');
			$graph_data['C_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'K','250','200');
			$graph_data['C_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'L','250','200');

			$graph_data['CC_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'I','280','100');
			$graph_data['CC_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'J','280','100');
			$graph_data['CC_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'K','280','100');
			$graph_data['CC_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'L','280','100');
            */

			// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 이벤트 알림 지연 시간 - 0.00 sec
			$graph_data['D'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_1','538','200');

			// HOME -> MYPAGE -> 성능 모니터 -> 이벤트 알림 지연 시간
			$graph_data['D_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_1','250','200');
			$graph_data['D_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_2','250','200');
			$graph_data['D_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_3','250','200');
			$graph_data['D_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_4','250','200');

			$graph_data['DD_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_1','303','250');
			$graph_data['DD_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_2','303','250');
			$graph_data['DD_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_3','303','250');
			$graph_data['DD_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_4','303','250');

			$graph_data['DDD_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_1','440','200');
			$graph_data['DDD_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_2','440','200');
			$graph_data['DDD_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_3','440','200');
			$graph_data['DDD_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'D_4','440','200');

			// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 당월 interrupt - 발생 0 건
			$graph_data['E'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_1','538','200');

			// HOME -> MYPAGE -> 성능 모니터 -> Interrupt 발생
			$graph_data['E_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_1','250','200');
			$graph_data['E_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_2','250','200');
			$graph_data['E_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_3','250','200');
			$graph_data['E_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_4','250','200');

			$graph_data['EE_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_1','303','250');
			$graph_data['EE_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_2','303','250');
			$graph_data['EE_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_3','303','250');
			$graph_data['EE_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_4','303','250');

			$graph_data['EEE_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_1','440','200');
			$graph_data['EEE_2'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_2','440','200');
			$graph_data['EEE_3'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_3','440','200');
			$graph_data['EEE_4'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'E_4','440','200');


			// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 이벤트 진단 - 0 건
			$graph_data['F'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'F_1','1065','400'); // 마이페이지
			$graph_data['F_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'F_1','1300','400'); // 관리자
			$graph_data['FF_1'] = $this->Graph_code($row['gp_code'],$row['gp_name'],'F_1','1890','600'); // pop

        }

		return $graph_data;



		/*
		$graph_data = Array();

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 당월 가용율 - 100%
		$graph_data['A'] = '
			<h5 class="p-3">당월 가용율'.$row['gp_id'].'</h5>
			<h2 class="text-center"><span>'.rand(1,99).'</span> %</h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> 가용성
		$graph_data['A_1'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">월 가용율'.$row['gp_id'].'</h4>
				<h1 class="text-center"><span>'.rand(1,99).'</span>%</h1>
			</div>
		';
		$graph_data['A_2'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">년 가용율</h4>
				<h1 class="text-center"><span>97.9</span>%</h1>
			</div>
		';
		$graph_data['A_3'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">평균 가용율</h4>
				<h1 class="text-center"><span>96.9</span>%</h1>
			</div>
		';
		$graph_data['A_4'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">월 가용율 변경</h4>
				<h1 class="text-center"><span>+</span> <span>0.04</span>%</h1>
			</div>
		';

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 응답시간 - 0.19 sec
		$graph_data['B'] = '
			<h5 class="p-3">응답시간</h5>
			<h2 class="text-center"><span>0.18</span> sec</h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> 응답시간
		$graph_data['B_1'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">현행</h4>
				<h1 class="text-center"><span>0.18</span> sec</h1>
			</div>
		';
		$graph_data['B_2'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">평균</h4>
				<h1 class="text-center"><span>0.71</span> sec</h1>
			</div>
		';
		$graph_data['B_3'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">당월 최대</h4>
				<h1 class="text-center"><span>3.19</span> sec</h1>
			</div>
		';
		$graph_data['B_4'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">당월 최저</h4>
				<h1 class="text-center"><span>0.59</span> sec</h1>
			</div>
		';

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 탄력성 - 2019-09-13 90 sec
		$graph_data['C'] = '
			<h5 class="p-3">
				<div class="row">
					<div class="col-6">탄력성</div>
					<div class="col-6 text-right font-weight-normal">2019-05-23</div>
				</div>
			</h5>
			<h2 class="text-center"><span>69</span> sec </h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> 탄력성
		$graph_data['C_1'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최근</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>50</span> sec</h1>
			</div>
		';
		$graph_data['C_2'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">평균</h4>
				<h1 class="text-center"><span>111</span> sec</h1>
			</div>
		';
		$graph_data['C_3'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최대</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>120</span> sec</h1>
			</div>
		';
		$graph_data['C_4'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최저</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>22</span> sec</h1>
			</div>
		';

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 이벤트 알림 지연 시간 - 0.00 sec
		$graph_data['D'] = '
			<h5 class="p-3">이벤트 알림 지연 시간</h5>
			<h2 class="text-center"><span>0.18</span> sec</h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> 이벤트 알림 지연 시간
		$graph_data['D_1'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최근</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>200</span> sec</h1>
			</div>
		';
		$graph_data['D_2'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">평균</h4>
				<h1 class="text-center"><span>100</span> sec</h1>
			</div>
		';
		$graph_data['D_3'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최대</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>300</span> sec</h1>
			</div>
		';
		$graph_data['D_4'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">
					<div class="row">
						<div class="col-6">최소</div>
						<div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
					</div>
				</h4>
				<h1 class="text-center"><span>400</span> sec</h1>
			</div>
		';

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 당월 interrupt - 발생 0 건
		$graph_data['E'] = '
			<h5 class="p-3">당월 interrupt 발생</h5>
			<h2 class="text-center"><span>180</span> 건</h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> Interrupt 발생
		$graph_data['E_1'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">월간</h4>
				<h1 class="text-center"><span>11</span>건</h1>
			</div>
		';
		$graph_data['E_2'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">년간</h4>
				<h1 class="text-center"><span>71</span>건</h1>
			</div>
		';
		$graph_data['E_3'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">월 평균</h4>
				<h1 class="text-center"><span>11.13</span>건</h1>
			</div>
		';
		$graph_data['E_4'] = '
			<div class="border min-height120 bluegray">
				<h4 class="font-weight-light p-3">최근 발생 일자</h4>
				<h1 class="text-center"><span>2019-01-13</span></h1>
			</div>
		';

		// 마이페이지 메인 -> 성능 모니터 알림 현황 -> 이벤트 진단 - 0 건
		$graph_data['F'] = '
			<h5 class="p-3">이벤트 진단</h5>
			<h2 class="text-center"><span>690</span> 건</h2>
		';

		// HOME -> MYPAGE -> 성능 모니터 -> 이벤트 알림 로그
		$graph_data['F_1'] = '
		';
		$graph_data['F_2'] = '
		';
		$graph_data['F_3'] = '
		';
		$graph_data['F_4'] = '
		';
		*/
	}

	// 그래프 그룹(서버) 리스트 select option
	public function GetGroup($userSeq){
		$sql_A = "
			SELECT
				*
			FROM g5_graph
				WHERE gp_mb_no='".$userSeq."' AND gp_useflag='Y'
			ORDER BY gp_id ASC
		";
        $query = $this->db->query($sql_A);

		$result = '';

		if($query->num_rows() > 0){
			foreach($query->result_array() AS $val){
				$result .= '<option value="'.$val['gp_id'].'">'.$val['gp_hostname'].'</option>';
			}
            $result .= '<option value="pop">새창에서 자세히 보기</option>';
		}else{
			$result .= '<option value="">등록된 서버가 없습니다.</option>';
		}

		return $result;
	}
	public function GetGroup2($userSeq){
		$sql_A = "
			SELECT
				*
			FROM g5_graph
				WHERE gp_mb_no='".$userSeq."' AND gp_useflag='Y'
			ORDER BY gp_id ASC
		";
        $query = $this->db->query($sql_A);

		$result = '';

		if($query->num_rows() > 0){
			foreach($query->result_array() AS $val){
				$result .= '<option value="'.$val['gp_id'].'">'.$val['gp_hostname'].'</option>';
			}
		}else{
			$result .= '<option value="">등록된 서버가 없습니다.</option>';
		}

		return $result;
	}

	public function Graph_code($graph_code,$graph_name,$graph_type,$graph_width='450',$graph_height='200'){
		$graph_server = 'http://110.10.147.42:3000';
		$graph_to = time() * 1000;
		$graph_from = $graph_to - (604800000 / 7);
		$graph_from_week = $graph_to - (604800000 / 7 * 7);
		$graph_from_month = $graph_to - (604800000 / 7 * 30);
		$graph_from_year = $graph_to - (604800000 / 7 * 365);

		//$graph_code = '9CWBz0bik';
		//$graph_name = 'cloudqos_db';

		$result = '';

		switch($graph_type){
			case('ALL'): // http://110.10.147.42:3000/d/9CWBz0bik/cloudqos_db?orgId=1&refresh=1m
				$result = $graph_server.'/d/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m';
				break;

			case('A_1'): // 사용자 가용성 월 가용률
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from.'&to='.$graph_to.'&panelId=174" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('A_2'): // 사용자 가용성 년 가용율
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_week.'&to='.$graph_to.'&panelId=192" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('A_3'): // 사용자 가용성 평균 가용률
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=193" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('A_4'): // 사용자 가용성 월가용률 변경
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_year.'&to='.$graph_to.'&panelId=194" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('B_1'): // 사용자 응답시간 현재
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from.'&to='.$graph_to.'&panelId=177" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('B_2'): // 사용자 응답시간 평균
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=180" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('B_3'): // 사용자 응답시간 최저
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=178" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('B_4'): // 사용자 응답시간 최대
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=179" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('D_1'): // 사용자 이벤트 알림 지연
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=186" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('D_2'): // 사용자 이벤트 알림 지연
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=188" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('D_3'): // 사용자 이벤트 알림 지연
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=189" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('D_4'): // 사용자 이벤트 알림 지연
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=187" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('E_1'): // 마이페이지 Interrupt 발생 현재
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from.'&to='.$graph_to.'&panelId=184" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('E_2'): // 마이페이지 Interrupt 발생 평균
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=183" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('E_3'): // 마이페이지 Interrupt 발생 최저
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=181" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			case('E_4'): // 마이페이지 Interrupt 발생 최대
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=182" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;



			case('F_1'): // 이벤트
				$result = '<iframe src="'.$graph_server.'/d-solo/'.$graph_code.'/'.$graph_name.'?orgId=1&refresh=1m&var-interval=5s&var-env=All&var-name=All&var-node=All&var-maxmount=%2Fetc%2Fhostname&from='.$graph_from_month.'&to='.$graph_to.'&panelId=187" width="'.$graph_width.'" height="'.$graph_height.'" frameborder="0"></iframe>';
				break;

			default:
				break;
		}

		return $result;
	}
}
?>