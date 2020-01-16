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

					<!-- ##### 관리자 컨텐츠 내용 시작 -->
						
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><i class="pe-7s-home"></i> Home</li>
								<li class="breadcrumb-item">성능 모니터</li>
								<li class="breadcrumb-item active" aria-current="page">성능 모니터 현황</li>
							</ol>
						</nav>
						
						<hr>

						<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
							<label class="col btn btn-info p-3 active mgtbtn" id="mgt-btn-a">
								<input type="checkbox" checked autocomplete="off"> 가용성
							</label>
							<label class="col btn btn-info p-3 active mgtbtn" id="mgt-btn-b">
								<input type="checkbox" checked autocomplete="off"> 응답시간
							</label>
							<label class="col btn btn-info p-3 active mgtbtn" id="mgt-btn-c">
								<input type="checkbox" checked autocomplete="off"> 탄력성
							</label>
							<label class="col btn btn-info p-3 active mgtbtn" id="mgt-btn-d">
								<input type="checkbox" checked autocomplete="off"> 이벤트 알림 지연
							</label>
							<label class="col btn btn-info p-3 active mgtbtn" id="mgt-btn-e">
								<input type="checkbox" checked autocomplete="off"> Interrupt 발생
							</label>
						</div>
						
						<hr>
						
						<div class="row">
							<div class="col d-flex justify-content-between">
								<div class="d-flex flex-row">
									<div class="mb-2 mr-3">
	                                    <span id="total">Total 10건</span>
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
								<div>
									<a class="btn btn-info" href="#" role="button" data-toggle="modal" data-target="#moniter-input">성능 모니터 등록</a>
								</div>
							</div>
						</div>
						
						<hr>
						
						<div class="row" id="mgt-wrap-a">
							<div class="col">
								<div class="bd-callout bd-callout-info">가용성</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">월 가용률<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">년 가용률<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">평균 가용률<a href=""><i class="pe-7s-angle-down"></i></a></th>
											<th scope="col">월가용률 변경<a href=""><i class="pe-7s-angle-down"></i></a></th>
										</tr>
									</thead>
									<tbody id="content1"></tbody>
								</table>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div>
										<ul id="show_paginator1" class="pagination"></ul>
									</div>
								</nav>
							</div>
						</div>
						
						<div class="row" id="mgt-wrap-b">
							<div class="col">
								<div class="bd-callout bd-callout-info">응답시간</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">현행<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">평균<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">당월 최대<a href=""><i class="pe-7s-angle-down"></i></a></th>
											<th scope="col">당월 최저<a href=""><i class="pe-7s-angle-down"></i></a></th>
										</tr>
									</thead>
                                    <tbody id="content2"></tbody>
								</table>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div>
										<ul id="show_paginator2" class="pagination"></ul>
									</div>
								</nav>
							</div>
						</div>
						
						<div class="row" id="mgt-wrap-c">
							<div class="col">
								<div class="bd-callout bd-callout-info">탄력성</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">최근<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">평균<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">최대<a href=""><i class="pe-7s-angle-down"></i></a></th>
											<th scope="col">최저<a href=""><i class="pe-7s-angle-down"></i></a></th>
										</tr>
									</thead>
                                    <tbody id="content3"></tbody>
								</table>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div>
										<ul id="show_paginator3" class="pagination"></ul>
									</div>
								</nav>
							</div>
						</div>
						
						<div class="row" id="mgt-wrap-d">
							<div class="col">
								<div class="bd-callout bd-callout-info">이벤트 알림 지연</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">최근<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">평균<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">최대<a href=""><i class="pe-7s-angle-down"></i></a></th>
											<th scope="col">최저<a href=""><i class="pe-7s-angle-down"></i></a></th>
										</tr>
									</thead>
                                    <tbody id="content4"></tbody>
								</table>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div>
										<ul id="show_paginator4" class="pagination"></ul>
									</div>
								</nav>
							</div>
						</div>
						
						<div class="row" id="mgt-wrap-e">
							<div class="col">
								<div class="bd-callout bd-callout-info">Interrupt 발생</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col"><input type="checkbox"/></th>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">월간<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">년간<a href=""><i class="pe-7s-angle-up"></i></a></th>
											<th scope="col">현재 초당<a href=""><i class="pe-7s-angle-down"></i></a></th>
											<th scope="col">평균 초당<a href=""><i class="pe-7s-angle-down"></i></a></th>
										</tr>
									</thead>
                                    <tbody id="content5"></tbody>
								</table>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div>
										<ul id="show_paginator5" class="pagination"></ul>
									</div>
								</nav>
							</div>
						</div>
					<!-- ##### 관리자 컨텐츠 내용 끝 -->
					
					
					
					
					
					<!-- 성능모니터 등록 Modal -->
					<div class="modal fade" id="moniter-input" tabindex="-1" role="dialog" aria-labelledby="moniter-inputLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">성능 모니터 등록</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
                                <form id="moniterInsertForm">
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <input type="hidden" id="mb_no" name="mb_no">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">단체명</th>
                                                    <td><input type="text" id="orgName" class="form-control form-control-sm" readonly></td>
                                                    <td><a class="btn btn-info btn-sm" href="#" role="button" data-toggle="modal" data-target="#member-search">회원검색</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">서비스명</th>
                                                    <td><input type="text" id="serName" class="form-control form-control-sm" readonly></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">호스트명</th>
                                                    <td><input type="text" class="form-control form-control-sm" name="host_name" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">모니터링 항목</th>
                                                    <td>
                                                        <select class="form-control form-control-sm">
                                                            <option>전체</option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
									<button type="button" id="monitorAddBtn" class="btn btn-info">성능 모니터 등록</button>
								</div>
							</div>
						</div>
					</div>
					
					<!-- 화원검색 Modal -->
					<div class="modal fade" id="member-search" tabindex="-1" role="dialog" aria-labelledby="member-searchLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">회원검색</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-row">
										<div class="col-3">
											<select class="form-control form-control-sm" id="searchType" name="searchType">
												<option value="mb_1">단체명</option>
												<option value="mb_2">서비스명</option>
												<option value="mb_id">ID</option>
											</select>
										</div>
										<div class="col-6">
											<input type="text" class="form-control form-control-sm" id="searchWord" name="searchWord">
										</div>
										<div class="col-3">
											<a class="btn btn-info btn-sm btn-block" id="memberSearchBtn" href="#" role="button">검색</a>
										</div>
									</div>
									
									<table class="table table-bordered mt-3">
										<thead>
											<tr>
												<th>선택</th>
												<th>ID</th>
												<th>단체명</th>
												<th>서비스명</th>
												<th>서비스 모델</th>
												<th>컨설팅</th>
<!--												<th>검증신청</th>-->
												<th>성능 모니터</th>
											</tr>
										</thead>
										<tbody id="memContent">
											<tr>
												<td colspan="8" class="member-search-none">회원을 검색해 주세요.</td>
											</tr>
										</tbody>
									</table>
									
								</div>
								<div class="modal-footer">
									<button type="button" id="memberCheckBtn" class="btn btn-info">확인</button>
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
        <script src="/assets/js/admin/monitor/event_management.js"></script>
	</body>
</html>
