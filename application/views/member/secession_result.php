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
            <div class="col-12 border-bottom py-3 text-center">
                <h3>회원탈퇴가 완료되었습니다.<h3>
                <h5 class="py-3">그동안 이용해 주셔서 감사합니다.</h5>
            </div>
            <div class="w-100"></div>
            <div class="col py-5 text-center">
                <button type="button" class="btn btn-info" onclick="location.href='/'">메인페이지로 이동</button>
            </div>
        </div>
    </div>

</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/member/login.js"></script>
</body>
</html>