<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminapi_Model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        $this->db->select("*, password('".$this->input->get('adminPw')."') as pass ");
        $this->db->from("g5_member");
        $this->db->where(array('mb_id'=>$this->input->get('adminId')));
        $this->db->where("mb_level >= 9");
        $query = $this->db->get();
        $result = array();
        log_message("debug",$this->db->last_query());
        if($query->num_rows() == 1){
            $row = $query->row_array();
            if($row["pass"] == $row["mb_password"]){

                $result["result"] = true;
                $result["adminSeq"] = $row["mb_no"];
                $result["adminId"] = $row["mb_id"];
                $result["adminName"] = $row["mb_name"];
                $result["adminCom"] = $row["mb_1"];

            }else{
                $result["result"] = false;
                $result["errorCode"] = "-1"; // 비밀번호 오류
            }
        }else{
            $result["result"] = false;
            $result["errorCode"] = "-2"; // 아이디 없음
        }
        return $result;
    }

    public function getUserTotal(){
    	$this->db->select("count(*) as total",false);
    	$this->db->from("g5_member");
    	$this->db->where("mb_level","2");
        if($this->input->get("searchId") != ""){
            $this->db->where("mb_id LIKE '%".$this->input->get("searchId")."%' ");
        }
    	$query = $this->db->get();

    	$row = $query->row_array();

    	return $row["total"];
    }

    public function getApplyTotal(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");
        // $this->db->where("","2");
        $this->db->group_by("mb_id");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchUser($start,$end){
    	$this->db->select("mb_name as userName,mb_no as userSeq, mb_id as userId, mb_name as userName, mb_email as userEmail, mb_1 as organizationName, mb_2 as serviceName, mb_3 as url , mb_4 as serviceModel , mb_5 as counsulting, mb_6 as chargerPhone , mb_7 as address, mb_8 as emailYn, mb_9 as notiMethod", false);
    	$this->db->from("g5_member");
    	$this->db->where("mb_level","2");
        if($this->input->get("searchType") != "" && $this->input->get("searchWord") != ""){
            $this->db->like($this->input->get("searchType"),$this->input->get("searchWord"));
        }

        if($this->input->get("searchId") != ""){
            $this->db->where("mb_id LIKE '%".$this->input->get("searchId")."%' ");
        }

    	$this->db->order_by("mb_no","desc");
    	$this->db->limit($end,$start);

    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function selectUser(){
    	$this->db->select("*");
        $this->db->from("g5_member");
        $this->db->where("mb_no",$this->input->get('userSeq'));

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

    public function updateUser($data){
        $this->db->where("mb_no",$this->input->post('userSeq'));
        return $this->db->update("g5_member",$data);
    }

    public function updatePassword($pw){
    	$this->db->set("mb_password","PASSWORD('".$pw."')",false);
    	$this->db->where("mb_no",$this->input->post("userSeq"));
    	return $this->db->update("g5_member");
    }

    public function getApply1Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");

        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchApply1($start,$end){
        $this->db->select("*", false);
        $this->db->from("g5_write_s32");
        $this->db->order_by("wr_id","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectApply1(){
        $this->db->select("*");
        $this->db->from("g5_write_s32");
        $this->db->where("wr_id",$this->input->get('wr_id'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function selectApply1S($wr_id){
        $this->db->select("*");
        $this->db->from("g5_write_s32");
        $this->db->where("wr_id",$wr_id);

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function selectApply3S($wr_id){
        $this->db->select("*");
        $this->db->from("g5_write_s34");
        $this->db->where("wr_id",$wr_id);

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function getApply2Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s33");

        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchApply2($start,$end){
        $this->db->select("*", false);
        $this->db->from("g5_write_s33");
        $this->db->order_by("wr_id","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectApply2(){
        $this->db->select("* , (select status from g5_write_s32 b where b.wr_id = '".$this->input->get('idx')."') as status ",false);
        $this->db->from("g5_write_s33 a");
        if($this->input->get('wr_id') != ""){
            $this->db->where("wr_id",$this->input->get('wr_id'));
        }
        $this->db->where("idx",$this->input->get('idx'));
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function getApply3Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s34");

        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchApply3($start,$end){
        $this->db->select("*", false);
        $this->db->from("g5_write_s34");
        $this->db->order_by("wr_id","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectApply3(){
        $this->db->select("*, (select status from g5_write_s32 b where b.wr_id = '".$this->input->get('idx')."') as status ",false);
        $this->db->from("g5_write_s34 a");
        if($this->input->get('wr_id') != ""){
            $this->db->where("wr_id",$this->input->get('wr_id'));
        }
        $this->db->where("idx",$this->input->get('idx'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function getNoticeTotal(){
    	$this->db->select("count(*) as total",false);
    	$this->db->from("g5_write_s51");

    	$query = $this->db->get();

    	$row = $query->row_array();

    	return $row["total"];
    }

    public function fetchNotice($start,$end){
    	$this->db->select("*", false);
    	$this->db->from("g5_write_s51");
    	$this->db->order_by("wr_id","desc");
    	$this->db->limit($end,$start);

    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function selectNotice(){
    	$this->db->select("*");
        $this->db->from("g5_write_s51");
        $this->db->where("wr_id",$this->input->get('wr_id'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function insertNotice($data){
    	$result["result"] = $this->db->insert("g5_write_s51",$data);
        $result["wr_id"] = $this->db->insert_id();
        return $result;
    }

    public function updateNotice($data){
    	$this->db->where("wr_id",$this->input->post("wr_id"));
    	return $this->db->update("g5_write_s51",$data);
    }

    public function deleteNotice(){
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	return $this->db->delete("g5_write_s51");
    }

    public function getReferenceTotal(){
    	$this->db->select("count(*) as total",false);
    	$this->db->from("g5_write_s52");

    	$query = $this->db->get();

    	$row = $query->row_array();

    	return $row["total"];
    }

    public function fetchReference($start,$end){
    	$this->db->select("*", false);
    	$this->db->from("g5_write_s52");
    	$this->db->order_by("wr_id","desc");
    	$this->db->limit($end,$start);

    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function selectReference(){
    	$this->db->select("*");
        $this->db->from("g5_write_s52");
        $this->db->where("wr_id",$this->input->get('wr_id'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function insertReference($data){
    	$result["result"] = $this->db->insert("g5_write_s52",$data);
        $result["wr_id"] = $this->db->insert_id();
        return $result;
    }

    public function updateReference($data){
    	$this->db->where("wr_id",$this->input->post("wr_id"));
    	return $this->db->update("g5_write_s52",$data);
    }

    public function deleteReference(){
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	return $this->db->delete("g5_write_s52");
    }

    public function getFaqTotal(){
    	$this->db->select("count(*) as total",false);
    	$this->db->from("g5_write_s53");

    	$query = $this->db->get();

    	$row = $query->row_array();

    	return $row["total"];
    }

    public function fetchFaq($start,$end){
    	$this->db->select("*", false);
    	$this->db->from("g5_write_s53");
    	$this->db->order_by("wr_id","desc");
    	$this->db->limit($end,$start);

    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function selectFaq(){
    	$this->db->select("*");
        $this->db->from("g5_write_s53");
        $this->db->where("wr_id",$this->input->get('wr_id'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function insertFaq($data){
    	$result["result"] = $this->db->insert("g5_write_s53",$data);
        $result["wr_id"] = $this->db->insert_id();
        return $result;
    }

    public function updateFaq($data){
    	$this->db->where("wr_id",$this->input->post("wr_id"));
    	return $this->db->update("g5_write_s53",$data);
    }

    public function deleteFaq(){
    	$this->db->where("wr_id",$this->input->get("wr_id"));
    	return $this->db->delete("g5_write_s53");
    }

    public function insertFile($data){
        return $this->db->insert("g5_board_file",$data);
    }

    public function deleteFile($i,$wr_id,$board){
        $this->db->where("wr_id",$wr_id);
        $this->db->where("bf_no",$i);
        $this->db->where("bo_table",$board);
        return $this->db->delete("g5_board_file");
    }

    public function getQualityTotal($type){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s41");
        if($type != "")
            $this->db->where("wr_2",$type);
        else
            $this->db->where("wr_2 not in ('IaaS','PaaS','SaaS') ");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchQuality($start,$end){
        $this->db->select("* , (select count(*) from g5_board_file b where bo_table = 's41' and b.wr_id = a.wr_id) as fileCount", false);
        $this->db->from("g5_write_s41 a");
        if($this->input->get("type") != "")
            $this->db->where("wr_2",$this->input->get("type"));
        else
            $this->db->where("wr_2 not in ('IaaS','PaaS','SaaS') ");

        $this->db->order_by("wr_id","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectQuality(){
        $this->db->select("*");
        $this->db->from("g5_write_s41");
        $this->db->where("wr_id",$this->input->get('wr_id'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function insertQuality($data){
        $result["result"] = $this->db->insert("g5_write_s41",$data);
        $result["wr_id"] = $this->db->insert_id();
        return $result;
    }

    public function updateQuality($data){
        $this->db->where("wr_id",$this->input->post("wr_id"));
        return $this->db->update("g5_write_s41",$data);
    }

    public function deleteQuality(){
        $this->db->where("wr_id",$this->input->get("wr_id"));
        return $this->db->delete("g5_write_s41");
    }

    public function getAdminTotal(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_member");
        $this->db->where("mb_level","9");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchAdmin($start,$end){
        $this->db->select("*", false);
        $this->db->from("g5_member");
        $this->db->where("mb_level","9");
        $this->db->order_by("mb_no","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectAdmin(){
        $this->db->select("*");
        $this->db->from("mb_level");
        $this->db->where("mb_no",$this->input->get('mb_no'));

        $query = $this->db->get();
        if($query->num_rows() > 0){
            $row = $query->row_array();
            $result = $row;
        }else{
            $result = array();
        }
        return $result;
    }

    public function insertAdmin($data){
        // $this->db->set("mb_password","PASSWORD('".$this->input->post("adminPw")."')",false);
        $this->db->where("mb_no",$this->input->post("mb_no"));
        return $this->db->update("g5_member",$data);
        // $result["wr_id"] = $this->db->insert_id();
    }

    public function updateAdmin($data){
        if($this->input->post("adminPw") != ""){
            $this->db->set("mb_password","PASSWORD('".$this->input->post("adminPw")."')",false);
        }
        $this->db->where("mb_no",$this->input->post("mb_no"));
        return $this->db->update("g5_member",$data);
    }

    public function deleteAdmin(){
        $this->db->where("mb_no",$this->input->get("mb_no"));
        return $this->db->delete("g5_member");
    }

    public function updateApply1($data,$wr_id){
        $this->db->where("wr_id",$wr_id);
        return $this->db->update("g5_write_s32",$data);
    }

    public function updateApply2($data,$wr_id){
        $this->db->where("wr_id",$wr_id);
        return $this->db->update("g5_write_s33",$data);
    }

    public function updateApply3($data,$wr_id){
        $this->db->where("wr_id",$wr_id);
        return $this->db->update("g5_write_s34",$data);
    }

    public function insertBoard41($data){
        return $this->db->insert("g5_write_s41",$data);
    }

    public function getSummaryApply1Total(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_write_s32");
        $this->db->where("status","0");
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
        // $this->db->where("","2");
        // $this->db->group_by("mb_id");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function getPerformance1Total(){
        $this->db->select("count(*) as total", false);
        $this->db->from("g5_performance_1");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchPerformance1($start,$end){
        $this->db->select("a.*,b.mb_1,b.mb_2 ", false);
        $this->db->from("g5_performance_1 a");
        $this->db->join("g5_member b","a.mb_no = b.mb_no","left");

        $this->db->limit($end,$start);
        $this->db->order_by("a.seq","desc");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPerformance2Total(){
        $this->db->select("count(*) as total", false);
        $this->db->from("g5_performance_2");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchPerformance2($start,$end){
        $this->db->select("a.*,b.mb_1,b.mb_2 ", false);
        $this->db->from("g5_performance_2 a");
        $this->db->join("g5_member b","a.mb_no = b.mb_no","left");

        $this->db->limit($end,$start);
        $this->db->order_by("a.seq","desc");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPerformance3Total(){
        $this->db->select("count(*) as total", false);
        $this->db->from("g5_performance_3");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchPerformance3($start,$end){
        $this->db->select("a.*,b.mb_1,b.mb_2 ", false);
        $this->db->from("g5_performance_3 a");
        $this->db->join("g5_member b","a.mb_no = b.mb_no","left");

        $this->db->limit($end,$start);
        $this->db->order_by("a.seq","desc");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPerformance4Total(){
        $this->db->select("count(*) as total", false);
        $this->db->from("g5_performance_4");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchPerformance4($start,$end){
        $this->db->select("a.*,b.mb_1,b.mb_2 ", false);
        $this->db->from("g5_performance_4 a");
        $this->db->join("g5_member b","a.mb_no = b.mb_no","left");

        $this->db->limit($end,$start);
        $this->db->order_by("a.seq","desc");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPerformance5Total(){
        $this->db->select("count(*) as total", false);
        $this->db->from("g5_performance_5");
        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchPerformance5($start,$end){
        $this->db->select("a.*,b.mb_1,b.mb_2 ", false);
        $this->db->from("g5_performance_5 a");
        $this->db->join("g5_member b","a.mb_no = b.mb_no","left");

        $this->db->limit($end,$start);
        $this->db->order_by("a.seq","desc");
        $query = $this->db->get();

        return $query->result_array();
    }

    public function insertPerformance1($data){
        return $this->db->insert("g5_performance_1",$data);
    }

    public function insertPerformance2($data){
        return $this->db->insert("g5_performance_2",$data);
    }

    public function insertPerformance3($data){
        return $this->db->insert("g5_performance_3",$data);
    }

    public function insertPerformance4($data){
        return $this->db->insert("g5_performance_4",$data);
    }

    public function insertPerformance5($data){
        return $this->db->insert("g5_performance_5",$data);
    }

    public function updateUserPerformance($data){
        $this->db->where("mb_no",$this->input->post("mb_no"));
        return $this->db->update("g5_member",$data);
    }

    public function insertLog($data){
        return $this->db->insert("g5_log",$data);
    }

    public function getLogTotal(){
        $this->db->select("count(*) as total",false);
        $this->db->from("g5_log");

        $query = $this->db->get();

        $row = $query->row_array();

        return $row["total"];
    }

    public function fetchLog($start,$end){
        $this->db->select("*", false);
        $this->db->from("g5_log");
        $this->db->order_by("id","desc");
        $this->db->limit($end,$start);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function updateSession($data){
        return $this->db->update("g5_site_config",$data);
    }

    public function getSessionInfo(){
        $this->db->select("*");
        $this->db->from("g5_site_config");
        $query = $this->db->get();

        return $query->row_array();
    }

    public function getBanner(){
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