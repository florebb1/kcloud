<!doctype html>
<html lang="ko">
	<head>
		<?php $this->load->view('/layout/admin/meta'); ?>
		<title><?php echo $title; ?></title>
        <style>
			/*
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
			*/
			.pagination {
				display: inline-block;
			}

			.pagination a {
                font-size:14px;
                width:36px;
                height:36px;
                line-height:32px;
                text-align:center;
				color: black;
				float: left;
				padding:0 !important;
				text-decoration: none;
				transition: background-color .3s;
				border: 1px solid #ddd;
				margin: 0 2px;
			}

			.pagination a.active {
				background-color: #0098c9;
				color: white;
				border: 1px solid #0098c9;
			}

			.pagination a:hover:not(.active) {background-color: #ddd;}
            .table {
                min-width: max-content;
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
							<label class="col btn btn-info p-3 active mgtbtn" style="cursor:pointer;" onclick="settype('1');">
								<input type="radio" name="xxxxxx" value="1" checked autocomplete="off"> 가용성
							</label>
							<label class="col btn btn-info p-3  mgtbtn" style="cursor:pointer;" onclick="settype('2');">
								<input type="radio" name="xxxxxx" value="2"  autocomplete="off"> 응답시간
							</label>
                            <!--
							<label class="col btn btn-info p-3  mgtbtn" style="cursor:pointer;" onclick="settype('3');">
								<input type="radio" name="xxxxxx" value="3"  autocomplete="off"> 탄력성
							</label>
                            -->
							<label class="col btn btn-info p-3  mgtbtn" style="cursor:pointer;" onclick="settype('4');">
								<input type="radio" name="xxxxxx" value="4"  autocomplete="off"> 이벤트 알림 지연
							</label>
							<label class="col btn btn-info p-3  mgtbtn" style="cursor:pointer;" onclick="settype('5');">
								<input type="radio" name="xxxxxx" value="5"  autocomplete="off"> Interrupt 발생
							</label>
						</div>

						<hr>

						<div class="row">
							<div class="col d-flex justify-content-between">
								<div class="d-flex flex-row">
									<div class="mb-2 mr-3">
										<span id="total">Total <?=$total_cnt?>건</span>
									</div>
									<form name="search_frm" id="search_frm" onsubmit="return getList('1');">
										<input type="hidden" name="gp_type" id="gp_type" value="1">
										<div class="form-group min-width120">
											<select class="form-control form-control-sm"  id="per_page" name="per_page" onchange="getList();">
												<option value="5">5개씩 보기</option>
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
								<div id="list_html"></div>
								<nav class="d-flex justify-content-center mt-4 mb-5">
									<div id="pagination_html"></div>
								</nav>
							</div>
						</div>

						<!--
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
											<th scope="col">월 가용률</th>
											<th scope="col">년 가용률</th>
											<th scope="col">평균 가용률</th>
											<th scope="col">월가용률 변경</th>
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
											<th scope="col">현행</th>
											<th scope="col">평균</th>
											<th scope="col">당월 최대</th>
											<th scope="col">당월 최저</th>
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
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">최근</th>
											<th scope="col">평균</th>
											<th scope="col">최대</th>
											<th scope="col">최저</th>
										</tr>
									</thead>
                                    <tbody id="content3"></tbody>
								</table>
							</div>
						</div>

						<div class="row" id="mgt-wrap-d">
							<div class="col">
								<div class="bd-callout bd-callout-info">이벤트 알림 지연</div>
								<table class="table table-i">
									<thead>
										<tr>
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">최근</th>
											<th scope="col">평균</th>
											<th scope="col">최대</th>
											<th scope="col">최저</th>
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
											<th scope="col">No.</th>
											<th scope="col">단체명/서비스명</th>
											<th scope="col">호스트명</th>
											<th scope="col">월간</th>
											<th scope="col">년간</th>
											<th scope="col">현재 초당</th>
											<th scope="col">평균 초당</th>
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
						-->
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
                                                    <th scope="row">Graph Code</th>
                                                    <td><input type="text" class="form-control form-control-sm" name="gp_code" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Graph Name</th>
                                                    <td><input type="text" class="form-control form-control-sm" name="gp_name" placeholder=""></td>
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
												<option value="mb_id">ID</option>
												<option value="mb_name">회원명</option>
												<option value="mb_1">단체명</option>
												<option value="mb_2">서비스명</option>
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
												<th>회원명</th>
												<th>단체명</th>
												<th>서비스명</th>
												<th>서비스 모델</th>
												<th>컨설팅</th>
												<!--<th>검증신청</th>-->
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
        <script type="text/javascript">
        <!--
        function settype(val){
            $("#gp_type").val(val);
            getList('1');
        }

        function getList(page){
            var url = "/graph/list_ajax01/"+page;
            var search_frm = $("#search_frm").serialize();
            $.ajax({
                url : url,
                type : 'POST',
                dataType : 'JSON',
                data : search_frm,
                success:function(response){
                    console.log(response);
                    $('#list_html').html(response.list_html);
                    $('#pagination_html').html(response.pagination_html);
                }
            });
        }

        $(document).ready(function(){

            getList('1');

            $(document).on("click", ".pagination a", function(event){
                event.preventDefault();
                var page = $(this).data("ci-pagination-page");
                getList(page);
            });

            // 회원검색
            // 검색버튼 클릭이벤트
            $("#memberSearchBtn").click(function () {
                var html = "";
                var searchType = $("#searchType").val();
                var searchWord = $("#searchWord").val();
                $.ajax({
                    url: '/adminapi/fetchUser?page=1&searchWord=' + searchWord +'&searchType='+searchType,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        if(response.list.length > 0) {
                            for (var i = 0; i < response.list.length; i++) {
                                html += '<tr>'
                                    + '<th scope="row">'
                                    + '<div class="form-check"><input class="form-check-input" type="radio" name="memberSearchNum" organizationName="'+response.list[i].organizationName+'" serviceName="'+response.list[i].serviceName+'" value="'+response.list[i].userSeq+'"></div>'
                                    + '</th>'
                                    + '<td>'+response.list[i].userId+'</td>'
                                    + '<td>'+response.list[i].userName+'</td>'
                                    + '<td>'+response.list[i].organizationName+'</td>'
                                    + '<td>'+response.list[i].serviceName+'</td>';
                                if(response.list[i].serviceModel == "1") {
                                    html += '<td>IaaS</td>';
                                }else if(response.list[i].serviceModel == "2") {
                                    html += '<td>PaaS</td>';
                                }else if(response.list[i].serviceModel == "3") {
                                    html += '<td>SaaS</td>';
                                }else {
                                    html += '<td>기타</td>';
                                }
                                if(response.list[i].counsulting == "1") {
                                    html += '<td>희망</td>';
                                }else {
                                    html += '<td>비희망</td>';
                                }
                                    // + '<td>완료</td>'
                                html += '<td>미연결</td>'
                                    + '</tr>';
                            }
                            $("#memContent").empty();
                            $("#memContent").append(html);
                        }else {
                            html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">검색된 회원이 없습니다.</div></th></tr>';
                            $("#memContent").empty();
                            $("#memContent").append(html);
                        }
                    }
                });
            });
            $("#searchWord").keyup(function(event) {
                if (event.keyCode === 13) {
                    $("#memberSearchBtn").click();
                }
            });
            // 검색 확인
            $(document).on("click", "#memberCheckBtn", function () {
                var seq = $("input:radio[name='memberSearchNum']:checked").val();
                var orName = $("input:radio[name='memberSearchNum']:checked").attr("organizationName");
                var seName = $("input:radio[name='memberSearchNum']:checked").attr("serviceName");
                $('#member-search').modal('hide');
                $("#orgName").val(orName);
                $("#serName").val(seName);
                $("#mb_no").val(seq);
            });

            $(document).on("click", "#monitorAddBtn", function () {
                var datas = $("#moniterInsertForm").serialize();
                $.ajax({
                    url: '/adminapi/insertPerformance',
                    type: 'POST',
                    dataType: 'JSON',
                    data: datas,
                    success: function (response) {
                        if(response.result == true) {
                            alert('등록되었습니다.');
                            $('#moniter-input').modal('hide');
                            document.location.reload();
                        }
                    }
                });
            });
        });


        function graph_del(gp_id){
            var result = confirm('삭제하시겠습니까?');

            if(result) {
                var url = '/graph/delete/'+gp_id;
                $.ajax({
                    url : url,
                    type : 'GET',
                    dataType : 'JSON',
                    success:function(response){
                        if(response.code=='0000'){
                            alert(response.msg);
                            getList(1);

                        }else{
                            alert(response.msg);
                        }

                    },
                    error : function(error){
                        console.log(error);
                    }

                });
            }else{
            }
        }
        //-->
        </script>
        <!-- <script src="/assets/js/admin/monitor/event_management.js?ver=<?=time()?>"></script> -->
	</body>
</html>
