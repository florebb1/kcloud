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
								<li class="breadcrumb-item active" aria-current="page">관리자 설정</li>
							</ol>
						</nav>
						
						<hr>
						
						
                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
	</body>
</html>