<!doctype html>
<html lang="ko">
	<head>
		<?php $this->load->view('/layout/admin/meta'); ?>
		<title><?php echo $title; ?></title>
        <style>
            .pagination > li {
                color:#000000;
                font-size:14px;
                padding:0 !important;
                width:36px;
                height:36px;
                line-height:32px;
                text-align:center;
                margin:0 2px;
                border: 1px solid #ddd;
            }
            .pagination > li.active{
                color:#fff !important;
                font-size:14px;
                padding:0 !important;
                width:36px;
                height:36px;
                line-height:32px;
                text-align:center;
                margin:0 2px;
                background-color: #0098c9;
            }

        </style>
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
								<li class="breadcrumb-item">정보 마당</li>
								<li class="breadcrumb-item active" aria-current="page">공지사항</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							
							<div class="col-6 d-flex flex-row">
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
							<div class="col-6 text-right">
								<a href="/admin/aboard/notice_write" class="btn btn-primary">새로작성</a>
							</div>
							
							<div class="w-100"></div>
							
							<div class="col">

								<table class="table">
									<colgroup>
										<col width="40px">
										<col width="80px">
										<col>
										<col>
										<col>
										<col>
										<col width="120px">
									</colgroup>
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">제목</th>
											<th scope="col">글쓴이</th>
											<th scope="col">조회</th>
											<th scope="col">날짜</th>
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
        <script src="/assets/js/admin/aboard/notice.js"></script>
	</body>
</html>
