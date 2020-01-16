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

					<!-- ##### 관리자 컨텐츠 내용 시작 -->

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><i class="pe-7s-home"></i> Home</li>
								<li class="breadcrumb-item">성능 모니터</li>
								<li class="breadcrumb-item active" aria-current="page">이벤트 진단</li>
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
									<colgroup>
										<col>
									</colgroup>
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">던체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">발송일자</th>
											<th scope="col">이벤트 진단 내용</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">4</th>
											<td>kaci/cloudqos</td>
											<td>web01</td>
											<td>2019.06.10 13:10 21</td>
											<td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory <span class="badge badge-danger">New</span></td>
											<td><a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#diagnosis-detail">자세히</a></td>
										</tr>
									</tbody>
								</table>

								<nav class="d-flex justify-content-center mt-4 mb-5">
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
					<!-- ##### 관리자 컨텐츠 내용 끝 -->



					<!-- 자세히보기 Modal -->
					<div class="modal fade" id="diagnosis-detail" tabindex="-1" role="dialog" aria-labelledby="diagnosis-detailLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">이벤트 진단</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<table class="table">
										<colgroup>
											<col width="140px">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th scope="row">이벤트 발생 시간</th>
												<td>2019.06.10 13:10 21</td>
											</tr>
											<tr>
												<th scope="row">이벤트 알림 시간</th>
												<td>2019.06.10 13:10 21</td>
											</tr>
											<tr>
												<th scope="row">이벤트 알림 수신</th>
												<td>kcloud@cloudqos.or.kr</td>
											</tr>
											<tr>
												<th scope="row">이벤트 진단 내용</th>
												<td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
									<button type="button" class="btn btn-info">성능 모니터 바로가기</button>
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
	</body>
</html>
