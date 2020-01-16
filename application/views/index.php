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
    <div class="main-content">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <!--  <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('/upload/main/<?=$info["banner_img"]?>');">
<!--                     <img src="/assets/images/background/background001.jpg" class="d-block w-100"/> -->
					<div class="carousel-caption d-md-block">
						<div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
							<h1><?=nl2br($info["banner_title"])?></h1>
							<h5><?=nl2br($info["banner_sub1"])?></h5>
							<h4><?=nl2br($info["banner_sub2"])?></h4>
						</div>
					</div>                   
                </div>
                <!-- <div class="carousel-item" style="background-image:url('/assets/images/background/background001.jpg');">
					<div class="carousel-caption d-md-block">
						<div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
							<h1>2019년 2차<br class="m-br">클라우드 서비스<br class="m-br">품질성능 검증 모집 공고</h1>
							<h5>클라우드 서비스<br class="m-br">품질성능 향상 및 이용자 신뢰 제고를 위해,<br>2019년 2차<br class="m-br">[클라우드 서비스 품질성능 검증]지원 기업을<br>모집하오니 많은 관심과 참여 바랍니다.</h5>
							<h4>접수기간 <br class="m-br"><br class="m-br">6월 17일(월) 오전 9시<br class="m-br">~<br class="m-br">6월 28일(금) 오후 5시</h4>
						</div>
					</div>    
                </div> -->
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>

		<section class="bluegray border-top">
		    <div class="container py-5">
		        <div class="row pt-5 pb-2">
		            <div class="col-12 col-md-12 col-lg-4">
						<div class="card w-100">
							<img src="/assets/images/main_cont1_img1.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">품질성능 검증개요</h5>
								<p class="card-text">품질·성능 검증 서비스 및 품질 향상 컨설팅 제공</p>
								<a href="/page/verification" class="btn btn-link">자세히</a>
							</div>
						</div>
		            </div>
		            <div class="col-12 col-md-12 col-lg-4">
						<div class="card w-100">
							<img src="/assets/images/main_cont1_img2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">클라우드 확인 (진위여부점검)</h5>
								<p class="card-text">클라우드 확인 (진위여부점검) 바로가기</p>
								<a href="/mypage/online" class="btn btn-link">바로가기</a>
							</div>
						</div>
		            </div>
		            <div class="col-12 col-md-12 col-lg-4">
						<div class="card w-100">
							<img src="/assets/images/main_cont1_img3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">관리체계 자가진단</h5>
								<p class="card-text">관리체계 자가진단 바로가기</p>
								<a href="/mypage/online" class="btn btn-link">바로가기</a>
							</div>
						</div>
		            </div>
		        </div>
		    </div>
		</section>
        
        <section class="white">
			<div class="container mt-3">
	            <div class="row d-flex justify-content-center">
		            <div class="col text-center py-5">
			            <h2 class="py-3">품질성능 검증 기준</h2>
			            <div class="sub-title">품질성능 기준별 품질성능 안내서를 참조하여 기준별 정보 제공합니다.</div>		            
		            </div>
	            </div>
				<div class="row align-items-center">
					<div class="col-12 col-carousel">
						<div class="owl-carousel carousel-main">
							<div>
								<div class="card w-100 card-color01" onclick="document.location.href='/page/availability'" style="cursor:pointer">
									
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>가용성</h3>
										<div class="py-3"><img src="/assets/images/icon/1.png" class="w-50" alt="..."></div>
										<div>서비스가 장애 없이 정상적으로 운영되는 능력을 말한다.</div>
									</div>
									
								</div>
							</div>
							<div>
								<div class="card w-100 card-color02" onclick="document.location.href='/page/responsiveness'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>응답성</h3>
										<div class="py-3"><img src="/assets/images/icon/2.png" class="w-50" alt="..."></div>
										<div>어떠한 이벤트에 대하여 즉각적으로 반응할 수 있는 능력을 말한다.</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card w-100 card-color03" onclick="document.location.href='/page/scalability'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>확장성</h3>
										<div class="py-3"><img src="/assets/images/icon/3.png" class="w-50" alt="..."></div>
										<div>이용자의 요청에 따라 자원의 양을 할당할 수 있는 능력을 말한다.</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card w-100 card-color04" onclick="document.location.href='/page/responsibility'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>신뢰성</h3>
										<div class="py-3"><img src="/assets/images/icon/4.png" class="w-50" alt="..."></div>
										<div>클라우드서비스 제공자가 클라우드서비스를 정상적으로 운영할 수 있는 능력을 의미한다.</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card w-100 card-color05" onclick="document.location.href='/page/persistence'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>서비스 지속성</h3>
										<div class="py-3"><img src="/assets/images/icon/5.png" class="w-50" alt="..."></div>
										<div>클라우드서비스 제공자가 클라우드서비스를 안정적으로 계속하여 제공할 수 있는 능력을 말한다.</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card w-100 card-color06" onclick="document.location.href='/page/support'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>서비스 지원</h3>
										<div class="py-3"><img src="/assets/images/icon/6.png" class="w-50" alt="..."></div>
										<div>클라우드서비스의 이용 편의성을 제공하기 위한 능력을 말한다.</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card w-100 card-color07" onclick="document.location.href='/page/customer'" style="cursor:pointer">
									<div class="d-flex flex-column justify-content-start align-items-center w-100 h-100">
										<h3>고객대응</h3>
										<div class="py-3"><img src="/assets/images/icon/7.png" class="w-50" alt="..."></div>
										<div>클라우드서비스를 이용하는 고객 요청에 대응하는 일련의 활동을 말한다.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

		<section class="img-bg01 mt-5">
		    <div class="container py-5">
		        <div class="row py-5">
		            <div class="col-12 col-md-12 col-lg-6">
						<div class="w-100 latest-wrap">
							<h5 class="d-flex justify-content-between align-items-center">
								<span>공지사항</span>
								<a href="/board/notice">전체보기</a>
							</h5>
							<ul id="noticeContent" class="list-group list-group-flush"></ul>
						</div>
		            </div>
		            <div class="col-12 col-md-12 col-lg-6">
						<div class="w-100 latest-wrap">
							<h5 class="d-flex justify-content-between align-items-center">
								<span>자료실</span>
								<a href="/board/pds">전체보기</a>
							</h5>
							<ul id="pdsContent" class="list-group list-group-flush"></ul>
						</div>
		            </div>
		        </div>
		    </div>
		</section>

    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/index.js"></script>
</body>
</html>