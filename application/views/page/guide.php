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
			<div class="p-5">온라인 신청 안내</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">온라인 신청</a></li>
							<li class="breadcrumb-item active" aria-current="page">온라인 신청 안내</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row mb-5">
				<div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">품질성능 검증 신청 절차</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">진위여부 자가진단 절차</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">관리체계 자가진단 절차</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-5" id="myTabContent">
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- tab content start -->
                            <div class="sub-content-wrap p-3">
                                <img src="/assets/images/s32_img1.gif" class="mo-w-100">
                            </div>
                            <!-- tab content end -->
                        </div>
                        
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="contentview p-3">
                                <img src="/assets/images/s32_img2.gif" class="mo-w-100">
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="contentview p-3">
                                <img src="/assets/images/s32_img3.gif" class="mo-w-100">
                            </div>
                        </div>
                    </div>


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