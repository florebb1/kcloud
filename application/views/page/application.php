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
			<div class="p-5">온라인 신청</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">온라인 신청</a></li>
							<li class="breadcrumb-item active" aria-current="page">온라인 신청</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row mb-5">
				<div class="col">
					
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