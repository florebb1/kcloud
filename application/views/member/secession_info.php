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

        <form id="secessionForm">
            <input type="hidden" name="userSeq">
        </form>

        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 border-bottom py-3">
                <h3>회원탈퇴 유의사항 확인</h3>
                <p class="p-3 bg-light text-danger font-weight-bold">1. K-Cloud 품질 ・ 성능 검증 지원 Portal의 회원을 탈퇴하면 포털에서 제공되었던 서비스 및 서비스 이력은 즉시 영구 삭제되며 복원되지 않습니다.<br><br>2. K-Cloud 품질 ・ 성능 검증 지원 Portal의 회원을 탈퇴하면 사용하셨던 아이디는 다시 사용할 수 없습니다.</p>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="secCheck">
                    <label class="form-check-label" for="exampleCheck1">유의사항을 확인하였고, 동의합니다</label>
                </div>
            </div>
            <button type="button" class="btn btn-secondary my-4 mx-2" onclick="history.back();">돌아가기</button>
            <button type="button" id="secBtn" class="btn btn-danger my-4">회원 탈퇴</button>
        </div>
    </div>

</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/member/secession_info.js"></script>
</body>
</html>