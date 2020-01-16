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
        <div class="p-5">사이트맵</div>
    </div>

    <div class="container">

        <div class="row mt-5">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">사이트맵</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-5 p-5">
            <div class="col-12 col-md-4 p-2">
                <h3 class="bg-info rounded-pill text-center text-white p-2">사업소개</h3>
                <ul class="px-5 py-3">
                    <li><a href="/page/purpose">목적 및 법적근거</a></li>
                    <li><a href="/page/purpose#profile">클라우드 발전법</a></li>
                    <li><a href="/page/purpose#contact">품질/성능 기준 고시</a></li>
                    <li><a href="/page/verification">품질/성능 검증 사업</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 p-2">
                <h3 class="bg-info rounded-pill text-center text-white p-2">품질성능 검증 기준</h3>
                <ul class="px-5 py-3">
                    <li><a href="/page/availability">가용성</a></li>
                    <li><a href="/page/responsiveness">응답성</a></li>
                    <li><a href="/page/scalability">확장성</a></li>
                    <li><a href="/page/responsibility">신뢰성</a></li>
                    <li><a href="/page/persistence">서비스 지속성</a></li>
                    <li><a href="/page/support">서비스 지원</a></li>
                    <li><a href="/page/customer">고객대응</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 p-2">
                <h3 class="bg-info rounded-pill text-center text-white p-2">온라인 신청 및 자가진단</h3>
                <ul class="px-5 py-3">
                    <li><a href="/page/guide">온라인 신청 안내</a></li>
                    <li><a href="/page/application#home">품질/성능 검증 신청</a></li>
                    <li><a href="/page/application#profile">진위여부 자가진단</a></li>
                    <li><a href="/page/application#contact">관리체계 자가진단</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 p-2">
                <h3 class="bg-info rounded-pill text-center text-white p-2">확인 현황</h3>
                <ul class="px-5 py-3">
                    <li><a href="/page/iaas">IaaS</a></li>
                    <li><a href="/page/paas">PaaS</a></li>
                    <li><a href="/page/saas">SaaS</a></li>
                    <li><a href="/page/etc">기타</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 p-2">
                <h3 class="bg-info rounded-pill text-center text-white p-2">정보마당</h3>
                <ul class="px-5 py-3">
                    <li><a href="/board/notice">공지사항</a></li>
                    <li><a href="/board/pds">자료실</a></li>
                    <li><a href="/board/faq">FAQ</a></li>
                </ul>
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