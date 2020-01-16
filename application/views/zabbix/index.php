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
            <!--
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
							<a class="nav-link" href="#">확인<br class="m-br">현황</a>
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
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">품질&CenterDot;성능 검증 진행</h5>
						<h2>00건</h2>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">품질&CenterDot;성능 확인 시험 진행</h5>
						<h2>00건</h2>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5 class="text-center">확인서 발급</h5>
						<h2>00건</h2>
					</div>
				</div>

				<div class="w-100 my-3"></div>

				<div class="col d-flex justify-content-between">
					<h4>성능 모니터 알림 현황</h4>
					<a class="btn btn-info" href="/mypage/monitor">성능 모니터 바로가기</a>
				</div>

				<div class="w-100 my-1"></div>

				<div class="col-12 col-md-6">
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5>미확인 이벤트 알림</h5>
						<h2>00건</h2>
					</div>
					<div class="border min-height120 d-flex flex-column justify-content-center align-items-center bluegray">
						<h5>당월 이벤트 발생 횟수</h5>
						<h2>00건</h2>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div id="container" class="border min-height240 bluegray pt-4"></div>
				</div>

				<div class="w-100 my-4"></div>

				<div class="col-12 col-md-6">
					<div class="d-flex justify-content-between mb-2">
						<h4>이벤트 알림 로그</h4>
						<a class="btn btn-info" href="/mypage/log">자세히</a>
					</div>
					<div class="border min-height120 py-2 px-3">
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
				<div class="col-12 col-md-6">
					<div class="d-flex justify-content-between mb-2">
						<h4>경고 로그</h4>
						<a class="btn btn-info" href="/mypage/log">자세히</a>
					</div>
					<div class="border min-height120 py-2 px-3">
                        <table>
                            <tbody>
                                <tr><td class="py-1"><a data-toggle="modal" data-id="ISBN564542" href="#warningModal">2019-06-10 경고 로그<span class="text-danger px-2">New</span></a></td></tr>
                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>
                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>
                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>
                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>
                                <tr><td class="py-1"><a>2019-06-09 경고 로그</a></td></tr>
                            </tbody>
                        </table>
                    </div>
				</div>

			</div>
			-->

			<div class="row mt-5 mb-5">
				<? //$HTML_CODE ?>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786748986&to=1566797548986&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=1" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786769038&to=1566797569038&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=2" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786785280&to=1566797585281&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=3" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786799711&to=1566797599711&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=6" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786823382&to=1566797623382&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=7" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786838883&to=1566797638883&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=8" width="450" height="200" frameborder="0"></iframe>
			</div>
			<div class="row mt-5 mb-5">
                <iframe src="http://110.10.147.42:3000/d-solo/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566786850188&to=1566797650188&var-group=laidback&var-host=Web_Server_LB&var-netif=All&panelId=9" width="450" height="200" frameborder="0"></iframe>
			</div>
		</div>
    </div>
    <?php $this->load->view('layout/front/modal'); ?>
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<!-- 그래프 임시 js -->
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
<script>
/*
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        title: {
            text: '월 단위 이벤트 발생 횟수 추이 그래프',
            left: 'center'
        },
        xAxis: {
            type: 'category',
            data: ['3월', '4월', '5월', '6월']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [12, 3, 5, 8],
            type: 'bar'
        }]
    };
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
*/
</script>
</body>
</html>