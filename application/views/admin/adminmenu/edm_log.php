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
								<li class="breadcrumb-item active" aria-current="page">eDM 발송 로그</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							
							<div class="col d-flex flex-row">
								<div class="mb-2 mr-3">
									Total 10건
								</div>
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
							</div>
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">메일링</th>
											<th scope="col">제목</th>
											<th scope="col">내용</th>
											<th scope="col">발송일시</th>
											<th scope="col">관리</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">4</th>
											<td>전체</td>
											<td>개인정보보호정책 변경사항 알림</td>
											<td>
												<div class="ellipsis">
													Kcloud회원에게 개인정보보호정책 변경사항을 안내해 드립니다. 
													2019년 08월 01일부로 개인정보보호정책 14조 12항 제3자 정보제공에 의한 개인정보 방침이 다음과 같이 변경되었습니다. 
													14조 12항 제3자 정보제공에 의한 개인정보 방침 : 개인정보 보관 기간에따른 정보
												</div>
											</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="/admin/adminmenu/edm_log_detail" class="badge badge-info">자세히</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">3</th>
											<td>전체</td>
											<td>개인정보보호정책 변경사항 알림</td>
											<td>
												<div class="ellipsis">
													Kcloud회원에게 개인정보보호정책 변경사항을 안내해 드립니다. 
													2019년 08월 01일부로 개인정보보호정책 14조 12항 제3자 정보제공에 의한 개인정보 방침이 다음과 같이 변경되었습니다. 
													14조 12항 제3자 정보제공에 의한 개인정보 방침 : 개인정보 보관 기간에따른 정보
												</div>
											</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="/admin/adminmenu/edm_log_detail" class="badge badge-info">자세히</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">2</th>
											<td>전체</td>
											<td>개인정보보호정책 변경사항 알림</td>
											<td>
												<div class="ellipsis">
													Kcloud회원에게 개인정보보호정책 변경사항을 안내해 드립니다. 
													2019년 08월 01일부로 개인정보보호정책 14조 12항 제3자 정보제공에 의한 개인정보 방침이 다음과 같이 변경되었습니다. 
													14조 12항 제3자 정보제공에 의한 개인정보 방침 : 개인정보 보관 기간에따른 정보
												</div>
											</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="/admin/adminmenu/edm_log_detail" class="badge badge-info">자세히</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">1</th>
											<td>전체</td>
											<td>개인정보보호정책 변경사항 알림</td>
											<td>
												<div class="ellipsis">
													Kcloud회원에게 개인정보보호정책 변경사항을 안내해 드립니다. 
													2019년 08월 01일부로 개인정보보호정책 14조 12항 제3자 정보제공에 의한 개인정보 방침이 다음과 같이 변경되었습니다. 
													14조 12항 제3자 정보제공에 의한 개인정보 방침 : 개인정보 보관 기간에따른 정보
												</div>
											</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="/admin/adminmenu/edm_log_detail" class="badge badge-info">자세히</a>
											</td>
										</tr>
									</tbody>
								</table>


							</div>
							
							<div class="w-100"></div>
							
							<div class="col-6">
								<a href="" class="btn btn-danger">선택삭제</a>
							</div>
							<div class="col-6">
								<nav class="d-flex justify-content-end">
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
