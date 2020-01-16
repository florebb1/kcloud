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
								<li class="breadcrumb-item active" aria-current="page">회원 로그인 IP 제한</li>
							</ol>
						</nav>
						
						<hr>
						
						<form class="mt-4">

							<div class="form-group row">
								<label for="" class="col-1 text-right">IP</label>
								<div class="col-11">
									<textarea class="form-control" id="" rows="2"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-1 text-right">MEMO</label>
								<div class="col-11">
									<textarea class="form-control" id="" rows="3"></textarea>
								</div>
							</div>
							<div class="text-right">
								<button type="button" class="btn btn-primary">등록하기</button>
							</div>

						</form>
						
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
									<colgroup>
										<col width="40px">
										<col>
									</colgroup>
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">IP</th>
											<th scope="col">메모</th>
											<th scope="col">등록일</th>
											<th scope="col">관리</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">4</th>
											<td>233.191,72,18</td>
											<td>좀비IP</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="#" class="badge badge-danger">삭제</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">3</th>
											<td>233.191,72,18</td>
											<td>좀비IP</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="#" class="badge badge-danger">삭제</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">2</th>
											<td>233.191,72,18</td>
											<td>좀비IP</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="#" class="badge badge-danger">삭제</a>
											</td>
										</tr>
										<tr>
											<th scope="row"><input type="checkbox"/></th>
											<th scope="row">1</th>
											<td>233.191,72,18</td>
											<td>좀비IP</td>
											<td>2019-08-11 10:29:55</td>
											<td>
												<a href="#" class="badge badge-danger">삭제</a>
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
