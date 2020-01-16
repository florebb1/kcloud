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
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="/mypage/report">취약점 <br class="m-br">보고서</a>
                    </li>
                    -->
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
            <div class="col-8"><!-- 클릭하시면 성능 모니터 상세를 확인하실 수 있습니다. --></div>
            <div class="col-4 text-right">
                <select class="custom-select w-50 mt-3" name="gp_id" id="gp_id" onchange="select_graph()">
					<?=$select_graph?>
				</select>
            </div>
        </div>

        <h4>가용성</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_A_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 가용률</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_A_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년 가용률</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_A_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균 가용률</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_A_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월가용률 변경</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
        </div>

        <h4>응답시간</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_B_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">현재</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_B_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_B_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">최저</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_B_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">최대</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
        </div>

        <!--
        <h4>탄력성</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_C_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최근</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_C_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_C_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최대</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_C_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최저</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
        </div>
        -->

        <h4>이벤트 알림</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_D_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최근</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_D_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_D_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최대</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_D_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최저</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
        </div>

        <h4>Interrupt 발생</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_E_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">현재</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_E_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_E_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">최저</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_E_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">최대</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 min-height120">
	            <div class="border px-4 py-3">
	                <div class="row">
	                    <div class="col-6 d-flex justify-content-start align-items-center"><span style="font-size: 1.2rem;">이벤트 알림 로그</span></div>
                        <div class="col-6 text-right"><!-- <span class="text-danger font-weight-bold">1</span>건의 미확인 이벤트가 있습니다. --></div>
						<!-- <div class="w-100 border-top m-3"><div></div></div> -->
	                    <div class="col monitor mt-3"  id="graph_F">
                            <!--
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
                            -->
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
        <!--
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
        -->
    </div>

    <?php $this->load->view('layout/front/modal'); ?>
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script>
    $(function () {
		select_graph();
    });

	function select_graph(){
		var gp_id = $("#gp_id option:selected").val();

		if(gp_id){
            if(gp_id=="pop"){
                window.open('/mypage/pop', '_blank');
            }else{
                $.ajax({
                    url: '/graph/mypage?gp_id='+gp_id,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        console.log(response);
                        $("#graph_A_1").html(response.A_1);
                        $("#graph_A_2").html(response.A_2);
                        $("#graph_A_3").html(response.A_3);
                        $("#graph_A_4").html(response.A_4);

                        $("#graph_B_1").html(response.B_1);
                        $("#graph_B_2").html(response.B_2);
                        $("#graph_B_3").html(response.B_3);
                        $("#graph_B_4").html(response.B_4);
                        /*
                        $("#graph_C_1").html(response.C_1);
                        $("#graph_C_2").html(response.C_2);
                        $("#graph_C_3").html(response.C_3);
                        $("#graph_C_4").html(response.C_4);
                        */
                        $("#graph_D_1").html(response.D_1);
                        $("#graph_D_2").html(response.D_2);
                        $("#graph_D_3").html(response.D_3);
                        $("#graph_D_4").html(response.D_4);

                        $("#graph_E_1").html(response.E_1);
                        $("#graph_E_2").html(response.E_2);
                        $("#graph_E_3").html(response.E_3);
                        $("#graph_E_4").html(response.E_4);
                        $("#graph_F").html(response.F);
                    }
                });
            }
		}
	}


</script>
</body>
</html>