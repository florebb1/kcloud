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
								<li class="breadcrumb-item active" aria-current="page">관리자 통합 로그</li>
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
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<thead>
										<tr>
											<th scope="col">No.</th>
											<th scope="col">단체명</th>
											<th scope="col">작업자</th>
											<th scope="col">작업자 아이디</th>
											<th scope="col">내용</th>
											<th scope="col">작업자 구분</th>
											<th scope="col">날짜</th>
										</tr>
									</thead>
									<!-- <tbody>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">4</th>
											<td>클라우드 산업회</td>
											<td>홍길동</td>
											<td>kcloud</td>
											<td>가입, 인증, 접속, 정보수정, 아이디/PW찾기, 탈퇴내역</td>
											<td>관리자</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">3</th>
											<td>클라우드 산업회</td>
											<td>홍길동</td>
											<td>kcloud</td>
											<td>가입, 인증, 접속, 정보수정, 아이디/PW찾기, 탈퇴내역</td>
											<td>관리자</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">2</th>
											<td>클라우드 산업회</td>
											<td>홍길동</td>
											<td>kcloud</td>
											<td>가입, 인증, 접속, 정보수정, 아이디/PW찾기, 탈퇴내역</td>
											<td>관리자</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">1</th>
											<td>클라우드 산업회</td>
											<td>홍길동</td>
											<td>kcloud</td>
											<td>가입, 인증, 접속, 정보수정, 아이디/PW찾기, 탈퇴내역</td>
											<td>관리자</td>
											<td>2019-08-11 10:29:55</td>
										</tr>
									</tbody> -->
									<tbody id="content"></tbody>
								</table>


							</div>
							
							<div class="w-100"></div>
							
							<!-- <div class="col-6">
								<a href="" class="btn btn-danger">선택삭제</a>
							</div> -->
							<div class="col-6">
								<nav class="d-flex justify-content-end">
									<div>
										<ul id="show_paginator" class="pagination"></ul>
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
        <script src="/assets/js/admin/adminmenu/totalLog.js"></script>
	</body>
</html>
