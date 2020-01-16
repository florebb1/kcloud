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
			<div class="p-5">회원가입</div>
		</div>

		<div class="container">
			
			
			<div class="row mt-5 mb-3">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item active"><a href="#">회원가입</a></li>
						</ol>
					</nav>
				</div>
			</div>
			
			
			<div class="row d-flex justify-content-center mb-5">
				<div class="col-12 py-3 text-center">
					<h5 class="pb-5 border-bottom">회원 가입을 하시면 클라우드 품질&CenterDot;성능 검증 지원 포털의 다양한 혜택을 누리실 수 있습니다.</h5>
				</div>
				<div class="w-100"></div>
				<div class="col-8 py-5">
					<form>
						<div class="border p-5 mb-5 text-center">
							<h3>Kcloud님 환영합니다.<br>회원가입이 완료되었습니다.<br>가입하신 이메일에서 인증 메일을 확인해주세요.</h3>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-info" onclick="location.href='/member/login'">로그인 하기</button>
						</div>
					</form>
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