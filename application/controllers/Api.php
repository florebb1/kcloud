<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
        $this->load->library("session");
    }

    /*
    로그인
    GET
    userId : 아이디
    userPw : 비밀번호
	*/
    public function login(){
        $sessionInfo = $this->api_model->getSessionInfo();
        $this->session->sess_expiration = $sessionInfo["user_session"];
    	$login = $this->api_model->login();
        if($login["result"] == true){
            $newdata = array(
                'userSeq'  => $login["userSeq"],
                'userName'     => $login["userName"],
                'userId' => $login["userId"]
            );

            $this->session->set_userdata($newdata);
        }
        
        echo json_encode($login);
    }

    public function logout(){
        $outdata = array("userSeq","userName","userId");
        $this->session->unset_userdata($outdata);
        
        echo json_encode(array("result"=>true));
    }

    /*
    중복아이디
    GET
    userId : 아이디
    */
    public function dupleCheck(){
    	$result = array();
    	$duple = $this->api_model->dupleCheck($this->input->get("userId"));
    	if($duple){
    		$result["result"] = false;
    		$result["errorCode"] = "-1"; // 아이디 중복
    	}else{
    		$result["result"] = true;
    	}
    	echo json_encode($result);
    }

    /*
    회원가입
    POST
    userName : 이름
    userId : 아이디
    userPw : 비밀번호
    userEmail : 이메일
    organizationName : 단체명
    serviceName : 서비스명
    url : URL
    serviceModel : 서비스 모델
    counsulting : 컨설팅 희망 여부
    emailYn : 선택 동의 체크 Y or N
    */
    public function join(){
    	$result = array();
    	$duple = $this->api_model->dupleCheck($this->input->post("userId"));
    	if($duple){
    		$result["result"] = false;
    		$result["errorCode"] = "-1"; // 아이디 중복
    	}else{
    		// $new_password = password_hash($this->input->post('userPw'), PASSWORD_DEFAULT);
    		$data = array(
    			"mb_name" => $this->input->post("userName"),
    			"mb_id" => $this->input->post("userId"),
    			// "mb_password" => $new_password,
    			"mb_email" => $this->input->post("userEmail"),
    			"mb_1" => $this->input->post("organizationName"),
    			"mb_2" => $this->input->post("serviceName"),
    			"mb_3" => $this->input->post("url"),
    			"mb_4" => $this->input->post("serviceModel"),
    			"mb_5" => $this->input->post("counsulting"),
                "mb_6" => "",
                "mb_7" => "",
                "mb_8" => $this->input->post("emailYn"),
                "mb_9" => "1",
                "mb_level" => "2",
                "mb_joinAuth" => "N",
                "mb_datetime" => date('Y-m-d H:i:s')
    		);

    		$db_result = $this->api_model->insertUser($data);
            if($db_result){
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('help@cloudqos.or.kr', 'CloudQos');
                $this->email->to($this->input->post("userEmail"));
                // $this->email->cc('another@another-example.com');
                // $this->email->bcc('them@their-example.com');
                $this->email->subject('[CloudQos]회원가입 축하메일');
                $this->email->message('회원가입을 축하하고 아래 URL을 클릭하시기 바랍니다. <a href="https://www.cloudqos.or.kr/api/emailAuth?q='.base64_encode($this->db->insert_id()).'">인증하기</a>');
                $this->email->set_mailtype("html");

                $this->email->send();
            }
    		$result["result"] = $db_result;
    	}

    	echo json_encode($result);
    }

    /*
	아이디 찾기
	GET
	email : 이메일
    */
    public function idSearch(){
    	$result = array();
    	$email = $this->api_model->selectEmailName();
    	if($email["result"]){
            $rand = rand(1000,9999);
    		$this->load->library('email');

			$this->email->from('help@cloudqos.or.kr', 'CloudQos');
			$this->email->to($this->input->get("email"));
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');
			$this->email->subject('[CloudQos]아이디 찾기 메일');
			$this->email->message('인증코드는 '.$rand);

			$this->email->send();
            $this->api_model->updateAuthNumberId($email["mb_id"],$rand);
			$result["result"] = true;
    	}else{
    		$result["result"] = false;
    	}

    	echo json_encode($result);
    }

    /*
	비밀번호 찾기
	GET
	id : 아이디
	email : 이메일
    */
    public function pwSearch(){
    	$result = array();
    	$email = $this->api_model->selectIdEmail();
    	if($email["result"]){
    		$rand = rand(1000,9999);
    		$this->load->library('email');

			$this->email->from('help@cloudqos.or.kr', 'CloudQos');
			$this->email->to($this->input->get("email"));
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');

			$this->email->subject('[CloudQos]비밀번호 찾기 메일');
			$this->email->message('인증코드는 '.$rand);

			$this->email->send();
            $this->api_model->updateAuthNumberPw($email["userSeq"],$rand);
			$result["result"] = true;
			// $result["authNumber"] = $rand;
			// $result["userSeq"] = $email["userSeq"];
    	}else{
    		$result["result"] = false;
    	}

    	echo json_encode($result);
    }

    /*
    임시비번 발송
    POST
    id : 아이디
    email : 이메일
    */
    // public function resetPw(){
        
    // }

    /*
    비밀번호 업데이트
    POST
    userSeq : 회원키값
    pw : 업데이트할 비밀번호
    */
    public function pwUpdate(){
    	$result["result"] = $this->api_model->updatePassword();

    	echo json_encode($result);
    }

    /*
    품질성능 각각 갯수
    GET
    */
    public function getQualitySummary(){
        $result["IaaS"] = $this->api_model->selectQualityCount("IaaS");
        $result["PaaS"] = $this->api_model->selectQualityCount("PaaS");
        $result["SaaS"] = $this->api_model->selectQualityCount("SaaS");
        $result["etc"] = $this->api_model->selectQualityCount("");
        echo json_encode($result);
    }
    /*
    품질성능 확인 서비스
    GET
    pageNum : pageNum
    searchType : 검색타입
    searchWord : 검색어
    row : 10
    type : IaaS, SaaS, PaaS
    */
    public function fetchQuality (){
        $count = $this->api_model->selectQualityCount($this->input->get("type"));
        $list = $this->api_model->fetchQuality();
        $result["totalCount"] = $count;
        $result["list"] = $list;

        echo json_encode($result);
    }

    /*
    품질성능 상세
    GET
    wr_id : 품질성능 키값
    */
    public function selectQuality(){
        $info = $this->api_model->selectQuality();
        $result["info"] = $info;
        echo json_encode($result);
    }

    /*
    공지사항
    GET
    pageNum : pageNum
    searchType : 검색타입
    searchWord : 검색어
    */
    public function fetchNotice(){
    	$count = $this->api_model->selectNoticeCount();
    	$list = $this->api_model->fetchNotice();
    	$result["totalCount"] = $count;
    	$result["list"] = $list;

    	echo json_encode($result);
    }

    /*
	공지사항 상세
	GET
	wr_id : 공지사항 키값
    */
	public function selectNotice(){
		$info = $this->api_model->selectNotice();
		$result["info"] = $info;
        $fileInfo = $this->api_model->fetchBoardFile("s51",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
		echo json_encode($result);
	}
    /*
    FAQ
    GET
    pageNum : pageNum
    searchType : 검색타입
    searchWord : 검색어
    */
    public function fetchFaq(){
    	$count = $this->api_model->selectFaqCount();
    	$list = $this->api_model->fetchFaq();
    	$result["totalCount"] = $count;
    	$result["list"] = $list;

    	echo json_encode($result);
    }

    /*
    자료실
    GET
    pageNum : pageNum
    searchType : 검색타입
    searchWord : 검색어
    */
    public function fetchReference(){
    	$count = $this->api_model->selectReferenceCount();
    	$list = $this->api_model->fetchReference();
    	$result["totalCount"] = $count;
    	$result["list"] = $list;

    	echo json_encode($result);
    }
    /*
    공지사항 상세
    GET
    wr_id : 공지사항 키값
    */
    public function selectReference(){
        $info = $this->api_model->selectReference();
        $result["info"] = $info;
        $fileInfo = $this->api_model->fetchBoardFile("s52",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
        echo json_encode($result);
    }

    /*
    공지사항 상세
    GET
    wr_id : 공지사항 키값
    */
    public function selectFaq(){
        $info = $this->api_model->selectFaq();
        $result["info"] = $info;
        $fileInfo = $this->api_model->fetchBoardFile("s53",$this->input->get('wr_id'));
        $result["fileInfo"] = $fileInfo;
        echo json_encode($result);
    }
    /*
    문의하기
    POST
    userSeq : 회원키값
    userName : 이름
    userEmail : 이메일
    organizationName : 단체명
    wr_subject : 제목
    wr_content : 내용
    wr_file : 파일
    */
    public function insertQna(){
    	$data = array(
    			"mb_no" => $this->input->post("userSeq"),
    			"mb_name" => $this->input->post("userName"),
    			// "mb_password" => $new_password,
    			"mb_email" => $this->input->post("userEmail"),
    			"mb_1" => $this->input->post("organizationName"),
    			"wr_subject" => $this->input->post("wr_subject"),
    			"wr_content" => $this->input->post("wr_content")
		);

		$wr_id = $this->api_model->insertQna($data);
        // $result["wr_file"] = $_FILES["wr_file"];
		if(!$wr_id){
			$result["result"] = false;
		}else{
            if(isset($_FILES["wr_file"])){
    			if($_FILES["wr_file"]["size"] > 0){
    				$update_data["wr_origin_filename"] = $_FILES["wr_file"]["name"];
                    $ext = explode('.', $_FILES["wr_file"]["name"]);

    				$newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
    				move_uploaded_file( $_FILES['wr_file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/upload/qna/".$newfile);
    				$update_data["wr_filename"] = $newfile;

    				$this->api_model->updateQna($wr_id,$update_data);
    			}
            }
			$result["result"] = true;
		}
		echo json_encode($result);
    }

    /*
    id 찾기 인증번호 체크
    GET
    email : 이메일주소
    name : 이름
    authNum : 인증번호
    */
    public function checkIdAuth(){
        $result = array();
        $db_result = $this->api_model->selectIdAuth();
        echo json_encode($db_result);
    }

    /*
    pw 찾기 인증번호 체크
    GET
    id : 아이디
    email : 이메일
    authNum : 인증번호
    */
    public function checkPwAuth(){
        $result = array();
        $db_result = $this->api_model->selectPwAuth();
        if($db_result["result"]){
            $pw = rand(111111,999999);
            $result["result"] = $this->api_model->updatePasswordReset($pw);
            if($result["result"]){
                $this->load->library('email');

                $this->email->from('help@cloudqos.or.kr', 'CloudQos');
                $this->email->to($this->input->get("email"));
                // $this->email->cc('another@another-example.com');
                // $this->email->bcc('them@their-example.com');

                $this->email->subject('[CloudQos] 임시 비밀번호');
                $this->email->message('임시 비밀번호는 '.$pw);

                $this->email->send();
            }
//            echo json_encode($result);
        }
        echo json_encode($db_result);
    }

    /*
    회원가입 인증 마무리
    */
    public function emailAuth(){
        $userSeq = base64_decode($this->input->get("q"));
        // echo $userSeq;
        $db_result = $this->api_model->updateJoinAuth($userSeq);
        if($db_result) {
            echo "<script>alert('인증이 완료 되었습니다.');document.location.href='/'</script>";
            // redirect('/');
        }
    }

    /*
    회원정보 
    GET
    */
    public function selectUser(){
        $result["info"] = $this->api_model->selectUser();
        echo json_encode($result);
    }

    public function beforeUpdateEmail(){

        $rand = rand(1000,9999);
        $this->load->library('email');

        $this->email->from('help@cloudqos.or.kr', 'CloudQos');
        $this->email->to($this->input->get("userEmail"));
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        $this->email->subject('[CloudQos]이메일 변경 메일');
        $this->email->message('인증코드는 '.$rand);

        $this->email->send();
        $this->api_model->updateAuthNumberId($this->input->get("mb_id"),$rand);
        $result["result"] = true;
        echo json_encode($result);
    }
    /*
    회원정보 이메일 업데이트
    POST
    userEmail : 회원이메일
    */
    public function updateUserEmail(){
        $db_result = $this->api_model->selectOnlyEmailAuth();
        if($db_result["result"]){
            $data = array(
                "mb_email" => $this->input->post("userEmail")
            );
            $result["result"] = $this->api_model->updateUser($data);
        }else{
            $result["result"] = false;
        }

        echo json_encode($result);
    }

    /*
    회원정보 추가정보 업데이트
    POST
    organizationName : 단체명
    serviceName : 서비스명
    url : URL
    serviceModel : 서비스 모델
    counsulting : 컨설팅 희망 여부
    */
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
        $result["result"] = $this->api_model->updateUser($data);

        echo json_encode($result);
    }

    /*
    회원정보 서비스소개 업데이트
    POST
    serviceInfo : 서비스 소개    
    */
    public function updateUserService(){
        $data = array(
            "service_info" => $this->input->post("service_info")
        );
        $result["result"] = $this->api_model->updateUser($data);

        echo json_encode($result);
    }

    /*
    회원정보 알림수신 업데이트
    POST
    emailYn : 알림 수신
    notiMethod : 알림 방법
    */
    public function updateUserNoti(){
        $data = array(
            "mb_8" => $this->input->post("emailYn"),
            "mb_9" => $this->input->post("notiMethod")
        );
        $result["result"] = $this->api_model->updateUser($data);

        echo json_encode($result);
    }

    /*
    회원탈퇴
    POST
    userId : 아이디
    userPw : 비밀번호
    userEmail : 이메일
    reason : 사유
    */
    public function dropMember(){
        $memCheck = $this->api_model->selectUserIdEmail();
        if($memCheck["result"] == true){
            // if($memCheck["mb_no"] == $this->session->userdata('userSeq')){
            //     $data = array(
            //         "mb_leave_date" => date("Ymd"),
            //         "mb_drop_reason" => $this->input->post("reason")
            //     );

            //     $result["result"] = $this->api_model->dropUser($data);
            // }else{
            //     $result["result"] = false;
            //     $result["errorCode"] = "-3";
            // }
            $result["result"] = true;
            $result["userSeq"] = $memCheck["userSeq"];
        }else{
            $result["result"] = false;
            $result["errorCode"] = $memCheck["errorCode"];
        }

        echo json_encode($result);
    }

    public function dropMemberFin(){
        // $memCheck = $this->api_model->selectUserIdEmail();
        // if($memCheck["result"] == true){
            // if($memCheck["mb_no"] == $this->session->userdata('userSeq')){
        $data = array(
            "mb_leave_date" => date("Ymd"),
            "mb_drop_reason" => $this->input->post("reason")
        );

        $result["result"] = $this->api_model->dropUser($data);
            
            // $result["result"] = true;
            
        // }else{
        //     $result["result"] = false;
        //     $result["errorCode"] = $memCheck["errorCode"];
        // }

        echo json_encode($result);
    }

    /*
    품질성능 검증 신청절차
    POST
    wr_1 : 회사(기관명)
    wr_2 : 회사(기관명 영문)
    wr_10 : 홈페이지
    wr_4 : 사업자 번호
    wr_name : 대표자
    wr_email : 대표자 email
    wr_6 : 대표 전화번호
    wr_7 : 주소
    wr_11 : 업무 담당자 성명
    wr_12 : 부서/직급
    wr_13 : 담당자 전화번호
    wr_14 : 담당자 핸드폰번호
    wr_15 : 담당자 이메일
    wr_16 : 담당자 fax
    wr_subject : 서비스 명칭
    wr_8 : 서비스 명칭 영문명
    wr_9 : 서비스 웹사이트
    wr_3 : 서비스 모델 ( IaaS , PaaS, SaaS)
    wr_content : 서비스 소개
    wr_5 : 기타사항
    wr_password : 비밀번호
    bf_file[] : 첨부파일
    */
    public function apply1(){
        $result = array();
        $data = array(
            "wr_1" => $this->input->post("wr_1"),
            "wr_2" => $this->input->post("wr_2"),
            "wr_10" => $this->input->post("wr_10"),
            "wr_4" => $this->input->post("wr_4"),
            "wr_name" => $this->input->post("wr_name"),
            "wr_email" => $this->input->post("wr_email"),
            "wr_6" => $this->input->post("wr_6"),
            "wr_7" => $this->input->post("wr_7"),
            "wr_11" => $this->input->post("wr_11"),
            "wr_12" => $this->input->post("wr_12"),
            "wr_13" => $this->input->post("wr_13"),
            "wr_14" => $this->input->post("wr_14"),
            "wr_15" => $this->input->post("wr_15"),
            "wr_16" => $this->input->post("wr_16"),
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_8" => $this->input->post("wr_8"),
            "wr_9" => $this->input->post("wr_9"),
            "wr_3" => $this->input->post("wr_3"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_5" => $this->input->post("wr_5"),
            "wr_password" => $this->input->post("wr_password"),
            "mb_id" => $this->session->userdata('userId'),
            "wr_datetime" => date("Y-m-d H:i:s"),
            "wr_file" => count($this->input->post("bf_file")),
            "wr_ip" => $this->input->ip_address(),
            "status"=>0
        );
        $db_result = $this->api_model->insertApply1($data);
        if($db_result["result"] == true){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            // $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext;
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
                                "bo_table" => "s32",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->api_model->insertApplyFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s32/".$newfile);
                           
                        }
                    }
                }
            }
            $result["result"] = true;
            $result["idx"] = $wr_id;
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    /*
    진위여부 자가진단
    wr_name : 업체명
    wr_homepage : 서비스명
    wr_password : 비밀번호
    wr_9 : 운영현황
    wr_1 : 수립여부 Y or N

    wr_subject : 운영현황
    wr_2 : 수립여부 Y or N

    wr_content : 운영현황
    wr_3 : 수립여부 Y or N

    wr_10 : 운영현황
    wr_4 : 수립여부 Y or N

    wr_11 : 운영현황
    wr_5 : 수립여부 Y or N

    wr_12 : 운영현황
    wr_6 : 수립여부 Y or N

    wr_13 : 운영현황
    wr_7 : 수립여부 Y or N

    wr_14 : 운영현황
    wr_8 : 수립여부 Y or N

    bf_file[] : 각 항목별 첨부파일
    */
    public function apply2(){
        $result = array();
        $data = array(
            "wr_name" => $this->input->post("wr_name"),
            "wr_homepage" => $this->input->post("wr_homepage"),
            "wr_password" => $this->input->post("wr_password"),
            "wr_9" => $this->input->post("wr_9"),
            "wr_1" => $this->input->post("wr_1"),
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_2" => $this->input->post("wr_2"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_3" => $this->input->post("wr_3"),
            "wr_10" => $this->input->post("wr_10"),
            "wr_4" => $this->input->post("wr_4"),
            "wr_11" => $this->input->post("wr_11"),
            "wr_5" => $this->input->post("wr_5"),
            "wr_12" => $this->input->post("wr_12"),
            "wr_6" => $this->input->post("wr_6"),
            "wr_13" => $this->input->post("wr_13"),
            "wr_7" => $this->input->post("wr_7"),
            "wr_14" => $this->input->post("wr_14"),
            "wr_8" => $this->input->post("wr_8"),
            "mb_id" => $this->session->userdata('userId'),
            "wr_datetime" => date("Y-m-d H:i:s"),
            "wr_file" => count($this->input->post("bf_file")),
            "wr_ip" => $this->input->ip_address(),
            "idx" => $this->input->post("idx")
        );
        $db_result = $this->api_model->insertApply2($data);
        if($db_result["result"] == true){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]['size']);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            // $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext;
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
                                "bo_table" => "s33",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->api_model->insertApplyFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s33/".$newfile);
                           
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

    /*
    관리체계 자가진단
    wr_subject : 업체명
    wr_2 : 서비스명 (국문)
    wr_3 : 서비스명 (영문)
    wr_4 : 클라우드 인프라 위치 
    wr_5 : 클라우드 물리적 위치
    wr_content : 서비스 소개
    wr_24 : 주요기능
    wr_25 : 가용성 현황 서비스명(국문)
    wr_7 : 운영현황
    wr_8 : 운영현황
    wr_9 : 운영현황
    wr_10 : 운영현황
    wr_11 : 운영현황
    wr_26 : 응답성 현황
    wr_12 : 운영현황
    wr_13 : 운영현황
    wr_14 : 운영현황
    wr_15 : 운영현황
    wr_27 : 확장성 현황
    wr_16 : 운영현황
    wr_17 : 운영현황
    wr_18 : 운영현황
    wr_28 : 신뢰성 현황
    wr_20 : 운영현황
    wr_21 : 운영현황
    wr_29 : 신뢰성 현황
    wr_22 : 운영현황
    wr_23 : 운영현황
    wr_30 : 서비스 지속성 현황
    wr_31 : 서비스 지원 현황
    wr_19 : 운영현황
    wr_32 : 고객대응 현황
    wr_33 : 운영현황
    wr_name : 이름
    wr_password : 비밀번호
    bf_file[] : 첨부파일
    */
    public function apply3(){
        $result = array();
        $data = array(
            "wr_subject" => $this->input->post("wr_subject"),
            "wr_2" => $this->input->post("wr_2"),
            "wr_3" => $this->input->post("wr_3"),
            "wr_4" => $this->input->post("wr_4"),
            "wr_5" => $this->input->post("wr_5"),
            "wr_content" => $this->input->post("wr_content"),
            "wr_24" => $this->input->post("wr_24"),
            "wr_25" => $this->input->post("wr_25"),
            "wr_7" => $this->input->post("wr_7"),
            "wr_8" => $this->input->post("wr_8"),
            "wr_9" => $this->input->post("wr_9"),
            "wr_10" => $this->input->post("wr_10"),
            "wr_11" => $this->input->post("wr_11"),
            "wr_26" => $this->input->post("wr_26"),
            "wr_12" => $this->input->post("wr_12"),
            "wr_13" => $this->input->post("wr_13"),
            "wr_14" => $this->input->post("wr_14"),
            "wr_15" => $this->input->post("wr_15"),
            "wr_27" => $this->input->post("wr_27"),
            "wr_16" => $this->input->post("wr_16"),
            "wr_17" => $this->input->post("wr_17"),
            "wr_18" => $this->input->post("wr_18"),
            "wr_28" => $this->input->post("wr_28"),
            "wr_20" => $this->input->post("wr_20"),
            "wr_21" => $this->input->post("wr_21"),
            "wr_29" => $this->input->post("wr_29"),
            "wr_22" => $this->input->post("wr_22"),
            "wr_23" => $this->input->post("wr_23"),
            "wr_30" => $this->input->post("wr_30"),
            "wr_31" => $this->input->post("wr_31"),
            "wr_19" => $this->input->post("wr_19"),
            "wr_32" => $this->input->post("wr_32"),
            "wr_33" => $this->input->post("wr_33"),
            "wr_name" => $this->input->post("wr_name"),
            "wr_password" => $this->input->post("wr_password"),
            "mb_id" => $this->session->userdata('userId'),
            "wr_datetime" => date("Y-m-d H:i:s"),
            "wr_file" => count($this->input->post("bf_file")),
            "wr_ip" => $this->input->ip_address(),
            "idx" => $this->input->post("idx")
        );
        $db_result = $this->api_model->insertApply3($data);
        if($db_result["result"] == true){
            $wr_id = $db_result["wr_id"];
            if(isset($_FILES["bf_file"])){
                if(count($_FILES["bf_file"]) > 0){
                    for($i = 0; $i < count($_FILES["bf_file"]["size"]);$i++){
                        if($_FILES["bf_file"]["size"][$i] > 0){
                            $ext = explode('.', $_FILES["bf_file"]["name"][$i]);
                            $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext[count($ext)-1];
                            // $newfile = date("Ymdhis")."-".rand(10000,99999).".".$ext;
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
                                "bo_table" => "s34",
                                "wr_id" => $wr_id,
                                "bf_no" => $i,
                                "bf_source" => $_FILES["bf_file"]["name"][$i],
                                "bf_file" => $newfile,
                                "bf_filesize" => $_FILES["bf_file"]["size"][$i],
                                "bf_type" => $bf_type,
                                "bf_datetime" => date("Y-m-d H:i:s")
                            );
                            $this->api_model->insertApplyFile($file_data);
                            move_uploaded_file( $_FILES['bf_file']['tmp_name'][$i], $_SERVER["DOCUMENT_ROOT"]."/upload/s34/".$newfile);
                           
                        }
                    }
                }
            }
            // $result["bf_file"] = $_FILES["bf_file"];
            $result["result"] = true;
        }else{
            $result["result"] = false;
        }
        echo json_encode($result);
    }

    public function getApplySummary(){
        $result["applyTotal1"] = $this->api_model->getSummaryApply1Total();
        $result["applyTotal2"] = $this->api_model->getSummaryApply2Total();
        $result["applyTotal3"] = $this->api_model->getSummaryApply3Total();
        echo json_encode($result);
    }
}

?>