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
								<li class="breadcrumb-item">관리자 메뉴</li>
								<li class="breadcrumb-item active" aria-current="page">관리자 계정 관리</li>
							</ol>
						</nav>
						
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
							<div class="col text-right">
								<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter11">관리자 등록</a>
							</div>

							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<thead>
										<tr>
											<th scope="col">아이디</th>
											<th scope="col">이름</th>
											<th scope="col">역할</th>
											<th scope="col">이메일</th>
											<th scope="col">등록일</th>
										</tr>
									</thead>
									<!-- <tbody>
										<tr>
											<td>kcloud</td>
											<td>김종철</td>
											<td>포탈 관리자</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
										<tr>
											<td>kcloud</td>
											<td>김종철</td>
											<td>포탈 관리자</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
										<tr>
											<td>kcloud</td>
											<td>김종철</td>
											<td>포탈 관리자</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
									</tbody> -->
									<tbody id="content"></tbody>
								</table>


								<nav class="d-flex justify-content-center mt-4">
									<div>
										<ul id="show_paginator" class="pagination"></ul>
									</div>
								</nav>

							</div>
						</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->


					<!-- Modal 1 -->
					<div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<form id="adminEdit">
									<input type="hidden" name="mb_no" id="mb_no">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">관리자 등록</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<table class="table">
											<tbody>
												<tr>
													<th scope="row">아이디</th>
													<td><input type="text" class="form-control form-control-sm" name="mb_id" id="mb_id" value=""></td>
													<td>
														<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter22">검색</a>
													</td>
												</tr>
												<tr>
													<th scope="row">이름</th>
													<td colspan="2" id="mb_name"></td>
												</tr>
												<tr>
													<th scope="row">이메일</th>
													<td colspan="2" id="mb_email"></td>
												</tr>
												<tr>
													<th scope="row">역할</th>
													<td colspan="2">
														<select class="form-control form-control-sm" id="">
															<option>포탈 관리자</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
										<button type="button" class="btn btn-primary" onclick="addAdmin()">관리자 등록</button>
									</div>
								</form>
							</div>
						</div>
					</div>



					<div class="modal fade" id="exampleModalCenter22" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">회원검색</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">

									<!-- <div class="mb-3"> 
										<a href="#" class="btn btn-primary btn-sm">모두 선택</a>
										<a href="#" class="btn btn-primary btn-sm">선택 해제</a>
									</div> -->
									
									
									<table class="table">
										<thead>
											<tr>
												<th scope="col"></th>
												<th scope="col">ID.</th>
												<th scope="col">이름</th>
												<th scope="col">이메일</th>
												<th scope="col">단체명</th>
												<th scope="col">서비스명</th>
												<th scope="col">서비스 모델</th>
												<th scope="col">컨설팅</th>
												<th scope="col">검증신청</th>
												<th scope="col">성능 모니터</th>
											</tr>
										</thead>
										<tbody id="modal_content">
											
											
										</tbody>
									</table>
	
	
									<nav class="d-flex justify-content-center mt-4">
										<div>
											<ul id="show_paginator2" class="pagination"></ul>
										</div>
									</nav>


								</div>
								<div class="modal-footer">
<!-- 									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
									<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">확인</button>
								</div>
							</div>
						</div>
					</div>




                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
        <script src="/assets/js/admin/adminmenu/adminList.js"></script>
	</body>
</html>
