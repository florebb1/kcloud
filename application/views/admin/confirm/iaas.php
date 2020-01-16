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
								<li class="breadcrumb-item">확인 현황</li>
								<li class="breadcrumb-item">확인 현황 및 분류</li>
								<li class="breadcrumb-item active" aria-current="page">IaaS</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>IaaS</h5>
                                        <h3><span id="iaasTotal"></span> 업체</h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>PaaS</h5>
                                        <h3><span id="paasTotal"></span> 업체</h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>SaaS</h5>
                                        <h3><span id="saasTotal"></span> 업체</h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h5>기타</h5>
                                        <h3><span id="etcTotal"></span> 업체</h3>
									</div>
								</div>
							</div>
						</div>
						
						<hr>
						
						<div class="row">
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<colgroup>
										<col width="200px">
										<col width="">
										<col width="160px">
										<col width="100px">
									</colgroup>
									<thead>
										<tr>
											<th scope="col" colspan="4">IaaS 확인 업체</th>
										</tr>
									</thead>
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
					
					
					<!-- Modal -->
					<div class="modal fade" id="report-upload" tabindex="-1" role="dialog" aria-labelledby="report-upload" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">보고서 등록</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
									<div class="modal-body">
                                        <form id="reportForm">
                                            <input type="hidden" id="wr_id" name="wr_id">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile1" name="bf_file" required>
                                                <label class="custom-file-label" for="validatedCustomFile1">선택된 파일 없음</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </form>
									</div>
								<div class="modal-footer">
									<button type="button" id="reportBtn" class="btn btn-primary">저장</button>
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
        <script src="/assets/js/admin/confirm/iaas.js?ver=<?=time()?>"></script>
	</body>
</html>
