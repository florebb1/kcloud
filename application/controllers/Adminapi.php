<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminapi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminapi_model');
		$this->load->model("graph_model", "graph");
        $this->load->library("session");
    }

    /*
    로그인
    GET
    adminId : 아이디
    adminPw : 비밀번호
    */
    public function login(){
        // $this->session->sess_expiration = 7200;
        // echo $this->session->sess_expiration;
        // exit;
        $sessionInfo = $this->adminapi_model->getSessionInfo();
        $this->session->sess_expiration = $sessionInfo["admin_session"];
        $login = $this->adminapi_model->login();
        if($login["result"] == true){
            $newdata = array(
                'adminSeq'  => $login["adminSeq"],
                'adminName'     => $login["adminName"],
                'adminId' => $login["adminId"]
            );

            $this->session->set_userdata($newdata);
        }
        
        echo json_encode($login);
    }

    public function logout(){
        $outdata = array("adminSeq","adminName","adminId");
        $this->session->unset_userdata($outdata);
        
        echo json_encode(array("result"=>true));
    }

    // 회원총수
    public function getUserSummary(){
        $result["userTotal"] = $this->adminapi_model->getUserTotal();
        $result["applyTotal"] = $this->adminapi_model->getApplyTotal();

        echo json_encode($result);
    }
    // 회원 리스트
    public function fetchUser(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getUserTotal();
        $result["list"] = $this->adminapi_model->fetchUser($start,$end);

        echo json_encode($result);
    }
    // 회원 상세
    public function selectUser(){
        $result["info"] = $this->adminapi_model->selectUser();
        
        echo json_encode($result);  
    }

    // 회원 추가 정보 수정 
    public function updateUserAddInfo(){
        $data = array(
            "mb_1" => $this->input->post("organizationName"),
            "mb_2" => $this->input->post("serviceName"),
            "mb_3" => $this->input->post("url"),
            "mb_4" => $this->input->post("serviceModel"),
            "mb_5" => $this->input->post("counsulting"),
            "mb_6" => $this->input->post("chargerPhone"),
            "mb_7" => $this->input->post("address")
        );
        $result["result"] = $this->adminapi_model->updateUser($data);
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => $this->input->post("userId")."회원 정보 수정",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    // 임시 비번 발급
    public function updatePwUpdate(){
        $pw = rand(111111,999999);
        $result["result"] = $this->adminapi_model->updatePassword($pw);

        $this->load->library('email');

        $this->email->from('help@cloudqos.or.kr', 'CloudQos');
        $this->email->to($this->input->post("userEmail"));
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('[CloudQos] 임시 비밀번호');
        $this->email->message('임시 비밀번호는 '.$pw);

        $this->email->send();

        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => $this->input->post("userId")."회원 임시비밀번호 발송",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);

        echo json_encode($result);
    }


    public function getApplySummary(){
        $result["applyTotal1"] = $this->adminapi_model->getSummaryApply1Total();
        $result["applyTotal2"] = $this->adminapi_model->getSummaryApply2Total();
        $result["applyTotal3"] = $this->adminapi_model->getSummaryApply3Total();
        echo json_encode($result);
    }

    // 신청 리스트
    public function fetchApply1(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getApply1Total();
        $result["list"] = $this->adminapi_model->fetchApply1($start,$end);

        echo json_encode($result);
    }
    // 신청 상세
    public function selectApply1(){
        $result["info"] = $this->adminapi_model->selectApply1();
        
        echo json_encode($result);  
    }

    // 신청 리스트
    public function fetchApply2(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getApply2Total();
        $result["list"] = $this->adminapi_model->fetchApply2($start,$end);

        echo json_encode($result);
    }
    // 신청 상세
    public function selectApply2(){
        $result["info"] = $this->adminapi_model->selectApply2();
        
        echo json_encode($result);  
    }

    // 신청 리스트
    public function fetchApply3(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getApply3Total();
        $result["list"] = $this->adminapi_model->fetchApply3($start,$end);

        echo json_encode($result);
    }
    // 신청 상세
    public function selectApply3(){
        $result["info"] = $this->adminapi_model->selectApply3();
        
        echo json_encode($result);  
    }

    // 공지사항 리스트
    public function fetchNotice(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getNoticeTotal();
        $result["list"] = $this->adminapi_model->fetchNotice($start,$end);

        echo json_encode($result);
    }
    // 공지사항 상세
    public function selectNotice(){
        $result["info"] = $this->adminapi_model->selectNotice();
        $fileInfo = $this->adminapi_model->fetchBoardFile("s51",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
        echo json_encode($result);  
    }

    // 공지사항 등록
    public function insertNotice(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_name" => $this->input->post("wr_name"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2"),
            "mb_id" => "admin",
            "wr_hit" => 0,
            "wr_datetime" => date("Y-m-d H:i:s")
        );
        $db_result = $this->adminapi_model->insertNotice($data);
        if($db_result["result"]){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            if($ext == "GIF" || $ext == "gif"){
                                $bf_type = "1";
                            }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                                $bf_type = "2";
                            }else if($ext == "png" || $ext == "PNG"){
                                $bf_type = "3";
                            }else{
                                $bf_type = "0";
                            }
                            $file_data = array(
                                "bo_table" => "s51",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->adminapi_model->insertFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s51/".$newfile);

                        }
                    }
                }
            }
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => "공지사항 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
            $result["result"] = true;
        }else{
            $result["result"] = false;
        }

        echo json_encode($result);
    }
    // 공지사항 수정
    public function updateNotice(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2")
        );
        $result["result"] = $this->adminapi_model->updateNotice($data);
        if(isset($_FILES["bf_file"])){
            if(count($_FILES["bf_file"]) > 0){
                for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                    if($_FILES["bf_file"]["size"][$i] > 0){
                        $this->adminapi_model->deleteFile($i,$this->input->post("wr_id"),'s51');
                        $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                        $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                        if($ext == "GIF" || $ext == "gif"){
                            $bf_type = "1";
                        }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                            $bf_type = "2";
                        }else if($ext == "png" || $ext == "PNG"){
                            $bf_type = "3";
                        }else{
                            $bf_type = "0";
                        }
                        $file_data = array(
                            "bo_table" => "s51",
                            "wr_id" => $this->input->post("wr_id"),
                            "bf_no" => $i,
                            "bf_source" => $_FILES["bf_file"]["name"][$i],
                            "bf_file" => $newfile,
                            "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                            "bf_type" => $bf_type,
                            "bf_datetime" => date("Y-m-d H:i:s")
                        );
                        $this->adminapi_model->insertFile($file_data);
                        move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s51/".$newfile);
                       
                    }
                }
            }
        }
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "공지사항 수정",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }
    // 공지사항 삭제
    public function deleteNotice(){
        $result["result"] = $this->adminapi_model->deleteNotice();
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "공지사항 삭제",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    // 자료실 리스트
    public function fetchReference(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getReferenceTotal();
        $result["list"] = $this->adminapi_model->fetchReference($start,$end);

        echo json_encode($result);
    }
    // 자료실 상세
    public function selectReference(){
        $result["info"] = $this->adminapi_model->selectReference();
        $fileInfo = $this->adminapi_model->fetchBoardFile("s52",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
        echo json_encode($result);  
    }

    // 자료실 등록
    public function insertReference(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_name" => $this->input->post("wr_name"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2"),
            "mb_id" => "admin",
            "wr_hit" => 0,
            "wr_datetime" => date("Y-m-d H:i:s")
        );

        $db_result = $this->adminapi_model->insertReference($data);
        if($db_result["result"]){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            if($ext == "GIF" || $ext == "gif"){
                                $bf_type = "1";
                            }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                                $bf_type = "2";
                            }else if($ext == "png" || $ext == "PNG"){
                                $bf_type = "3";
                            }else{
                                $bf_type = "0";
                            }
                            $file_data = array(
                                "bo_table" => "s52",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->adminapi_model->insertFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s52/".$newfile);
                           
                        }
                    }
                }
            }
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => "자료실 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
            $result["result"] = true;
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }
    // 자료실 수정
    public function updateReference(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2")
        );
        $result["result"] = $this->adminapi_model->updateReference($data);
        if(isset($_FILES["bf_file"])){
            if(count($_FILES["bf_file"]) > 0){
                for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                    if($_FILES["bf_file"]["size"][$i] > 0){
                        $this->adminapi_model->deleteFile($i,$this->input->post("wr_id"),'s52');
                        $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                        $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                        if($ext == "GIF" || $ext == "gif"){
                            $bf_type = "1";
                        }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                            $bf_type = "2";
                        }else if($ext == "png" || $ext == "PNG"){
                            $bf_type = "3";
                        }else{
                            $bf_type = "0";
                        }
                        $file_data = array(
                            "bo_table" => "s52",
                            "wr_id" => $this->input->post("wr_id"),
                            "bf_no" => $i,
                            "bf_source" => $_FILES["bf_file"]["name"][$i],
                            "bf_file" => $newfile,
                            "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                            "bf_type" => $bf_type,
                            "bf_datetime" => date("Y-m-d H:i:s")
                        );
                        $this->adminapi_model->insertFile($file_data);
                        move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s52/".$newfile);
                       
                    }
                }
            }
        }
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "자료실 수정",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }
    // 자료실 삭제
    public function deleteReference(){
        $result["result"] = $this->adminapi_model->deleteReference();
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "자료실 삭제",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    // faq 리스트
    public function fetchFaq(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getFaqTotal();
        $result["list"] = $this->adminapi_model->fetchFaq($start,$end);

        echo json_encode($result);
    }
    // Faq 상세
    public function selectFaq(){
        $result["info"] = $this->adminapi_model->selectFaq();
        $fileInfo = $this->adminapi_model->fetchBoardFile("s53",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
        echo json_encode($result);  
    }

    // faq 등록
    public function insertFaq(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content"),
            "mb_id" => "admin",
            "wr_name" => $this->input->post("wr_name"),
            "wr_hit" => 0,
            "wr_datetime" => date("Y-m-d H:i:s")
        );

        $db_result = $this->adminapi_model->insertFaq($data);
        if($db_result["result"]){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            if($ext == "GIF" || $ext == "gif"){
                                $bf_type = "1";
                            }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                                $bf_type = "2";
                            }else if($ext == "png" || $ext == "PNG"){
                                $bf_type = "3";
                            }else{
                                $bf_type = "0";
                            }
                            $file_data = array(
                                "bo_table" => "s53",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->adminapi_model->insertFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s53/".$newfile);
                           
                        }
                    }
                }
            }
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => "FAQ 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
            $result["result"] = true;
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }
    // faq 수정
    public function updateFaq(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_content" => $this->input->post("wr_content")
        );
        $result["result"] = $this->adminapi_model->updateFaq($data);
        if(isset($_FILES["bf_file"])){
            if(count($_FILES["bf_file"]) > 0){
                for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                    if($_FILES["bf_file"]["size"][$i] > 0){
                        $this->adminapi_model->deleteFile($i,$this->input->post("wr_id"),'s53');
                        $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                        $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                        if($ext == "GIF" || $ext == "gif"){
                            $bf_type = "1";
                        }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                            $bf_type = "2";
                        }else if($ext == "png" || $ext == "PNG"){
                            $bf_type = "3";
                        }else{
                            $bf_type = "0";
                        }
                        $file_data = array(
                            "bo_table" => "s53",
                            "wr_id" => $this->input->post("wr_id"),
                            "bf_no" => $i,
                            "bf_source" => $_FILES["bf_file"]["name"][$i],
                            "bf_file" => $newfile,
                            "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                            "bf_type" => $bf_type,
                            "bf_datetime" => date("Y-m-d H:i:s")
                        );
                        $this->adminapi_model->insertFile($file_data);
                        move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s53/".$newfile);
                       
                    }
                }
            }
        }
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "FAQ 수정",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }
    // faq 삭제
    public function deleteFaq(){
        $result["result"] = $this->adminapi_model->deleteFaq();
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "FAQ 삭제",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    // 공지사항 리스트
    public function fetchQuality(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getQualityTotal($this->input->get("type"));
        $result["list"] = $this->adminapi_model->fetchQuality($start,$end);

        echo json_encode($result);
    }
    /*
    품질성능 각각 갯수
    GET
    */
    public function getQualitySummary(){
        $result["IaaS"] = $this->adminapi_model->getQualityTotal("IaaS");
        $result["PaaS"] = $this->adminapi_model->getQualityTotal("PaaS");
        $result["SaaS"] = $this->adminapi_model->getQualityTotal("SaaS");
        $result["etc"] = $this->adminapi_model->getQualityTotal("");
        echo json_encode($result);
    }
    // 공지사항 상세
    public function selectQuality(){
        $result["info"] = $this->adminapi_model->selectQuality();
        
        echo json_encode($result);  
    }

    // 공지사항 등록
    public function insertQuality(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_1" => $this->input->post("wr_1"),
            "wr_2" => $this->input->post("wr_2"),
            "wr_3" => $this->input->post("wr_3"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2"),
            "wr_4" => $this->input->post("wr_4"),
            "wr_13" => $this->input->post("wr_13"),
            "wr_15" => $this->input->post("wr_15"),
            "wr_6" => $this->input->post("wr_6"),
            "wr_7" => $this->input->post("wr_7"),
            "wr_8" => $this->input->post("wr_8"),
            "wr_9" => $this->input->post("wr_9"),
            "wr_11" => $this->input->post("wr_11"),
            "wr_5" => $this->input->post("wr_5"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_12" => $this->input->post("wr_12"),
            "wr_14" => $this->input->post("wr_14"),
            "mb_id" => "admin",
            "wr_name" => "Cloudqos 포탈관리자",
            "wr_hit" => 0,
            "wr_datetime" => date("Y-m-d H:i:s")
        );
        
        $db_result = $this->adminapi_model->insertQuality($data);
        if($db_result["result"]){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            if($ext == "GIF" || $ext == "gif"){
                                $bf_type = "1";
                            }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                                $bf_type = "2";
                            }else if($ext == "png" || $ext == "PNG"){
                                $bf_type = "3";
                            }else{
                                $bf_type = "0";
                            }
                            $file_data = array(
                                "bo_table" => "s41",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->adminapi_model->insertFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s41/".$newfile);
                           
                        }
                    }
                }
            }
            $result["result"] = true;
        }else{
            $result["result"] = false;
        }

        echo json_encode($result);
    }
    // 41 수정
    public function updateQuality(){
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_1" => $this->input->post("wr_1"),
            "wr_2" => $this->input->post("wr_2"),
            "wr_3" => $this->input->post("wr_3"),
            "wr_link1" => $this->input->post("wr_link1"),
            "wr_link2" => $this->input->post("wr_link2"),
            "wr_4" => $this->input->post("wr_4"),
            "wr_13" => $this->input->post("wr_13"),
            "wr_15" => $this->input->post("wr_15"),
            "wr_6" => $this->input->post("wr_6"),
            "wr_7" => $this->input->post("wr_7"),
            "wr_8" => $this->input->post("wr_8"),
            "wr_9" => $this->input->post("wr_9"),
            "wr_11" => $this->input->post("wr_11"),
            "wr_5" => $this->input->post("wr_5"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_12" => $this->input->post("wr_12"),
            "wr_14" => $this->input->post("wr_14")
        );
        $result["result"] = $this->adminapi_model->updateQuality($data);
        

        echo json_encode($result);
    }

    public function updateQualityList(){
        $data = array(
            "status" => $this->input->post("status"),
            "wr_9" => $this->input->post("doDate"),
            "wr_14" => $this->input->post("confirmData")
        );
        $result["result"] = $this->adminapi_model->updateQuality($data);
        

        echo json_encode($result);
    }

    // 보고서 등록
    public function insertQualityFile(){
        if(isset($_FILES["bf_file"])){
            
            if($_FILES["bf_file"]["size"] > 0){
                $ext = explode('.', $_FILES["bf_file"]["name"]);
                $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                if($ext == "GIF" || $ext == "gif"){
                    $bf_type = "1";
                }else if($ext == "JPG" || $ext == "jpg" || $ext == "jpeg"){
                    $bf_type = "2";
                }else if($ext == "png" || $ext == "PNG"){
                    $bf_type = "3";
                }else{
                    $bf_type = "0";
                }
                $file_data = array(
                    "bo_table" => "s41",
                    "wr_id" => $this->input->post("wr_id"),
                    "bf_no" => 0,
                    "bf_source" => $_FILES["bf_file"]["name"],
                    "bf_file" => $newfile,
                    "bf_filesize" => $_FILES["bf_file"]["size"],
                    "bf_type" => $bf_type,
                    "bf_datetime" => date("Y-m-d H:i:s")
                );
                $this->adminapi_model->insertFile($file_data);
                move_uploaded_file( $_FILES['bf_file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/upload/s41/".$newfile);
                $result["result"] = true;    
            }else{
                $result["error"] = "1";
                $result["result"] = false;
            }
        }else{
            $result["error"] = "2";
            $result["result"] = false;
        }
    }
    // 공지사항 삭제
    public function deleteQuality(){
        $result["result"] = $this->adminapi_model->deleteQuality();

        echo json_encode($result);
    }

    // 관리자 리스트
    public function fetchAdmin(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getAdminTotal();
        $result["list"] = $this->adminapi_model->fetchAdmin($start,$end);

        echo json_encode($result);
    }
    // 공지사항 상세
    public function selectAdmin(){
        $result["info"] = $this->adminapi_model->selectAdmin();
        
        echo json_encode($result);  
    }

    // 공지사항 등록
    public function insertAdmin(){
        $data = array(
            "mb_level" => "9",
            "mb_admin_datetime" => date("Y-m-d H:i:s")
        );
        
        $result["result"] = $this->adminapi_model->insertAdmin($data);
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => $this->input->post("mb_id")." 관리자 추가",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }
    // 공지사항 수정
    // public function updateAdmin(){
    //     $data = array(
    //         "mb_name" => $this->input->post("adminName"),
    //         "mb_email" => $this->input->post("adminEmail")
    //     );
    //     $result["result"] = $this->adminapi_model->updateAdmin($data);
        
    //     echo json_encode($result);
    // }
    // 공지사항 삭제
    public function deleteAdmin(){
        $result["result"] = $this->adminapi_model->deleteAdmin();

        echo json_encode($result);
    }

    public function updateApply1(){
        $data = array(
            "status" => $this->input->post("status")
        );
        $result["result"] = $this->adminapi_model->updateApply1($data,$this->input->post("wr_id"));
        
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => $this->input->post("wr_subject")." 신청 확인",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);

        echo json_encode($result);
    }

    

    public function updateApply2(){
        $data = array(
            "status1" => $this->input->post("status1"),
            "status2" => $this->input->post("status2"),
            "status3" => $this->input->post("status3"),
            "status4" => $this->input->post("status4"),
            "status5" => $this->input->post("status5"),
            "status6" => $this->input->post("status6"),
            "status7" => $this->input->post("status7"),
            "status8" => $this->input->post("status8")
            // "reason1" => $this->input->post("reason1"),
            // "reason2" => $this->input->post("reason2"),
            // "reason3" => $this->input->post("reason3"),
            // "reason4" => $this->input->post("reason4"),
            // "reason5" => $this->input->post("reason5"),
            // "reason6" => $this->input->post("reason6"),
            // "reason7" => $this->input->post("reason7"),
            // "reason8" => $this->input->post("reason8")
        );
        $result["result"] = $this->adminapi_model->updateApply2($data,$this->input->post("wr_id"));
        if($this->input->post("actionType") == "2"){ // 진단완료
            if($this->input->post("status1") == "1" && $this->input->post("status2") == "1" && $this->input->post("status3") == "1" && $this->input->post("status4") == "1" && $this->input->post("status5") == "1" && $this->input->post("status6") == "1" && $this->input->post("status7") == "1" && $this->input->post("status8") == "1"){
                $data = array(
                    "status" => 2
                );
                $log_data = array(
                    "writer" => $this->session->userdata("adminName"),
                    "name" => $this->session->userdata("adminCom"),
                    "action_id" => $this->session->userdata("adminId"),
                    "content" => $this->input->post("wr_subject")." 진위 여부 점검 완료",
                    "type" => 1,
                    "regdate" => date("Y-m-d H:i:s")
                );
                $this->adminapi_model->insertLog($log_data);
            }else{
                $data = array(
                    "status" => 3
                );
                $log_data = array(
                    "writer" => $this->session->userdata("adminName"),
                    "name" => $this->session->userdata("adminCom"),
                    "action_id" => $this->session->userdata("adminId"),
                    "content" => $this->input->post("wr_subject")." 진위 여부 반려",
                    "type" => 1,
                    "regdate" => date("Y-m-d H:i:s")
                );
                $this->adminapi_model->insertLog($log_data);
            }

            $result["result"] = $this->adminapi_model->updateApply1($data,$this->input->post("idx"));
        }
        echo json_encode($result);
    }

    public function updateApply3(){
        $data = array(
            "status1" => $this->input->post("status1"),
            "status2" => $this->input->post("status2"),
            "status3" => $this->input->post("status3"),
            "status4" => $this->input->post("status4"),
            "status5" => $this->input->post("status5"),
            "status6" => $this->input->post("status6"),
            "status7" => $this->input->post("status7"),
            "status8" => $this->input->post("status8"),
            "status9" => $this->input->post("status9"),
            "status10" => $this->input->post("status10"),
            "status11" => $this->input->post("status11"),
            "status12" => $this->input->post("status12"),
            "status13" => $this->input->post("status13"),
            "status14" => $this->input->post("status14"),
            "status15" => $this->input->post("status15"),
            "status16" => $this->input->post("status16"),
            "status17" => $this->input->post("status17"),
            "status18" => $this->input->post("status18"),
            "status19" => $this->input->post("status19"),
            "status20" => $this->input->post("status20"),
            "status21" => $this->input->post("status21"),
            "reason1" => $this->input->post("reason1"),
            "reason2" => $this->input->post("reason2"),
            "reason3" => $this->input->post("reason3"),
            "reason4" => $this->input->post("reason4"),
            "reason5" => $this->input->post("reason5"),
            "reason6" => $this->input->post("reason6"),
            "reason7" => $this->input->post("reason7"),
            "reason8" => $this->input->post("reason8"),
            "reason9" => $this->input->post("reason9"),
            "reason10" => $this->input->post("reason10"),
            "reason11" => $this->input->post("reason11"),
            "reason12" => $this->input->post("reason12"),
            "reason13" => $this->input->post("reason13"),
            "reason14" => $this->input->post("reason14"),
            "reason15" => $this->input->post("reason15"),
            "reason16" => $this->input->post("reason16"),
            "reason17" => $this->input->post("reason17"),
            "reason18" => $this->input->post("reason18"),
            "reason19" => $this->input->post("reason19"),
            "reason20" => $this->input->post("reason20"),
            "reason21" => $this->input->post("reason21")
        );
        $result["result"] = $this->adminapi_model->updateApply3($data,$this->input->post("wr_id"));
        if($this->input->post("status1") == "1" && $this->input->post("status2") == "1" && $this->input->post("status3") == "1" && $this->input->post("status4") == "1" && $this->input->post("status5") == "1" && $this->input->post("status6") == "1" && $this->input->post("status7") == "1" && $this->input->post("status8") == "1" && $this->input->post("status9") == "1" && $this->input->post("status10") == "1" && $this->input->post("status11") == "1" && $this->input->post("status12") == "1" && $this->input->post("status13") == "1" && $this->input->post("status14") == "1" && $this->input->post("status15") == "1" && $this->input->post("status16") == "1" && $this->input->post("status17") == "1" && $this->input->post("status18") == "1" && $this->input->post("status19") == "1" && $this->input->post("status20") == "1" && $this->input->post("status21") == "1"){
            if($this->input->post("actionType") == "2"){ // 진단완료
                $data = array(
                    "status" => 6
                );
                $result["result"] = $this->adminapi_model->updateApply1($data,$this->input->post("idx"));
                $apply = $this->adminapi_model->selectApply1S($this->input->post("idx"));
                $apply3 = $this->adminapi_model->selectApply3S($this->input->post("idx"));
                $data2 = array(
                    "mb_id" => $apply["mb_id"],
                    "wr_subject" => $apply["wr_subject"],
                    "wr_1" => $apply["wr_subject"],
                    "wr_2" => $apply["wr_3"], // IaaS , SaaS, PaaS
                    "wr_3" => $apply["wr_name"],
                    "wr_link1" => $apply["wr_9"],
                    "wr_4" => $apply["wr_12"],
                    // "wr_13" => $this->input->post("wr_13"),
                    // "wr_15" => $this->input->post("wr_15"),
                    "wr_6" => $apply3["wr_content"],
                    // "wr_7" => $this->input->post("wr_7"),
                    // "wr_8" => $this->input->post("wr_8"),
                    // "wr_9" => $this->input->post("wr_9"),
                    // "wr_11" => $this->input->post("wr_11"),
                    "wr_5" => $apply3["wr_24"],
                    "wr_content" => $apply["wr_content"],
                    // "wr_12" => $this->input->post("wr_12"),
                    // "wr_14" => $this->input->post("wr_14"),
                    "mb_id" => "admin",
                    "wr_name" => "Cloudqos 포탈관리자",
                    "wr_hit" => 0,
                    "wr_datetime" => date("Y-m-d H:i:s"),
                    "idx" => $this->input->post("idx"),
                    'status' => 0
                );
                $this->adminapi_model->insertBoard41($data2);
                $log_data = array(
                    "writer" => $this->session->userdata("adminName"),
                    "name" => $this->session->userdata("adminCom"),
                    "action_id" => $this->session->userdata("adminId"),
                    "content" => $this->input->post("wr_subject")." 관리 체계 점검 완료",
                    "type" => 1,
                    "regdate" => date("Y-m-d H:i:s")
                );
                $this->adminapi_model->insertLog($log_data);
            }else{
                $data = array(
                    "status" => 4
                );
                $result["result"] = $this->adminapi_model->updateApply1($data,$this->input->post("idx"));

            }
            
            
        }else{
            $data = array(
                "status" => 5
            );
            $result["result"] = $this->adminapi_model->updateApply1($data,$this->input->post("idx"));
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("wr_subject")." 관리 체계 반려",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }

        echo json_encode($result);
    }

    // 가용성 리스트
    public function fetchPerformance1(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getPerformance1Total();
        $result["list"] = $this->adminapi_model->fetchPerformance1($start,$end);

        echo json_encode($result);
    }

    // 전체 등록 등록
    public function insertPerformance(){		
        $data_graph = array(
            "gp_mb_no" => $this->input->post("mb_no"),
            "gp_hostname" => $this->input->post("host_name"),
            "gp_code" => $this->input->post("gp_code"),
            "gp_name" => $this->input->post("gp_name"),
            "gp_useflag" => 'Y',
            "gp_regdate" => date("Y-m-d H:i:s")
        );
		$this->graph->insertGraph($data_graph);

        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );

        $this->adminapi_model->insertPerformance1($data);
        $this->adminapi_model->insertPerformance2($data);
        $this->adminapi_model->insertPerformance3($data);
        $this->adminapi_model->insertPerformance4($data);
        $this->adminapi_model->insertPerformance5($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);
        if($db_result["result"]){
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." 성능보고서 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    public function insertPerformance1(){
        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertPerformance1($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);

        if($db_result["result"]){
            
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." 성능보고서 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    // 응답시간 리스트
    public function fetchPerformance2(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getPerformance2Total();
        $result["list"] = $this->adminapi_model->fetchPerformance2($start,$end);

        echo json_encode($result);
    }

    // 응답시간 등록
    public function insertPerformance2(){
        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );

        $this->adminapi_model->insertPerformance2($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);
        if($db_result["result"]){
            
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." 응답시간 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    // 탄력성 리스트
    public function fetchPerformance3(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getPerformance3Total();
        $result["list"] = $this->adminapi_model->fetchPerformance3($start,$end);

        echo json_encode($result);
    }

    // 탄력성 등록
    public function insertPerformance3(){
        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );

        $this->adminapi_model->insertPerformance3($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);
        if($db_result["result"]){
            
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." 탄력성 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    // 이벤트알림지연 리스트
    public function fetchPerformance4(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getPerformance4Total();
        $result["list"] = $this->adminapi_model->fetchPerformance4($start,$end);

        echo json_encode($result);
    }

    // 이벤트알림지연 등록
    public function insertPerformance4(){
        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );

        $this->adminapi_model->insertPerformance4($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);
        if($db_result["result"]){
            
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." 이벤트 알림 지연 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }
    // interrupt 리스트
    public function fetchPerformance5(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getPerformance5Total();
        $result["list"] = $this->adminapi_model->fetchPerformance5($start,$end);

        echo json_encode($result);
    }

    // interrupt 등록
    public function insertPerformance5(){
        $data = array(
            "mb_no" => $this->input->post("mb_no"),
            "host_name" => $this->input->post("host_name"),
            "regdate" => date("Y-m-d H:i:s")
        );

        $this->adminapi_model->insertPerformance5($data);
        $data_member = array(
            "mb_performance_use" => 1
        );
        $db_result["result"] = $this->adminapi_model->updateUserPerformance($data_member);
        if($db_result["result"]){
            
            $result["result"] = true;
            $log_data = array(
                "writer" => $this->session->userdata("adminName"),
                "name" => $this->session->userdata("adminCom"),
                "action_id" => $this->session->userdata("adminId"),
                "content" => $this->input->post("host_name")." interrupt 등록",
                "type" => 1,
                "regdate" => date("Y-m-d H:i:s")
            );
            $this->adminapi_model->insertLog($log_data);
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    public function fetchLog(){
        if($this->input->get("page") != ""){
            $page = $this->input->get("page");
        }else{
            $page = 1;
        }
        $end = $this->input->get("row");
        $start = ($page-1)*$end;

        $result = array();

        $result["total"] = $this->adminapi_model->getLogTotal();
        $result["list"] = $this->adminapi_model->fetchLog($start,$end);

        echo json_encode($result);
    }

    public function userSession(){
        $data = array(
            "user_session" => $this->input->post("user_session")
        );
        $result["result"] = $this->adminapi_model->updateSession($data);
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "회원 세션 시간 변경",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    public function adminSession(){
        $data = array(
            "admin_session" => $this->input->post("admin_session")
        );
        $result["result"] = $this->adminapi_model->updateSession($data);
        $log_data = array(
            "writer" => $this->session->userdata("adminName"),
            "name" => $this->session->userdata("adminCom"),
            "action_id" => $this->session->userdata("adminId"),
            "content" => "관리자 세션 시간 변경",
            "type" => 1,
            "regdate" => date("Y-m-d H:i:s")
        );
        $this->adminapi_model->insertLog($log_data);
        echo json_encode($result);
    }

    public function sessionInfo(){
        $result["info"] = $this->adminapi_model->getSessionInfo();

        echo json_encode($result);
    }

    public function edmSend(){
        $this->load->library('upload');
        if(isset($_FILES["files"])){
            if($_FILES['files']['size'] > 0) { // upload is the name of the file field in the form

                move_uploaded_file( $_FILES['files']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/upload/edm/".$_FILES['files']['name']);
                $pathToUploadedFile = $_SERVER["DOCUMENT_ROOT"]."/upload/edm/".$_FILES['files']['name'];
                    
            }else{
                $pathToUploadedFile = "";
            }
        }else{
            $pathToUploadedFile = "";
        }
        

        $this->load->library('email');

        $this->email->from($this->input->post("from"), 'CloudQos');
        $this->email->to($this->input->post("to"));
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        $this->email->subject($this->input->post("subject"));
        $this->email->message($this->input->post("message"));
        if($pathToUploadedFile != ""){
            $this->email->attach($pathToUploadedFile);
        }
        $this->email->set_mailtype("html");

        $this->email->send();
        if($pathToUploadedFile != ""){
            unlink($pathToUploadedFile);
        }

        echo json_encode(array("result"=>true));
    }

    public function getBanner(){
        $result["info"] = $this->adminapi_model->getBanner();

        echo json_encode($result);
    }

    public function bannerWrite(){
        

        $data = array(
            "banner_title" => $this->input->post("banner_title"),
            "banner_sub1" => $this->input->post("banner_sub1"),
            "banner_sub2" => $this->input->post("banner_sub2")
        );
        if(isset($_FILES["file"])){
            if($_FILES["file"]["size"] > 0){
                
                $ext = explode('.', $_FILES["file"]["name"]);

                $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                move_uploaded_file( $_FILES['file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/upload/main/".$newfile);
                $data["banner_img"] = $newfile;
            }
        }
        $result["result"] = $this->adminapi_model->updateSession($data);

        echo json_encode($result);
    }
}


?>