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
								<li class="breadcrumb-item active" aria-current="page">회원 관리</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>회원수</h5>
										<h3 id="memberCount"></h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>검증 신청 회원</h5>
										<h3 id="checkCount"></h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>성능 모니터 이용 회원</h5>
										<h3>1,032명</h3>
									</div>
								</div>
							</div>
						</div>
						
						<hr>
						
						<div class="row">
							
							<div class="col d-flex flex-row">
								<div class="mb-2 mr-3">
                                    Total <span id="total"></span>건
								</div>
								<form>
									<div class="form-group min-width120">
										<select class="form-control form-control-sm" id="row">
											<option value="10">10개씩 보기</option>
											<option value="20">20개씩 보기</option>
											<option value="30">30개씩 보기</option>
											<option value="40">40개씩 보기</option>
											<option value="50">50개씩 보기</option>
										</select>
									</div>
								</form>
							</div>
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<colgroup>
										<col width="40px">
										<col>
									</colgroup>
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">아이디</th>
											<th scope="col">이름</th>
											<th scope="col">이메일</th>
											<th scope="col">단체명</th>
											<th scope="col">서비스명</th>
											<th scope="col">서비스 모델</th>
											<th scope="col">컨설팅</th>
<!--											<th scope="col">검증 신청</th>-->
											<th scope="col">성능 모니터</th>
											<th scope="col">관리</th>
										</tr>
									</thead>
									<tbody id="content"></tbody>
								</table>
							</div>
							
							<div class="w-100"></div>
							
<!--							<div class="col-6">-->
<!--								<a href="" class="btn btn-danger">선택삭제</a>-->
<!--							</div>-->
							<div class="col">
								<nav class="d-flex justify-content-end">
									<div>
                                        <div>
                                            <ul id="show_paginator" class="pagination"></ul>
                                        </div>
									</div>
								</nav>
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
        <script src="/assets/js/admin/member/management.js"></script>
	</body>
</html>
