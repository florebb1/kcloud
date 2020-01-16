<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('layout/front/meta'); ?>
    <title><?php echo $title; ?></title>
</head>
<body>

    <div class="header-wrapper">
        <?php $this->load->view('layout/front/header'); ?>
    </div>
    <div class="sub-content">

		<div class="sub-hero">
			<div class="p-5">품질/성능 검증 사업</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">사업소개</a></li>
							<li class="breadcrumb-item active" aria-current="page">품질/성능 검증 사업</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row mb-5">
				<div class="col-12">
					<h3>품질성능 검증 체계</h3>
				</div>
				<div class="w-100 mb-3"></div>
				<div class="col-12 col-sm-6 col-md-6 mb-3">
					<img src="/assets/images/con-img01.jpg" class="d-block w-100 border"/>
				</div>
				<div class="col-12 col-sm-6 col-md-6 mb-3">
					<img src="/assets/images/con-img02.jpg" class="d-block w-100 border"/>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<h3>품질성능 검증 절차</h3>
				</div>
				<div class="w-100 mb-3"></div>
				<div class="col-12">
					<h5 class="alert alert-danger">Step 1. 온라인 공고 > 온라인 신청 > 온라인 자가진단</h5>
				</div>
				<div class="w-100 mb-3"></div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img03.jpg" class="d-block w-100 border"/>
				</div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img04.jpg" class="d-block w-100 border"/>
				</div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img05.jpg" class="d-block w-100 border"/>
				</div>
				<div class="w-100 mb-3 mt-3"></div>
				<div class="col-12">
					<h5 class="alert alert-danger">Step 2. 품질 성능 검증 > 확인서 발급/컨설팅 지원</h5>
				</div>
				<div class="w-100 mb-3"></div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img06.jpg" class="d-block w-100 border"/>
				</div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img07.jpg" class="d-block w-100 border"/>
				</div>
				<div class="col-12 col-sm-12 col-md-4 mb-3">
					<img src="/assets/images/con-img08.jpg" class="d-block w-100 border"/>
				</div>
			</div>
		</div>



    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
</body>
</html>