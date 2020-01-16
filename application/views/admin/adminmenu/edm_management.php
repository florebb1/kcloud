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
								<li class="breadcrumb-item active" aria-current="page">eDM 양식 관리</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							
							<div class="col d-flex flex-row-reverse">
								<form>
									<div class="form-group min-width120">
										<select class="form-control form-control-sm" id="">
											<option>10개씩 보기</option>
											<option>20개씩 보기</option>
											<option>30개씩 보기</option>
											<option>40개씩 보기</option>
											<option>50개씩 보기</option>
										</select>
									</div>
								</form>
								<div class="text-right mb-2 mr-3">
									Total 10건
								</div>
							</div>
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<thead>
										<tr>
											<th scope="col">No.</th>
											<th scope="col">아이디</th>
											<th scope="col">이름</th>
											<th scope="col">이메일</th>
											<th scope="col">단체명</th>
											<th scope="col">서비스명</th>
											<th scope="col">서비스 모델</th>
											<th scope="col">컨설팅</th>
											<th scope="col">검증 신청</th>
											<th scope="col">성능 모니터</th>
											<th scope="col">관리</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">4</th>
											<td>Mark</td>
											<td>홍길동</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>클라우드 산업회</td>
											<td>품질/성능 검증</td>
											<td>기타</td>
											<td>희망</td>
											<td>
												<a href="#" class="badge badge-primary">신청</a>
												<a href="#" class="badge badge-secondary">진행</a>
												<a href="#" class="badge badge-success">완료</a>
											</td>
											<td>이용/미연결</td>
											<td>
												<a href="/admin/member/member_detail" class="badge badge-info">관리</a>
											</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Mark</td>
											<td>홍길동</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>클라우드 산업회</td>
											<td>품질/성능 검증</td>
											<td>기타</td>
											<td>희망</td>
											<td>
												<a href="#" class="badge badge-primary">신청</a>
												<a href="#" class="badge badge-secondary">진행</a>
												<a href="#" class="badge badge-success">완료</a>
											</td>
											<td>이용/미연결</td>
											<td>
												<a href="#" class="badge badge-info">관리</a>
											</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Mark</td>
											<td>홍길동</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>클라우드 산업회</td>
											<td>품질/성능 검증</td>
											<td>기타</td>
											<td>희망</td>
											<td>
												<a href="#" class="badge badge-primary">신청</a>
												<a href="#" class="badge badge-secondary">진행</a>
												<a href="#" class="badge badge-success">완료</a>
											</td>
											<td>이용/미연결</td>
											<td>
												<a href="#" class="badge badge-info">관리</a>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>홍길동</td>
											<td>kcloud@cloudqos.or.kr</td>
											<td>클라우드 산업회</td>
											<td>품질/성능 검증</td>
											<td>기타</td>
											<td>희망</td>
											<td>
												<a href="#" class="badge badge-primary">신청</a>
												<a href="#" class="badge badge-secondary">진행</a>
												<a href="#" class="badge badge-success">완료</a>
											</td>
											<td>이용/미연결</td>
											<td>
												<a href="#" class="badge badge-info">관리</a>
											</td>
										</tr>
									</tbody>
								</table>


								<nav class="d-flex justify-content-center mt-4">
									<div>
										<ul class="pagination">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<i class="pe-7s-angle-left"></i>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<i class="pe-7s-angle-right"></i>
												</a>
											</li>
										</ul>
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
	</body>
</html>
