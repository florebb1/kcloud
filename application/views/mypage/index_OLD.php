<?php
    $userSeq = $this->session->userdata('userSeq');
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
                            <li class="breadcrumb-item active" aria-current="page">MYPAGE</li>
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
						<li class="nav-item">
							<a class="nav-link" href="/mypage/report">취약점 <br class="m-br">보고서</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/mypage/confirm">확인<br class="m-br">현황</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/mypage/qna">문의<br class="m-br">하기</a>
						</li>
					</ul>
				</div>
			</div>
            
			<div class="row mt-5 mb-5">
				<div class="col">
					<h4>품질&CenterDot;성능 검증 진행 현황</h4>
				</div>
				<div class="w-100 my-1"></div>
                <input type="hidden" id="userSeq" name="userSeq" value="<?=$userSeq?>">
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">품질&CenterDot;성능 검증 진행</h5>
						<h2><span id="online1"></span>건</h2>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">품질&CenterDot;성능 확인 시험 진행</h5>
						<h2><span id="online2"></span>건</h2>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">확인서 발급</h5>
						<h2><span id="online3"></span>건</h2>
					</div>
				</div>
				
				<div class="w-100 my-3"></div>
				
				<div class="col d-flex justify-content-between">
					<h4>성능 모니터 알림 현황</h4>
                    <select class="custom-select w-25 mb-3">
                        <option>web01</option>
                    </select>
<!--					<a class="btn btn-info" href="/mypage/monitor">성능 모니터 바로가기</a>-->
				</div>
				
				<div class="w-100 my-1"></div>
				
				<div class="col-12 col-md-6">
					<div class="border min-height120 d-flex flex-column bluegray">
						<h5 class="p-3">당월 가용율</h5>
                        <h2 class="text-center"><span>100</span> %</h2>
					</div>
                    <div class="border min-height120 d-flex flex-column bluegray">
                        <h5 class="p-3">
                            <div class="row">
                                <div class="col-6">탄력성</div>
                                <div class="col-6 text-right font-weight-normal">2019-05-23</div>
                            </div>
                        </h5>
<!--                        <h5 class="p-3">탄력성</h5>-->
                        <h2 class="text-center"><span>90</span> sec </h2>
                    </div>
                    <div class="border min-height120 d-flex flex-column bluegray">
                        <h5 class="p-3">당월 interrupt 발생</h5>
                        <h2 class="text-center"><span>0</span> 건</h2>
                    </div>
				</div>

                <div class="col-12 col-md-6">
                    <div class="border min-height120 d-flex flex-column bluegray">
                        <h5 class="p-3">응답시간</h5>
                        <h2 class="text-center"><span>0.19</span> sec</h2>
                    </div>
                    <div class="border min-height120 d-flex flex-column bluegray">
                        <h5 class="p-3">이벤트 알림 지연 시간</h5>
                        <h2 class="text-center"><span>0.00</span> sec</h2>
                    </div>
                    <div class="border min-height120 d-flex flex-column bluegray">
                        <h5 class="p-3">이벤트 진단</h5>
                        <h2 class="text-center"><span>0</span> 건</h2>
                    </div>
                </div>
				
<!--				<div class="col-12 col-md-6">-->
<!--					<div id="container" class="border min-height240 bluegray pt-4"></div>-->
<!--				</div>-->
				
<!--				<div class="w-100 my-4"></div>-->
				
<!--				<div class="col-12 col-md-6">-->
<!--					<div class="d-flex justify-content-between mb-2">-->
<!--						<h4>이벤트 알림 로그</h4>-->
<!--						<a class="btn btn-info" href="/mypage/log">자세히</a>-->
<!--					</div>-->
<!--					<div class="border min-height120 py-2 px-3">-->
<!--                        <table>-->
<!--                            <tbody>-->
<!--                                <tr><td class="py-1"><a data-toggle="modal" data-id="ISBN564541" href="#notificationModal">2019-06-10 10:00 WEB01 CPU Interruption 임계치 초과<span class="text-danger px-2">New</span></a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--				</div>-->
<!--				<div class="col-12 col-md-6">-->
<!--					<div class="d-flex justify-content-between mb-2">-->
<!--						<h4>경고 로그</h4>-->
<!--						<a class="btn btn-info" href="/mypage/log">자세히</a>-->
<!--					</div>-->
<!--					<div class="border min-height120 py-2 px-3">-->
<!--                        <table>-->
<!--                            <tbody>-->
<!--                                <tr><td class="py-1"><a data-toggle="modal" data-id="ISBN564542" href="#warningModal">2019-06-10 경고 로그<span class="text-danger px-2">New</span></a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>-->
<!--                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--				</div>-->
				
			</div>
		</div>
    </div>
    <?php $this->load->view('layout/front/modal'); ?>
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script>
    $(function () {
        var id = $("#userSeq").val();

        // 품질 성능 검증 진행 현황
        $.ajax({
            url: '/api/getApplySummary?userSeq='+id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                console.log(response);
                $("#online1").text(response.applyTotal1);
                $("#online2").text(response.applyTotal2);
                $("#online3").text(response.applyTotal3);
            }
        });
    });
</script>
</body>
</html>