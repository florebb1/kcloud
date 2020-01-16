<!doctype html>
<html lang="ko">
	<head>
		<?php $this->load->view('/layout/admin/meta'); ?>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div class="main-wrapper">
            <div class="topbar sky-blue">
                <?php $this->load->view('/layout/admin/header'); ?>
            </div>
            <div class="left-side">
                <?php $this->load->view('/layout/admin/nav'); ?>
            </div>
            <div class="page-wrapper">
                <div class="main-content">

					<!-- ##### 관리자 막스 및 컨텐츠 내용 시작 -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><i class="pe-7s-home"></i> Home</li>
							<li class="breadcrumb-item">회원 관리</li>
							<li class="breadcrumb-item active" aria-current="page">회원관리 상세</li>
						</ol>
					</nav>
					
					<hr>
					
					<div class="row">
						
						<div class="col d-flex justify-content-between pb-2">
							<h5>회원 관리 상세</h5>
							<button type="button" class="btn btn-secondary btn-sm" onclick="history.back();">돌아가기</button>
						</div>
						
						<div class="w-100"></div>
						
						<div class="col">

							<div class="card mb-3">
								<div class="card-body">
									<h6>회원 기본 정보</h6>
									<hr>
									<form id="detailForm">
										<div class="form-group row">
                                            <input type="hidden" id="userSeq" name="userSeq">
											<label for="inputPassword" class="col-sm-2 col-form-label">이름</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="userName" name="userName" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">아이디</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="userId" name="userId" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">이메일</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="userEmail" name="userEmail" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">비밀번호 변경</label>
											<div class="col-sm-10">
												<button type="button" id="pwBtn" class="btn btn-outline-danger">임시 비밀번호 발급</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card mb-3">
								<div class="card-body">
									<h6>추가 입력 정보</h6>
									<hr>
									<form id="addInfoForm">
                                        <input type="hidden" id="userSeq2" name="userSeq">
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">단체명</label>
                                            <input type="hidden" id="organizationName" name="organizationName">
											<div id="organizationName2" class="col-sm-10"></div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">서비스명</label>
                                            <input type="hidden" id="serviceName" name="serviceName">
											<div id="serviceName2" class="col-sm-10"></div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">URL</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="url" name="url" placeholder="http://cloudqos.or.kr">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">담당자 연락처</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="chargerPhone" name="chargerPhone" placeholder="01012345678">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">주소</label>
                                            <input type="hidden" id="address" name="address">
											<div id="address2" class="col-sm-10"></div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">서비스 모델</label>
											<div class="col-sm-10">
												<div id="serviceModelDiv" class="btn-group btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="serviceModel" id="serviceModel1" autocomplete="off" value="1"> IaaS
													</label>
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="serviceModel" id="serviceModel2" autocomplete="off" value="2"> PaaS
													</label>
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="serviceModel" id="serviceModel3" autocomplete="off" value="3"> SaaS
													</label>
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="serviceModel" id="serviceModel4" autocomplete="off" value="4"> 기타
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">컨설팅 희망</label>
											<div class="col-sm-10">
												<div id="counsultingDiv" class="btn-group btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="counsulting" id="counsulting1" autocomplete="off" value="1"> 희망
													</label>
													<label class="btn btn-secondary modelLable">
														<input type="radio" name="counsulting" id="counsulting2" autocomplete="off" value="2"> 비희망
													</label>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="text-center mb-5">
								<button type="button" id="editBtn" class="btn btn-secondary min-width120">변 경</button>
							</div>
							
							<div class="card mb-3">
								<div class="card-body">
									<h6>서비스 소개</h6>
									<hr>
									<div>
										<textarea class="form-control" id="service_info" rows="5" readonly="readonly"></textarea>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->

                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
        <script src="/assets/js/admin/member/detail.js"></script>
	</body>
</html>
