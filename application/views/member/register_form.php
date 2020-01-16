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
			<div class="p-5">회원가입</div>
		</div>

		<div class="container">
			
			
			<div class="row mt-5 mb-3">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item active"><a href="#">회원가입</a></li>
						</ol>
					</nav>
				</div>
			</div>
			
			
			<div class="row d-flex justify-content-center mb-5">
				<div class="col-12 py-3 text-center">
					<h5 class="pb-5 border-bottom">회원 가입을 하시면 클라우드 품질&CenterDot;성능 검증 지원 포털의 다양한 혜택을 누리실 수 있습니다.</h5>
				</div>
				<div class="w-100"></div>
				<div class="col-12 col-md-8 py-5">
					<form id="registForm">
                        <input type="hidden" name="emailYn" value="N">
                        <input type="hidden" id="idChack">
						<h5>필수항목</h5>
						<div class="border p-5 mb-5">
							<div class="form-row mb-3">
								<div class="col-4 col-md-3 text-right">이름</div>
								<div class="col-8 col-md-7"><input type="text" name="userName" class="form-control"></div>
							</div>
							<div class="form-row mb-3">
								<div class="col-4 col-md-3 text-right">아이디</div>
								<div class="col-8 col-md-7">
									<input type="text" name="userId" class="form-control">
								</div>
								<div class="col-8 col-md-2 offset-4 offset-md-0">
									<button type="button" id="duplicateBtn" class="btn btn-secondary btn-block m-mt">중복 확인</button>
								</div>
							</div>
							<div class="form-row mb-3">
								<div class="col-4 col-md-3 text-right">비밀번호</div>
								<div class="col-8 col-md-7"><input type="password" name="userPw" class="form-control" placeholder="8자 이상, 영문, 숫자, 특수문자 조합"></div>
							</div>
							<div class="form-row mb-3">
								<div class="col-4 col-md-3 text-right">비밀번호 확인</div>
								<div class="col-8 col-md-7"><input type="password" id="pwCheck" class="form-control"></div>
							</div>
							<div class="form-row">
								<div class="col-4 col-md-3 text-right">이메일</div>
								<div class="col-8 col-md-7"><input type="email" name="userEmail" class="form-control"></div>
							</div>
						</div>
						<h5>선택 항목</h5>
						<div class="border p-5 mb-3">
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
							<div class="form-row">
								<div class="col-4 col-md-3 text-right">컨설팅<br class="m-br">희망 여부</div>
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
						</div>
						<div class="text-center">
							<button id="signBtn" type="button" class="btn btn-info">인증 메일 발송</button>
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
<script src="/assets/js/page/member/register_form.js"></script>
</body>
</html>