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
                <div class="main-content dashboard-wrap">


						<div class="row">
							<div class="col">
								<div class="card mb-4">
									<div class="card-body text-center">
										<h1><i class="pe-7s-users"></i></h1>
										<h5>회원수</h5>
										<hr>
										<h3 id="memberCount"></h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card mb-4">
									<div class="card-body text-center">
										<h1><i class="pe-7s-id"></i></h1>
										<h5>검증 신청 회원</h5>
										<hr>
										<h3 id="checkCount"></h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card mb-4">
									<div class="card-body text-center">
										<h1><i class="pe-7s-refresh-cloud"></i></h1>
										<h5>성능 모니터 이용 회원</h5>
										<hr>
										<h3>1,032명</h3>
									</div>
								</div>
							</div>
							
							<div class="w-100"></div>
							
							<div class="col">
								<div class="card mb-3">
									<div class="card-body text-center">
										<h1><img src="/assets/images/icon/animat-piechart-color.gif" style="width:120px;"/></h1>
										<h5>성능 모니터 등록 건수</h5>
										<hr>
										<h3>1,032건</h3>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card mb-3">
									<div class="card-body text-center">
										<h1><img src="/assets/images/icon/animat-search-color.gif" style="width:120px;"/></h1>
										<h5>성능 모니터링 현황</h5>
										<hr>
										<h3>1,032건</h3>
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
        <script src="/assets/js/admin/dashboard.js"></script>
	</body>
</html>