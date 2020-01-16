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
								<li class="breadcrumb-item active" aria-current="page">베너 관리</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">

							<!-- 글쓰기 폼 -->
							<form class="col-12 mt-4" id="formBanner">
								
								<div class="form-group row">
									<label for="" class="col-1 text-right">배경이미지 (2560 * 1000)</label>
									<div class="col-11">
										<img src="" id="banner_img" style="width:70%"><br><br>
										<input type="file" class="form-control" id="" name="file" placeholder="">
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
									<label for="" class="col-1 text-right">배너타이틀</label>
									<div class="col-11">
										<textarea name="banner_title" id="banner_title" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-1 text-right">배너 sub1</label>
									<div class="col-11">
										<textarea name="banner_sub1" id="banner_sub1" class="form-control"></textarea>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="" class="col-1 text-right">배너 sub2</label>
									<div class="col-11">
										<textarea name="banner_sub2" id="banner_sub2" class="form-control"></textarea>
									</div>
								</div>
								
								

								<div class="text-right">
									<!-- <button type="button" class="btn btn-secondary">미리보기</button> -->
									<button type="button" class="btn btn-primary btn-banner">배너 등록</button>
								</div>
	
							</form>
							<!-- 글쓰기 폼 끝 -->

						</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->

                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
        <script>
        	$(function(){
        		$.ajax({
			        url: "/adminapi/getBanner",
			        type: 'GET',
			        dataType: 'JSON',
			        success: function (response) {
			            console.log(response);
			            $("#banner_img").attr("src","/upload/main/"+response.info.banner_img);
			            $("#banner_title").val(response.info.banner_title);
			            $("#banner_sub1").val(response.info.banner_sub1);
			            $("#banner_sub2").val(response.info.banner_sub2);
			            $("#banner_sub3").val(response.info.banner_sub3);
			        },error: function (jqXHR) {
			                console.log(jqXHR.responseText);
			        }
			    });
        		$(".btn-banner").click(function(){
        			if(confirm("배너정보를 변경하시겠습니까?")){
        				var formData = new FormData($("#formBanner")[0]);
					    $.ajax({
					        url: "/adminapi/bannerWrite",
					        type: 'POST',
					        dataType: 'JSON',
					        data: formData,
					        processData : false,
					        contentType : false,
					        success: function (response) {
					            console.log(response);
					            if(response.result == true) {
					                alert('저장되었습니다.');
					                document.location.reload();
					                // document.location.href='/admin/aboard/notice';
					            }
					        },error: function (jqXHR) {
					                console.log(jqXHR.responseText);
					        }
					    });
        			}
        		})
        	})
        </script>
	</body>
</html>
