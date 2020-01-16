<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_Model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // 로그인
    public function login(){
    	$this->db->select("*, password('".$this->input->get('userPw')."') as pass ");
        $this->db->from("g5_member");
        $this->db->where(array('mb_id'=>$this->input->get('userId'),'mb_level' => '2'));
        $query = $this->db->get();
        $result = array();
        log_message("debug",$this->db->last_query());
        if($query->num_rows() == 1){
        	$row = $query->row_array();
            if($row["mb_pw_change"] == "N"){
                $result["result"] = true;
                $result["userSeq"] = $row["mb_no"];
                $result["userId"] = $row["mb_id"];
                $result["userName"] = $row["mb_name"];
                $result["pwChange"] = true;
            }else{
                if($row["pass"] == $row["mb_password"]){
                    if($row["mb_joinAuth"] == "N"){
                        $result["result"] = false;
                        $result["errorCode"] = "-3"; // 인증되지 않은 회원
                    }else{
                        $result["result"] = true;
                        $result["userSeq"] = $row["mb_no"];
                        $result["userId"] = $row["mb_id"];
                        $result["userName"] = $row["mb_name"];
                    }
                    
                }else{
                    $result["result"] = false;
                    $result["errorCode"] = "-1"; // 비밀번호 오류
                }
            }
        	
        }else{
        	$result["result"] = false;
        	$result["errorCode"] = "-2"; // 아이디 없음
        }
        return $result;
    }
    // 중복체크
    public function dupleCheck($userId){
    	$this->db->select("*");
    	$this->db->from("g5_member");
    	$this->db->where("mb_id",$userId);
    	$query = $this->db->get();

    	if($query->num_rows() == 1){
    		return true;
    	}else{
    		return false;
    	}
    }

    // 회원가입
    public function insertUser($data){
    	$this->db->set("mb_password","PASSWORD('".$this->input->post("userPw")."')",false);
    	return $this->db->insert('g5_member',$data);
    }

    // 이메일 + 이름로 회원 찾기
    public function selectEmailName(){
    	$this->db->select("*");
    	$this->db->from("g5_member");
    	$this->db->where("mb_email",$this->input->get("email"));
        $this->db->where("mb_name",$this->input->get("name"));
    	$query = $this->db->get();

    	if($query->num_rows() > 0){
    		$row = $query->row_array();
    		$result["result"] = true;
    		$result["mb_id"] = $row["mb_id"];
    	}else{
    		$result["result"] = false;
    	}

    	return $result;
    }

    // 아이디 + 이메일로 회원찾기
    public function selectIdEmail(){
    	$this->db->select("*");
    	$this->db->from("g5_member");
    	$this->db->where("mb_email",$this->input->get("email"));
    	$this->db->where("mb_id",$this->input->get("id"));
    	$query = $this->db->get();

    	if($query->num_rows() > 0){
    		$row = $query->row_array();
    		$result["result"] = true;
    		$result["userSeq"] = $row["mb_no"];
    	}else{
    		$result["result"] = false;
    	}

    	return $result;
    }

    // 비밀번호 업데이트 이메일
    public function updatePasswordReset($pw){
        $this->db->set("mb_password","PASSWORD('".$pw."')",false);
        $this->db->where("mb_id",$this->input->get("id"));
        return $this->db->update("g5_member");
    }

    // 비밀번호 업데이트
    public function updatePassword(){
        $this->db->set("mb_pw_change","Y");
    	$this->db->set("mb_password","PASSWORD('".$this->input->post("pw")."')",false);
    	$this->db->where("mb_no",$this->input->post("userSeq"));
    	return $this->db->update("g5_member");
    }

    // 품질성능 총갯수
    public function selectQualityCount($type){
    
        $this->db->select("count(*) as total");
        $this->db->from("g5_write_s41");
        if($type != "")
            $this->db->where("wr_2",$type);
        else
            $this->db->where("wr_2 not in ('IaaS','PaaS','SaaS') ");

        $this->db->where("status",1);
        if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
            $this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
        }
        if($this->input->get("userSeq") != ""){
            $this->db->where("idx",$this->input->get("userSeq"));
        }
        
        $query = $this->db->get();
        $row = $query->row_array();
        return $row["total"];
    }

    // 공지사항
    public function fetchQuality(){
        if($this->input->get("row") == ""){
            $row = 10;
        }else{
            $row = $this->input->get("row");
        }
        $offset = ($this->input->get("pageNum")-1)*$row;
        $this->db->select("*");
        $this->db->from("g5_write_s41");
        if($this->input->get("type") != "")
            $this->db->where("wr_2",$this->input->get("type"));
        else
            $this->db->where("wr_2 not in ('IaaS','PaaS','SaaS') ");

        $this->db->where("status",1);
        if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
            $this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
        }
        if($this->input->get("userSeq") != ""){
            $this->db->where("idx",$this->input->get("userSeq"));
        }
        $this->db->order_by("wr_id","DESC");
        $this->db->limit(10,$offset);
        $query = $this->db->get();

        return $query->result_array();
    }

    // 공지사항 상세
    public function selectQuality(){
        $this->db->select("*");
        $this->db->from("g5_write_s41");
        $this->db->where("wr_id",$this->input->get("wr_id"));
        $query = $this->db->get();

        return $query->row_array();
    }

    // 공지사항 총갯수
    public function selectNoticeCount(){
    
    	$this->db->select("count(*) as total");
    	$this->db->from("g5_write_s51");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	
    	$query = $this->db->get();
    	$row = $query->row_array();
    	return $row["total"];
    }

    // 공지사항
    public function fetchNotice(){
    	if($this->input->get("row") == ""){
            $row = 10;
        }else{
            $row = $this->input->get("row");
        }
        $offset = ($this->input->get("pageNum")-1)*$row;
    	$this->db->select("*");
    	$this->db->from("g5_write_s51");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	$this->db->order_by("wr_id","DESC");
    	$this->db->limit(10,$offset);
    	$query = $this->db->get();

    	return $query->result_array();
    }

    // 공지사항 상세
    public function selectNotice(){
    	$this->db->select("*");
    	$this->db->from("g5_write_s51");
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	$query = $this->db->get();

    	return $query->row_array();
    }

    // FAQ 총갯수
    public function selectFaqCount(){
    
    	$this->db->select("count(*) as total");
    	$this->db->from("g5_write_s53");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	
    	$query = $this->db->get();
    	$row = $query->row_array();
    	return $row["total"];
    }

    // FAQ
    public function fetchFaq(){
    	if($this->input->get("row") == ""){
            $row = 10;
        }else{
            $row = $this->input->get("row");
        }
        $offset = ($this->input->get("pageNum")-1)*$row;
    	$this->db->select("*");
    	$this->db->from("g5_write_s53");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	$this->db->order_by("wr_id","DESC");
    	$this->db->limit(10,$offset);
    	$query = $this->db->get();

    	return $query->result_array();
    }

    // FAQ 상세
    public function selectFaq(){
    	$this->db->select("*");
    	$this->db->from("g5_write_s53");
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	$query = $this->db->get();

    	return $query->row_array();
    }

    // 자료실 총갯수
    public function selectReferenceCount(){
    
    	$this->db->select("count(*) as total");
    	$this->db->from("g5_write_s52");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	
    	$query = $this->db->get();
    	$row = $query->row_array();
    	return $row["total"];
    }

    // 자료실
    public function fetchReference(){
    	if($this->input->get("row") == ""){
            $row = 10;
        }else{
            $row = $this->input->get("row");
        }
        $offset = ($this->input->get("pageNum")-1)*$row;
    	$this->db->select("*");
    	$this->db->from("g5_write_s52");
    	if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
    		$this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
    	}
    	$this->db->order_by("wr_id","DESC");
    	$this->db->limit(10,$offset);
    	$query = $this->db->get();

    	return $query->result_array();
    }

    // 자료실 상세
    public function selectReference(){
    	$this->db->select("*");
    	$this->db->from("g5_write_s52");
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	$query = $this->db->get();

    	return $query->row_array();
    }

    // 문의하기 등록
    public function insertQna($data){
    	$this->db->set("wr_datetime",'NOW()',false);
    	$result = $this->db->insert("g5_qna",$data);
    	if($result){
    		return $this->db->insert_id();
    	}else{
    		return false;
    	}
    	
    }

    // 문희하기 파일 업로드
    public function updateQna($wr_id,$data){
    	$this->db->where("wr_id",$wr_id);
    	return $this->db->update("g5_qna",$data);
    }

    // 인증번호 업데이트 id
    public function updateAuthNumberId($mb_id,$num){
        $this->db->where("mb_id",$mb_id);
        $data = array(
            "mb_authNumberId" => $num
        );
        $this->db->update("g5_member",$data);
    }

    // 인증번호 업데이트 pw
    public function updateAuthNumberPw($mb_no,$num){
        $this->db->where("mb_no",$mb_no);
        $data = array(
            "mb_authNumberPw" => $num
        );
        $this->db->update("g5_member",$data);
    }

    // 이메일 + 이름 + 인증번호 체크
    public function selectIdAuth(){
        $this->db->select("*");
        $this->db->from("g5_member");
        $this->db->where("mb_email",$this->input->get("email"));
        $this->db->where("mb_name",$this->input->get("name"));
        $this->db->where("mb_authNumberId",$this->input->get("authNum"));
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result["result"] = true;
            $result["mb_id"] = $row["mb_id"];
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 이메일 + 인증번호 체크
    public function selectOnlyEmailAuth(){
        $this->db->select("*");
        $this->db->from("g5_member");
        $this->db->where("mb_id",$this->input->post("mb_id"));
        $this->db->where("mb_authNumberId",$this->input->post("authNum"));
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result["result"] = true;
            $result["mb_id"] = $row["mb_id"];
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 아이디 + 이메일 + 인증번호 체크
    public function selectPwAuth(){
        $this->db->select("*");
        $this->db->from("g5_member");
        $this->db->where("mb_email",$this->input->get("email"));
        $this->db->where("mb_id",$this->input->get("id"));
        $this->db->where("mb_authNumberPw",$this->input->get("authNum"));
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result["result"] = true;
            $result["userSeq"] = $row["mb_no"];
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 회원가입 인증 업데이트
    public function updateJoinAuth($userSeq){
        $data = array(
            "mb_joinAuth" => "Y"
        );

        $this->db->where("mb_no",$userSeq);
        return $this->db->update("g5_member",$data);
    }

    // 회원정보 get
    public function selectUser(){
        $this->db->select("*");
        $this->db->from("g5_member");
        $this->db->where("mb_no",$this->session->userdata('userSeq'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = array(
                "userName" => $row["mb_name"],
                "userId" => $row["mb_id"],
                "userEmail" => $row["mb_email"],
                "organizationName" => $row["mb_1"],
                "serviceName" => $row["mb_2"],
                "url" => $row["mb_3"],
                "serviceModel" => $row["mb_4"],
                "counsulting" => $row["mb_5"],
                "chargerPhone" => $row["mb_6"],
                "address" => $row["mb_7"],
                "emailYn" => $row["mb_8"],
                "notiMethod" => $row["mb_9"],
                "service_info" => $row["service_info"]
            );
        }else{
            $result = array();
        }
        return $result;
    }

    // 회원정보 update
    public function updateUser($data){
        $this->db->where("mb_no",$this->session->userdata('userSeq'));
        return $this->db->update("g5_member",$data);
    }

    // 회원 탈퇴를 위한 user select 
    public function selectUserIdEmail(){
        $this->db->select("*, password('".$this->input->post('userPw')."') as pass");
        $this->db->from("g5_member");
        $this->db->where("mb_id",$this->input->post("userId"));
        $this->db->where("mb_email",$this->input->post("userEmail"));
        $query = $this->db->get();
        $result = array();
        if($query->num_rows() == 1){
            $row = $query->row_array();
            if($row["pass"] == $row["mb_password"]){
                $result["result"] = true;
                $result["userSeq"] = $row["mb_no"];
            }else{
                $result["result"] = false;
                $result["errorCode"] = "-1"; // 비밀번호 오류
            }
        }else{
            $result["result"] = false;
            $result["errorCode"] = "-2"; // 정보 없음
        }
        return $result;
    }

    // 회원 탈퇴
    public function dropUser($data){
        $this->db->where("mb_no",$this->input->post("userSeq"));
        return $this->db->update("g5_member",$data);
    }

    // 품질 성능 등록
    public function insertApply1($data){
        // $result = array();
        $db_result = $this->db->insert("g5_write_s32",$data);
        if($db_result){
            $result["result"] = true;
            $result["wr_id"] = $this->db->insert_id();
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 진위여부 자가 진단
    public function insertApply2($data){
        // $result = array();
        $db_result = $this->db->insert("g5_write_s33",$data);
        if($db_result){
            $result["result"] = true;
            $result["wr_id"] = $this->db->insert_id();
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 관리체계 자가 진단
    public function insertApply3($data){
        // $result = array();
        $db_result = $this->db->insert("g5_write_s34",$data);
        if($db_result){
            $result["result"] = true;
            $result["wr_id"] = $this->db->insert_id();
        }else{
            $result["result"] = false;
        }

        return $result;
    }

    // 신청 첨부파일등록
    public function insertApplyFile($data){
        return $this->db->insert("g5_board_file",$data);
    }

    public function getSummaryApply1Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");
        $this->db->where("status","0");
        $this->db->where("mb_id",$this->session->userdata('userId'));
        // $this->db->where("","2");
        // $this->db->group_by("mb_id");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function getSummaryApply2Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");
        $this->db->where("status in (1,2,3)");
        $this->db->where("mb_id",$this->session->userdata('userId'));
        // $this->db->where("","2");
        // $this->db->group_by("mb_id");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function getSummaryApply3Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");
        $this->db->where("status in (4,5)");
        $this->db->where("mb_id",$this->session->userdata('userId'));
        // $this->db->where("","2");
        // $this->db->group_by("mb_id");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function getBanner(){
        $this->db->select("*");
        $this->db->from("g5_site_config");
        $query = $this->db->get();

        return $query->row_array();
    }

    public function getSessionInfo(){
        $this->db->select("*");
        $this->db->from("g5_site_config");
        $query = $this->db->get();

        return $query->row_array();
    }

    public function fetchBoardFile($boardName,$wr_id){
        $this->db->select("*");
        $this->db->where("bo_table",$boardName);
        $this->db->where("wr_id",$wr_id);
        $this->db->from("g5_board_file");
        $query = $this->db->get();

        return $query->result_array();
    }
}
?>