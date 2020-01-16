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
            <div class="col-8 py-5">
                <form id="registForm">
                    <div class="border p-5 mb-5">
                        <div class="form-row mb-3">
                            <div class="col-12 mb-3">
                                <p>* 이메일로 인증</p>
                                <p class="text-secondary px-3">회원가입 이메일 주소와 입력한 이메일 주소가 같아야, 인증번호를 받을 수 있습니다.</p>
                            </div>
                            <div class="col-3 text-right">아이디</div>
                            <div class="col-6"><input type="text" name="userId" class="form-control"></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3 text-right">이메일</div>
                            <div class="col-6"><input type="email" name="email" class="form-control"></div>
                            <div class="col-3"><button type="button" id="authBtn" class="btn btn-secondary">인증번호받기</button></div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3 text-right"></div>
                            <div class="col-6">
                                <input type="text" name="authNum" class="form-control" placeholder="인증번호">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3 text-right"></div>
                            <div class="col-6">
                                <p>인증번호가 오지 않나요? <a data-toggle="popover" data-content="발송한 메일이 스팸 메일로 분류된 것은 아닌지  확인해 주세요. 스팸 메일함에도 메일이 없다면, 다시 한 번 '인증번호 받기'를 눌러주세요.">✑</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button id="findBtn" type="button" class="btn btn-info">다음</button>
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
<script src="/assets/js/page/member/find-pw.js"></script>
</body>
</html>