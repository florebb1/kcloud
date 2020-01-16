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
			<div class="p-5">로그인</div>
		</div>

		<div class="container">
			
			
			<div class="row mt-5 mb-3">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item active"><a href="#">로그인</a></li>
						</ol>
					</nav>
				</div>
			</div>
			
			
			<div class="row d-flex justify-content-center mb-5">
				<div class="col-12 border-bottom py-3 text-center">
					<h3>K-Cloud 품질&CenterDot;성능 검증 지원 Portal에 오신 것을 환영합니다.<h3>
					<h5 class="py-3">K-Cloud 품질&CenterDot;성능 검증 지원 서비스 로그인 입니다.<br>아이디와 비밀번호를 입력해 주세요.</h5>
				</div>
				<div class="w-100"></div>
				<div class="col-12 col-md-4 py-5">
					<form>
                        <input type="hidden" id="exampleInputUrl1" name="exampleInputUrl1">
						<div class="form-group">
							<label for="exampleInputEmail1">아이디</label>
							<input type="text" class="form-control loginInput" id="exampleInputEmail1" name="userId">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">비밀번호</label>
							<input type="password" class="form-control loginInput" id="exampleInputPassword1" name="userPw">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="maintain">
							<label class="form-check-label" for="exampleCheck1">로그인 상태 유지</label>
						</div>
						<button type="button" id="loginBtn" class="btn btn-info btn-block">로그인</button>
					</form>
				</div>
				<div class="w-100"></div>
				<div class="col-12 col-md-4 border-top py-3 mb-5 text-center">
					<a href="/member/find_id">아이디 찾기</a>
					<span>ㅣ</span>
					<a href="/member/find_pw">비밀번호 찾기</a>
					<span>ㅣ</span>
					<a href="/member/register">회원가입</a>
				</div>
			</div>
		</div>

    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/base_script'); ?>
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<script src="/assets/js/page/member/login.js?ver=<?=time()?>"></script>
</body>
</html>