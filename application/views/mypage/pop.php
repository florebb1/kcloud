<!doctype html>
<html lang="ko">
<head>
<?php $this->load->view('layout/front/meta'); ?>
<title><?php echo $title; ?></title>
</head>
<body style="background-color:#000000;">
    <!--
    <div class="header-wrapper">
        <?php //$this->load->view('layout/front/header'); ?>
    </div>
    <div class="sub-content">

		<div class="sub-hero">
			<div class="p-5">마이페이지</div>
		</div>

    </div>
    -->

    <!--<div class="container">-->
    <div>
        <!--
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
        -->

        <div class="row">
            <div class="col-8"><!-- 클릭하시면 성능 모니터 상세를 확인하실 수 있습니다. --></div>
            <div class="col-4 text-right">
                <select class="custom-select w-50 mt-3" name="gp_id" id="gp_id" onchange="select_graph()">
					<?=$select_graph?>
				</select>
            </div>
        </div>

        <h4 style="color:#CCCCCC;">가용성</h4>
        <!-- <div class="row mb-5"> -->
        <div class="row">
            <div class="col-12 col-md-3" id="graph_AAA_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 가용율</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_AAA_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년 가용율</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_AAA_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균 가용율</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_AAA_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 가용율 변경</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
        </div>
        <br>
        <h4 style="color:#CCCCCC;">응답시간</h4>
        <!--<div class="row mb-5">-->
        <div class="row">
            <div class="col-12 col-md-3" id="graph_BBB_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">현행</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_BBB_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_BBB_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">당월 최대</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_BBB_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">당월 최저</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
        </div>
        <br>

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

        <h4 style="color:#CCCCCC;">이벤트 알림</h4>
        <!--<div class="row mb-5">-->
        <div class="row">
            <div class="col-12 col-md-3" id="graph_DDD_1">
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
            <div class="col-12 col-md-3" id="graph_DDD_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">평균</h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_DDD_3">
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
            <div class="col-12 col-md-3" id="graph_DDD_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">
                        <div class="row">
                            <div class="col-6">최소</div>
                            <div class="col-6 text-right font-weight-light align-self-center" style="font-size: 1rem;">2019-05-23</div>
                        </div>
                    </h4>
                    <h1 class="text-center"><span>Sample data</span> </h1>
                </div>
            </div>
        </div>
        <br>

        <h4 style="color:#CCCCCC;">Interrupt 발생</h4>
        <div class="row mb-5">
            <div class="col-12 col-md-3" id="graph_EEE_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월간</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_EEE_2">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">년간</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_EEE_3">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월 평균</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-3" id="graph_EEE_4">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">최근 발생 일자</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
        </div>
        <br>

        <h4 style="color:#CCCCCC;">이벤트 알림 로그</h4>
        <div class="row mb-5">
            <div class="col-12" id="graph_FF_1">
                <div class="border min-height120 bluegray">
                    <h4 class="font-weight-light p-3">월간</h4>
                    <h1 class="text-center"><span>Sample data</span></h1>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/front/modal'); ?>
    <!--
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>
    -->

<?php $this->load->view('layout/front/base_script'); ?>
<script>
    $(function () {
		select_graph();
    });

	function select_graph(){
		var gp_id = $("#gp_id option:selected").val();

		if(gp_id){
			$.ajax({
				url: '/graph/mypage?gp_id='+gp_id,
				type: 'GET',
				dataType: 'JSON',
				success: function (response) {
					console.log(response);
					$("#graph_AAA_1").html(response.AAA_1);
					$("#graph_AAA_2").html(response.AAA_2);
					$("#graph_AAA_3").html(response.AAA_3);
					$("#graph_AAA_4").html(response.AAA_4);

					$("#graph_BBB_1").html(response.BBB_1);
					$("#graph_BBB_2").html(response.BBB_2);
					$("#graph_BBB_3").html(response.BBB_3);
					$("#graph_BBB_4").html(response.BBB_4);
                    /*
					$("#graph_C_1").html(response.C_1);
					$("#graph_C_2").html(response.C_2);
					$("#graph_C_3").html(response.C_3);
					$("#graph_C_4").html(response.C_4);
                    */
					$("#graph_DDD_1").html(response.DDD_1);
					$("#graph_DDD_2").html(response.DDD_2);
					$("#graph_DDD_3").html(response.DDD_3);
					$("#graph_DDD_4").html(response.DDD_4);

					$("#graph_EEE_1").html(response.EEE_1);
					$("#graph_EEE_2").html(response.EEE_2);
					$("#graph_EEE_3").html(response.EEE_3);
					$("#graph_EEE_4").html(response.EEE_4);
					$("#graph_FF_1").html(response.FF_1);
				}
			});
		}
	}


</script>
</body>
</html>