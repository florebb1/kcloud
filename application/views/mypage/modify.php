<?php
$userSeq = $this->session->userdata('userSeq');
$userName = $this->session->userdata('userName');
$userId = $this->session->userdata('userId');
?>
<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('layout/front/meta'); ?>
    <title><?php echo $title; ?></title>
</head>
<body>

<div class="header-wrapper">
    <?php $this->load->view('layout/front/header'); ?>
</div>
<div class="sub-content">
    <div class="sub-hero">
        <div class="p-5">회원정보수정</div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="#">회원정보수정</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 col-md-8 py-5">

                <form id="editForm1">
                    <div class="border p-3 mb-5">
                        <div class="col mb-3 border-bottom py-3">
	                        <h5>회원 기본 정보</h5>
						</div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">이름</div>
                            <div class="col-8 col-md-7"><input type="text" name="userName" class="form-control" readonly></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">아이디</div>
                            <div class="col-8 col-md-7"><input type="text" name="mb_id" class="form-control" readonly></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">이메일</div>
                            <div class="col-8 col-md-7"><input type="email" id="userEmail" name="userEmail" class="form-control"></div>
                            <div class="col-8 col-md-2 offset-4 offset-md-0"><button type="button" id="authBtn" class="btn btn-secondary btn-block m-mt">인증메일 발송</button></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right"></div>
                            <div class="col-8 col-md-7"><input type="number" name="authNum" class="form-control" placeholder="인증번호"></div>
                        </div>
                        <div class="text-center">
                            <button id="editBtn" type="button" class="btn btn-info">변경</button>
                        </div>
                    </div>
                </form>

                <form id="editForm2">
                    <div class="border p-3 mb-5">
                        <div class="col mb-3 border-bottom py-3">
                            <h5>비밀번호 변경</h5>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">비밀번호</div>
                            <div class="col-8 col-md-7"><input type="password" id="oldPw" class="form-control" placeholder="기존 비밀번호"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">새비밀번호</div>
                            <div class="col-8 col-md-7"><input type="password" name="pw" class="form-control" placeholder="새로운 비밀번호"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">새비밀번호 확인</div>
                            <div class="col-8 col-md-7"><input type="password" id="pwCheck" class="form-control" placeholder="새로운 비밀번호 확인"></div>
                        </div>
                        <div class="text-center">
                            <button id="editBtn2" type="button" class="btn btn-info">변경</button>
                        </div>
                    </div>
                </form>

                <form id="editForm3">
                    <div class="border p-3 mb-3">
                        <div class="col mb-3 border-bottom py-3">
                            <h5>추가 입력 정보</h5>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">단체명</div>
                            <div class="col-8 col-md-7"><input type="text" name="organizationName" class="form-control"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">서비스명</div>
                            <div class="col-8 col-md-7"><input type="text" name="serviceName" class="form-control"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">URL</div>
                            <div class="col-8 col-md-7"><input type="text" name="url" class="form-control" placeholder="http://"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">담당자 연락처</div>
                            <div class="col-8 col-md-7"><input type="text" name="chargerPhone" class="form-control"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">주소</div>
                            <div class="col-8 col-md-7"><input type="text" name="address" class="form-control" placeholder="회원정보수정에서 추가 정보 수집"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">서비스 모델</div>
                            <div class="col-8 col-md-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="inlineCheckbox1" name="serviceModel" value="1">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox1">IaaS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="inlineCheckbox2" name="serviceModel" value="2">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox2">PaaS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="inlineCheckbox3" name="serviceModel" value="3">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox3">SaaS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="inlineCheckbox4" name="serviceModel" value="4">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox4">기타</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">컨설팅 희망 여부</div>
                            <div class="col-8 col-md-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input2" type="radio" id="inlineCheckbox5" name="counsulting" value="1">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox5">희망</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input2" type="radio" id="inlineCheckbox6" name="counsulting" value="2">
                                    <label class="form-radio-label mb-0 px-2" for="inlineCheckbox6">비희망</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button id="editBtn3" type="button" class="btn btn-info">변경</button>
                        </div>
                    </div>
                </form>

                <form id="editForm4">
                    <div class="border p-3 mb-5">
                        <div class="col mb-3 border-bottom py-3">
                            <h5>서비스 소개</h5>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col"><textarea id="service_info" name="service_info" class="form-control min-height120"></textarea></div>
                        </div>
                        <div class="text-center">
                            <button id="editBtn4" type="button" class="btn btn-info">변경</button>
                        </div>
                    </div>
                </form>

                <form id="editForm5">
                    <div class="border p-3 mb-5">
                        <div class="col mb-3 border-bottom py-3">
                            <h5>성능 모니터 알림 수신 설정</h5>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">알림 수신</div>
                            <div class="col-8 col-md-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="ipushCheckbox1" name="emailYn" value="Y">
                                    <label class="form-radio-label mb-0 px-2" for="pushCheckbox1">수신</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input" type="radio" id="pushCheckbox2" name="emailYn" value="N">
                                    <label class="form-radio-label mb-0 px-2" for="pushCheckbox2">수신안함</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-4 col-md-3 text-right">알림 방법</div>
                            <div class="col-8 col-md-7 pr-0">
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input2" type="radio" id="emailCheckbox" name="notiMethod" value="1">
                                    <label class="form-radio-label mb-0 px-2" for="emailCheckbox">이메일</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-radio-input2" type="radio" id="smsCheckbox" name="notiMethod" value="2">
                                    <label class="form-radio-label mb-0 px-2" for="smsCheckbox">휴대전화</label>
                                </div>
                            </div>
                            <div class="col-12 text-danger alert alert-danger text-center my-4">* 휴대전화로 알림을 수신하기 위해서는 담당자 연락처 입력이 필수 입니다.</div>
                        </div>
                        <div class="text-center">
                            <button id="editBtn5" type="button" class="btn btn-info">변경</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<script>
    var seq = <?=$userSeq?>;
    var name = '<?=$userName?>';
    var id = '<?=$userId?>';
</script>
<script src="/assets/js/page/mypage/modify.js"></script>
</body>
</html>