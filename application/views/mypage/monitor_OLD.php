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

    </div>

    <div class="container">

        <div class="row mt-5">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">MYPAGE</a></li>
                        <li class="breadcrumb-item active" aria-current="page">성능 모니터</li>
                    </ol>
                </nav>
            </div>
        </div>

		<div class="row mt-3">
			<div class="col">
				<ul class="nav nav-tabs-mobile mt-3">
					<li class="nav-item">
						<a class="nav-link" href="/mypage/online">온라인 <br class="m-br">신청</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="/mypage/monitor">성능 <br class="m-br">모니터</a>
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

        <div class="row">
            <div class="col-8">클릭하시면 성능 모니터 상세를 확인하실 수 있습니다.</div>
            <div class="col-4 text-right">
                <select class="custom-select w-50 mt-3">
                    <option>web01</option>
                </select>
            </div>
        </div>

        <h4>가용성</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 가용율</h4>
                    <h1 class="text-center"><span>100</span>%</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년 가용율</h4>
                    <h1 class="text-center"><span>99.9</span>%</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년 가용율</h4>
                    <h1 class="text-center"><span>99.9</span>%</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 가용율 변경</h4>
                    <h1 class="text-center"><span>+</span> <span>0.01</span>%</h1>
                </div>
            </div>
        </div>

        <h4>응답시간</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">현행</h4>
                    <h1 class="text-center"><span>0.19</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>0.21</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">당월 최대</h4>
                    <h1 class="text-center"><span>3.99</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">당월 최저</h4>
                    <h1 class="text-center"><span>0.09</span> sec</h1>
                </div>
            </div>
        </div>

        <h4>탄력성</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최근</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>90</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>121</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최대</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>180</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최저</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>72</span> sec</h1>
                </div>
            </div>
        </div>

        <h4>이벤트 알림 지연 시간</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최근</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>300</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>300</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최대</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>500</span> sec</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최저</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>200</span> sec</h1>
                </div>
            </div>
        </div>

        <h4>Interrupt 발생</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월간</h4>
                    <h1 class="text-center"><span>1</span>건</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년간</h4>
                    <h1 class="text-center"><span>7</span>건</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">현재 초당 Interrupt</h4>
                    <h1 class="text-center"><span>206.0</span>%</h1>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균 초당 Interrupt</h4>
                    <h1 class="text-center"><span>291.3</span></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 min-height120">
	            <div class="border px-4 py-3">
	                <div class="row">
	                    <div class="col-6 d-flex justify-content-start align-items-center"><span style="font-size: 1.2rem;">이벤트 알림 로그</span></div>
                        <div class="col-6 text-right"><span class="text-danger font-weight-bold">1</span>건의 미확인 이벤트가 있습니다.</div>
						<div class="w-100 border-top m-3"><div></div></div>
	                    <div class="col monitor mt-3">
	                        <table>
	                            <tbody>
	                                <tr><td class="py-1"><a data-toggle="modal" data-id="ISBN564541" href="#notificationModal">2019-06-10 10:00 WEB01 CPU Interruption 임계치 초과<span class="text-danger px-2">New</span></a></td></tr>
	                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>
	                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>
	                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>
	                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>
	                                <tr><td class="py-1"><a>2019-06-09 10:00 알림 로그</a></td></tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
        <div class="mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="pe-7s-angle-left"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="pe-7s-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <?php $this->load->view('layout/front/modal'); ?>
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
</body>
</html>