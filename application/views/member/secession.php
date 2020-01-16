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
        <div class="p-5">회원탈퇴</div>
    </div>

    <div class="container">


        <div class="row mt-5 mb-3">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="#">회원탈퇴</a></li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 col-md-8 col-lg-6 py-3">
                <h3 class="mb-4">회원탈퇴를 위한 본인 확인 정보 입력</h3>
                <form id="secessionForm">
                    <div class="form-group">
                        <label for="exampleInputId">ID</label>
                        <input type="text" class="form-control" id="userId" name="userId" aria-describedby="emailHelp" placeholder="Enter ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="userPw" name="userPw" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <h3 class="pt-4">회원탈퇴 사유</h3>
                    <textarea class="w-100 min-height120" name="reason"></textarea>
					<div class="px-4">
		                <ul class="p-3 text-danger">
		                    <li>정상적인 회원탈퇴를 위해 본인 확인 절차가 필요합니다.</li>
		                    <li>회원가입 시 등록한 정보를 입력해주세요.</li>
		                    <li>입력하신 정보를 회원탈퇴 이외의 목적으로 사용하지 않습니다.</li>
		                    <li>개인정보 보호를 위해 필요 최소한의 개인정보로 본인 확인을 합니다.</li>
		                </ul>
		            </div>
				    <div class="text-center border-top mt-3">
				        <button type="button" id="nextBtn" class="btn btn-info my-5">다음</button>
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
<script src="/assets/js/page/member/secession.js"></script>
</body>
</html>