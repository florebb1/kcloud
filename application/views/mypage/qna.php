<?php
$userSeq = $this->session->userdata('userSeq');
$userName = $this->session->userdata('userName');
$userId = $this->session->userdata('userId');
?>
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
        <div class="p-5">마이페이지</div>
    </div>

    <div class="container">

        <div class="row mt-5">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">MYPAGE</a></li>
                        <li class="breadcrumb-item active" aria-current="page">문의하기</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col">
                <ul class="nav nav-tabs-mobile mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/mypage/online">온라인 <br class="m-br">신청</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mypage/monitor">성능 <br class="m-br">모니터</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="/mypage/report">취약점 <br class="m-br">보고서</a>-->
<!--                    </li>-->
                    <li class="nav-item">
						<a class="nav-link" href="/mypage/confirm">확인<br class="m-br">현황</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/mypage/qna">문의<br class="m-br">하기</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
	            <div class="bg-light p-5">
	                <form id="qnaForm">
	                    <div class="form-group row pt-3">
	                        <label for="staticNm" class="col-sm-2 col-form-label font-weight-bold">회원명</label>
	                        <div class="col-sm-10">
	                            <input type="hidden" name="userSeq" value="<?=$userSeq?>">
	                            <input type="text" id="staticNm" name="userName" class="form-control required" value="<?=$userName?>">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticId" class="col-sm-2 col-form-label font-weight-bold">아이디</label>
	                        <div class="col-sm-10">
	                            <input type="text" readonly class="form-control-plaintext" id="staticId" value="<?=$userId?>">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticSt" class="col-sm-2 col-form-label font-weight-bold">단체명</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control required" id="staticSt" name="organizationName">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">이메일</label>
	                        <div class="col-sm-10">
	                            <input type="email" class="form-control required" id="staticEmail" name="userEmail">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticTitle" class="col-sm-2 col-form-label font-weight-bold">제목</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control required" id="staticTitle" name="wr_subject">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticContent" class="col-sm-2 col-form-label font-weight-bold">내용</label>
	                        <div class="col-sm-10">
	                            <textarea class="form-control min-height120 mb-0 required" id="staticContent" name="wr_content"></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticFile" class="col-sm-2 col-form-label font-weight-bold">파일첨부</label>
	                        <div class="col-sm-10">
	                            <input type="file" class="form-control-plaintext" id="staticFile" name="wr_file">
	                        </div>
	                    </div>
	                </form>
	            </div>
                <div class="col text-center pb-3">
                    <button type="button" id="qnaBtn" class="btn btn-info">문의하기</button>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/mypage/qna.js"></script>
</body>
</html>