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
        <div class="p-5">아이디 찾기</div>
    </div>

    <div class="container">


        <div class="row mt-5 mb-3">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="#">아이디 찾기</a></li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 py-3 text-center">
                <h5 class="pb-5 border-bottom">회원님의 아이디는 아래와 같습니다.</h5>
            </div>
            <div class="w-100"></div>
            <div class="col-8 py-5">
                <form id="registForm">
                    <input type="hidden" name="receiveEmail" value="N">
                    <input type="hidden" id="id2">
                    <!--                    <h5>필수항목</h5>-->
                    <div class="border p-5 mb-5">
                        <div class="form-row text-center">
                            <div class="col">
                                <h3 id="id"></h3>
                            </div>
<!--                            <div class="col-8">-->
<!--                                <h4>가입일<span class="px-2">2019.06.10</span></h4>-->
<!--                            </div>-->
                        </div>
                    </div>

                    <div class="text-center">
                        <button id="signBtn" type="button" class="btn btn-info" onclick="location.href='/member/login'">로그인 하기</button>
                        <button id="signBtn" type="button" class="btn btn-secondary ml-2" onclick="location.href='/member/find_pw'">비밀번호 찾기</button>
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
<script src="/assets/js/page/member/find-id2.js"></script>
</body>
</html>