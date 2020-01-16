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
								<li class="breadcrumb-item active" aria-current="page">eDM 발송</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">

							<!-- 글쓰기 폼 -->
							<form class="col-12 mt-4" id="formEdm" enctype="multipart/form-data">
								<input type="hidden" name="message" id="message">
								<div class="form-group row">
									<label for="" class="col-1 text-right">보내는 사람</label>
									<div class="col-11">
										<input type="text" class="form-control" id="" name="from" placeholder="">
<!--
										<select class="form-control" id="exampleFormControlSelect1">
											<option>수신 동의한 전체회원</option>
											<option>전체</option>
											<option>직접입력</option>
										</select>
-->
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-1 text-right">받는 사람</label>
									<div class="col-11">
										<textarea class="form-control" id="to" name="to" rows="3" placeholder="* 콤마(,) 로 구분하여 입력하면 다중 전송이 가능합니다."></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-1 text-right">입력 방법</label>
									<div class="col-11">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
											<label class="form-check-label" for="inlineRadio1">직접 입력</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" data-toggle="modal" data-target="#exampleModalCenter22">
											<label class="form-check-label" for="inlineRadio2">회원 검색</label>
										</div>
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label for="" class="col-1 text-right">제목</label>
									<div class="col-11">
										<input type="text" class="form-control" id="" name="subject" placeholder="">
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-1 text-right">내용</label>
									<div class="col-11">
										<textarea class="form-control" id="summernote" rows="11"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-1 text-right">첨부파일</label>
									<div class="col-11">
										<input type="file" class="form-control" id="" name="files" placeholder="">
									</div>
								</div>

								<div class="text-right">
									<!-- <button type="button" class="btn btn-secondary">미리보기</button> -->
									<button type="button" class="btn btn-primary btn-edmsend">eDM 발송</button>
								</div>
	
							</form>
							<!-- 글쓰기 폼 끝 -->

						</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->





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
												<th scope="col"><input type="checkbox" id="userAll"></th>
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
									<button type="button" class="btn btn-primary btn-send" >확인</button>
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
        <link href="/assets/editor/summernote.css" rel="stylesheet">
        <script src="/assets/editor/summernote.js"></script>
        <script>
        	$(function(){
        		$('#summernote').summernote({
			        height: 300,                 // set editor height
			    });
			    $("#exampleModalCenter22").on("show.bs.modal",function(){
			        userList(1);
			    })

			    $("#userAll").click(function(){
			    	if($(this).is(":checked")){
			    		$(".userSeq").prop("checked",true);
			    	}else{
			    		$(".userSeq").prop("checked",false);
			    	}
			    })

			    $(".btn-send").click(function(){
			    	var names = new Array();
			    	$(".userSeq").each(function(){
			    		if($(this).is(":checked")){
			    			names.push($(this).data("useremail"));
			    		}
			    	})
			    	$("#to").val(names.join(","));
			    	$("#exampleModalCenter22").modal("hide");
			    })

			    $(".btn-edmsend").click(function(){
			    	$("#message").val($('#summernote').summernote('code'));
			    	var datas = $("#formEdm").serialize();
			    	// $.ajax({
				    //     url: '/adminapi/edmSend',
				    //     type: 'POST',
				    //     dataType: 'JSON',
				    //     data: datas,
				    //     success: function (response) {
				    //     	if(response.result){
				    //     		alert("정상 발송되었습니다.");
				        		
				    //     	}
				    //     }
				    // });
				    $('#formEdm').ajaxSubmit({
				        url: "/adminapi/edmSend",
				        processData: false,
				        contentType: false,
				        type: 'POST',
				        dataType: 'JSON',
				        data: datas,
				        success: function (response) {
				            if(response.result){
				        		alert("정상 발송되었습니다.");
				        		
				        	}
				        },error: function (jqXHR) {
				            console.log(jqXHR.responseText);
				        }
				    });
			    })
        	})
        	function userList(pageNum){
			    $.ajax({
			        url: '/adminapi/fetchUser?row=5&page='+pageNum,
			        type: 'GET',
			        dataType: 'JSON',
			        success: function (response) {
			            console.log(response);
			            var html = "";
			            if(response.list.length > 0) {
			                for (var i = 0; i < response.list.length; i++) {
			                    if(response.list[i].serviceModel == "1"){
			                        var serviceModel = "IaaS";
			                    }else if(response.list[i].serviceModel == "2"){
			                        var serviceModel = "PaaS";
			                    }else{
			                        var serviceModel = "SaaS";
			                    }
			                    html += '<tr>'
			                        + '<th><input type="checkbox" name="userSeq" class="userSeq" data-userseq="'+response.list[i].userSeq+'" data-userid="'+response.list[i].userId+'" data-username="'+response.list[i].userName+'" data-useremail="'+response.list[i].userEmail+'"></th>'
			                        + '<td>'+response.list[i].userId+'</td>'
			                        + '<td>'+response.list[i].userName+'</td>'
			                        + '<td>'+response.list[i].userEmail+'</td>'
			                        + '<td>'+response.list[i].organizationName+'</td>'
			                        + '<td>'+response.list[i].serviceName+'</td>'
			                        + '<td>'+serviceModel+'</td>'
			                        + '<td>'+(response.list[i].counsulting == "1" ? "희망":"미희망")+'</td>'
			                        + '<td>'+response.list[i].mb_5+'</td>'
			                        + '<td>'+response.list[i].mb_6+'</td>'
			                        + '</tr>';
			                }
			                $("#modal_content").empty();
			                $("#modal_content").append(html);
			                if(response.total % 5 == 0) {
			                    totalNum = (response.total / 5);
			                }else {
			                    totalNum = (response.total / 5) + 1;
			                }
			                $('#show_paginator2').bootpag({
			                    total: totalNum,
			                    page: pageNum,
			                    maxVisible: 5
			                }).on('page', function(event, num) {
			                    userList(num);
			                });
			            }else {
			                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 회원이 존재하지않습니다.</div></th></tr>';
			                $("#modal_content").empty();
			                $("#modal_content").append(html);
			            }
			        }
			    });
			}
        </script>
	</body>
</html>
