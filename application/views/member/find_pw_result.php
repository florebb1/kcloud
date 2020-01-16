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
        <div class="p-5">비밀번호 찾기</div>
    </div>

    <div class="container">


        <div class="row mt-5 mb-3">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="#">비밀번호 찾기</a></li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 py-3 text-center">
                <h5 class="pb-5 border-bottom">임시 비밀번호가 회원님의 이메일로 발송되었습니다.</h5>
            </div>
            <div class="text-center">
                <button id="signBtn" type="button" class="btn btn-info" onclick="location.href='/member/login'">로그인 하기</button>
<!--                <button id="signBtn" type="button" class="btn btn-secondary ml-2" onclick="location.href='/member/find_id'">아이디 찾기</button>-->
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