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
							<li class="breadcrumb-item">성능 모니터</li>
							<li class="breadcrumb-item active" aria-current="page">성능 모니터 현황</li>
						</ol>
					</nav>
					
					<hr>
					
					<div class="row">
						
						<div class="col d-flex justify-content-between pb-2">
							<h5>Graph 수정</h5>
							<button type="button" class="btn btn-secondary btn-sm" onclick="history.back();">돌아가기</button>
						</div>
						
						<div class="w-100"></div>
						
						<div class="col">

							<div class="card mb-3">
								<div class="card-body">
									<!-- <h6>회원 기본 정보</h6> -->
									<hr>
									<form  name="grapheditForm" id="grapheditForm" method="post">
										<div class="form-group row">
                                            <input type="hidden" id="gp_id" name="gp_id" value="<?=$row['gp_id']?>">
											<label for="inputPassword" class="col-sm-2 col-form-label">단체명/서비스명</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="mb_name" name="mb_name" value="<?=$row['mb_name']?>" readonly>
											</div>
										</div>
										<div class="form-group row">
                                            <input type="hidden" id="gp_id" name="gp_id" value="<?=$row['gp_id']?>">
											<label for="inputPassword" class="col-sm-2 col-form-label">호스트명</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="gp_hostname" name="gp_hostname" value="<?=$row['gp_hostname']?>" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Graph Code</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="gp_code" name="gp_code"  value="<?=$row['gp_code']?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Graph Name</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="gp_name" name="gp_name"  value="<?=$row['gp_name']?>">
											</div>
										</div> 
									</form>
								</div>
							</div>
						 
							
							<div class="text-center mb-5">
								<button type="button"  class="btn btn-secondary min-width120" onclick="graphadd();">수 정</button>
							</div>
							 

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

		<script type="text/javascript">
		<!--
		function graphadd(){ 
			if($("#gp_code").val() == ""){ 
				alert("Graph Code 를 입력하세요.");
				return false;
			}
			if($("#gp_name").val() == ""){ 
				alert("Graph Name 를 입력하세요.");
				return false;
			}
			

			var url = "/graph/edited";
			var grapheditForm = $("#grapheditForm").serialize();
			$.ajax({
				url : url,
				type : 'POST',
				dataType : 'JSON',
				data : grapheditForm,
				success:function(response){
					if(response.code=='0000'){ 
						alert(response.msg);

					}else{
						alert(response.msg);
					}

				},
				error : function(error){
					console.log(error);
				}

			});
		 

		}
		//-->
		</script>
	</body>
</html>
