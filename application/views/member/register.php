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
				<div class="col-12 col-md-8 py-5">
					<form>
						<div class="border p-5 mb-3">
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="allCheck">
								<label class="form-check-label" for="exampleCheck1">이용 약관, 개인정보 수집 및 이용, 포털에서 제공하는 안내 메일 수신에 모두 동의 합니다.</label>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="check1" name="check">
								<label class="form-check-label" for="check1">이용 약관 동의 <span class="text-red">(필수)</span></label>
								<a href="/page/terms" target="_blank" class="link-under">보기</a>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="check2" name="check">
								<label class="form-check-label" for="check2">개인정보 수집 및 이용 동의 <span class="text-red">(필수)</span></label>
								<a href="/page/privacy" target="_blank" class="link-under">보기</a>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="check3" name="check">
								<label class="form-check-label" for="check3">포털에서 제공하는 안내 메일 수신 동의 <span class="text-blue">(선택)</span></label>
							</div>
						</div>
						<div class="text-center">
							<button type="button" id="nextBtn" class="btn btn-info">다 음</button>
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
<script src="/assets/js/page/member/register.js"></script>
</body>
</html>