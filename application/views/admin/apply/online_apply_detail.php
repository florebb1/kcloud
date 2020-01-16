<!doctype html>
<html lang="ko">
	<head>
		<?php $this->load->view('/layout/admin/meta'); ?>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div class="main-wrapper">
            <div class="topbar sky-blue">
                <?php $this->load->view('/layout/admin/header'); ?>
            </div>
            <div class="left-side">
                <?php $this->load->view('/layout/admin/nav'); ?>
            </div>
            <div class="page-wrapper">
                <div class="main-content">

					<!-- ##### 관리자 막스 및 컨텐츠 내용 시작 -->
						
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><i class="pe-7s-home"></i> Home</li>
								<li class="breadcrumb-item">신청 관리</li>
								<li class="breadcrumb-item active" aria-current="page">온라인 신청 관리</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							
							<div class="col contentview">
				                <ul class="nav nav-tabs" id="myTab" role="tablist">
				                    <li class="nav-item">
				                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">품질성능 검증 신청</a>
				                    </li>
				                    <li class="nav-item">
				                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">진위여부 자가진단</a>
				                    </li>
				                    <li class="nav-item">
				                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">관리체계 자가진단</a>
				                    </li>
				                </ul>

								<div class="tab-content p-5 card border-top-0" id="myTabContent">
								    <!-- tab1 -->
				                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				                        <form id="onlineForm">
                                            <input type="hidden" id="t1_wr_id" name="wr_id">
                                            <input type="hidden" id="t1_status" name="status" value="0">
                                        </form>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="5" scope="col">신청회사 정보</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th rowspan="2" scope="row" class="w-16">회사(기관)명</th>
                                                    <td id="t1_wr_1"></td>
                                                    <th class="w-16">홈페이지</th>
                                                    <td id="t1_wr_10"></td>
                                                </tr>
                                                <tr>
                                                    <td id="t1_wr_2"></td>
                                                    <th>사업자번호</th>
                                                    <td id="t1_wr_4"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">대표자</th>
                                                    <td id="t1_wr_name"></td>
                                                    <th>대표자 E-mail</th>
                                                    <td id="t1_wr_email"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">대표 전화번호</th>
                                                    <td colspan="3" id="t1_wr_6"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">주소</th>
                                                    <td colspan="3" id="t1_wr_6"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="4" scope="col">업무 담당자</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="w-16">성명</th>
                                                    <td id="t1_wr_11"></td>
                                                    <th class="w-16">부서/직급</th>
                                                    <td id="t1_wr_12"></td>
                                                </tr>
                                                <tr>
                                                    <th>전화번호</th>
                                                    <td id="t1_wr_13"></td>
                                                    <th>핸드폰번호</th>
                                                    <td id="t1_wr_14"></td>
                                                </tr>
                                                <tr>
                                                    <th>E-mail</th>
                                                    <td id="t1_wr_15"></td>
                                                    <th>FAX</th>
                                                    <td id="t1_wr_16"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr><th colspan="5" scope="col">서비스 정보</th></tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th rowspan="2" scope="row" class="w-16">서비스 명칭</th>
                                                <td id="t1_wr_subject"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" id="t1_wr_8"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">서비스 제공 웹사이트</th>
                                                <td colspan="3" id="t1_wr_9"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">서비스 모델</th>
                                                <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; " id="t1_wr_3"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">서비스 소개</th>
                                                <td colspan="3" id="t1_wr_content"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">기타사항</th>
                                                <td colspan="3" id="t1_wr_5"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">첨부파일</th>
                                                <td>
                                                    <div class="custom-file"></div>
                                                    <div class="custom-file mt-2"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
				                        <div class="row">
				                            <div class="col d-block text-right mt-3 mb-5">
				                                <button type="button" class="btn btn-secondary mr-1" onclick="location.href='/admin/apply/online_apply'">목록</button>
				                                <button type="button" id="onlineBtn" class="btn btn-info ml-1">신청 확인</button>
				                            </div>
				                        </div>
								    </div>
								
								    <!-- tab2 -->
								    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

							            <form id="onlineForm2">
                                            <input type="hidden" id="t2_wr_id" name="wr_id">
                                            <input type="hidden" id="t2_idx" name="idx">
                                            <input type="hidden" id="t2_actionType" name="actionType" value="1">
                                            <input type="hidden" id="t2_status">
							                <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
							                    <tbody>
								                    <tr>
								                        <th scope="row" colspan="5" class="text-left text-danger">1.서류 점검</th>
								                    </tr>
								                </tbody>
							                </table>
							                <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                <colgroup>
								                	<col width="180px">
								                	<col width="">
								                	<col width="">
								                	<col width="90px">
								                	<col width="120px">
								                	<col width="90px">
								                </colgroup>
							                    <thead>
								                    <tr>
								                        <th scope="row">점검 항목</th>
								                        <th scope="row">주요 내용</th>
								                        <th scope="row">운영 현황</th>
								                        <th scope="row">수립 여부</th>
								                        <th scope="row">증적 자료</th>
								                        <th scope="row">확인/반려</th>
								                    </tr>
								                </tbody>
							                    <tbody>
								                    <tr>
								                        <th>1.1 클라우드 서비스<br>기능 정의서</th>
								                        <td>- 클라우드 서비스를 제공하기 위해 관리/우녕에 필요한 사항들을 포함한 서비스 설명서 및 관리자 매뉴얼을 제공하고 있는가?</td>
								                        <td id="t2_wr_9"></td>
								                        <td id="t2_wr_1"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status1" id="exampleRadios1" value="1">
																<label class="form-check-label" for="exampleRadios1">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status1" id="exampleRadios2" value="0">
																<label class="form-check-label" for="exampleRadios2">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>1.2 클라우드<br>서비스 Framework</th>
								                        <td>- 클라우드 서비스를 제공하기 위해 관리/운영에 필요한 Framework 및 기능을 정의하여 문서화하고 있는가?</td>
								                        <td id="t2_wr_subject"></td>
								                        <td id="t2_wr_2"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status2" id="exampleRadios3" value="1">
																<label class="form-check-label" for="exampleRadios3">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status2" id="exampleRadios4" value="0">
																<label class="form-check-label" for="exampleRadios4">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>1.3 클라우드 서비스<br>시스템 및 서비스 구성도</th>
								                        <td>- 클라우드 서비스를 제공하기 위해 관리/운영에 필요한 시스템 및 구성도를 문서화하고 있는가?</td>
								                        <td id="t2_wr_content"></td>
								                        <td id="t2_wr_3"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status3" id="exampleRadios5" value="1">
																<label class="form-check-label" for="exampleRadios5">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status3" id="exampleRadios6" value="0">
																<label class="form-check-label" for="exampleRadios6">반려</label>
															</div>
								                        </td>
								                    </tr>
								                </tbody>
							                </table>

											<table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
							                    <tbody>
								                    <tr>
								                        <th scope="row" colspan="5" class="text-left text-danger">2.시스템 점검(5개 지표)</th>
								                    </tr>
								                </tbody>
							                </table>

							                <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                <colgroup>
								                	<col width="180px">
								                	<col width="">
								                	<col width="">
								                	<col width="90px">
								                	<col width="120px">
								                	<col width="90px">
								                </colgroup>
							                    <thead>
								                    <tr>
								                        <th scope="row">점검 항목</th>
								                        <th scope="row">주요 내용</th>
								                        <th scope="row">운영 현황</th>
								                        <th scope="row">수립 여부</th>
								                        <th scope="row">증적 자료</th>
								                        <th scope="row">확인/반려</th>
								                    </tr>
								                </tbody>
							                    <tbody>
								                    <tr>
								                        <th>2.1 사용자 중심의<br>요청기반 셀프서비스</th>
								                        <td>
									                        <p>- 사용자 중심의 요청기반 셀프서비스(On-Demand Self Service)를 제공하고 있는가?</p>
															<p>※ 서버 자원, 네트워크 자원, 저장장치 등 컴퓨팅 자원을 서비스 제공자의 간섭없이 고객 스스로 필요한 서비스를 설치, 관리 할 수 있는지 점검</p>
															<p>※ SaaS의 경우, 서비스 이용자가(CSC)가 서비스 제공자의 간섭없이 고객 스스로 필요한 서비스 기능을 선택하여 이용 할 수 있는지 점검</p>
								                        </td>
								                        <td id="t2_wr_10"></td>
								                        <td id="t2_wr_4"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status4" id="exampleRadios7" value="1">
																<label class="form-check-label" for="exampleRadios7">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status4" id="exampleRadios8" value="0">
																<label class="form-check-label" for="exampleRadios8">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>2.2 범용 네트워크 접속</th>
								                        <td>
															<p>- 범용 네트워크 접속(Broad Network Access) 제공·관리 기능을 갖추고 있는가?</p>
															<p>※ 클라우드 서비스를 이용하기 위해 사용하는 단말기 플랫폼(스마트폰, 노트북, 태블릿 PC 등)에 관계없이 클라우드 서비스를 제공하는 네트워크에 접속할 수 있도록 표준 접근 매커니즘을 제공하는지 점검</p>
								                        </td>
								                        <td id="t2_wr_11">서비스 웹사이트에서 온라인 메뉴얼을 제공하고 있음</td>
								                        <td id="t2_wr_5">Y</td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status5" id="exampleRadios9" value="1">
																<label class="form-check-label" for="exampleRadios9">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status5" id="exampleRadios10" value="0">
																<label class="form-check-label" for="exampleRadios10">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>2.3 신속한 탈력성</th>
								                        <td>
															<p>- 범용 네트워크 접속(Broad Network Access) 제공·관리 기능을 갖추고 있는가?</p>
															<p>※ 클라우드 서비스를 이용하기 위해 사용하는 단말기 플랫폼(스마트폰, 노트북, 태블릿 PC 등)에 관계없이 클라우드 서비스를 제공하는 네트워크에 접속할 수 있도록 표준 접근 매커니즘을 제공하는지 점검</p>
								                        </td>
								                        <td id="t2_wr_12"></td>
								                        <td id="t2_wr_6"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status6" id="exampleRadios11" value="1">
																<label class="form-check-label" for="exampleRadios11">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status6" id="exampleRadios12" value="0">
																<label class="form-check-label" for="exampleRadios12">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>2.4 IT 자원의 공동이용</th>
								                        <td>
															<p>- IT 자원을 풀(Pool) 형태로 유지하며, 이용자의 요청에 따라 할당 및 회수가 가능한 기능을 갖추고 있는가?</p>
															<p>※ 물리적 자원을 이용자가 독점적으로 임대하는 것이 아닌 다중 임대(Multi-Tenant) 방식으로 IT 자원은 풀 형태로 유지되며, 이용자의 요청에 따라 동적으로 할당/회수 되는지 점검</p>
								                        </td>
								                        <td id="t2_wr_13">서비스 웹사이트에서 온라인 메뉴얼을 제공하고 있음</td>
								                        <td id="t2_wr_7">Y</td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status7" id="exampleRadios13" value="1">
																<label class="form-check-label" for="exampleRadios13">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status7" id="exampleRadios14" value="0">
																<label class="form-check-label" for="exampleRadios14">반려</label>
															</div>
								                        </td>
								                    </tr>
								                    <tr>
								                        <th>2.5 서비스 측정</th>
								                        <td>
															<p>- 미터링(Metering) 기능을 이용하여 자원의 제공·관리할 수 있는 기능을 갖추고 있는가?</p>
															<p>※ 미터링 기능을 이용하여 자원 사용량을 측정하여 최적화하고 임계치를 초과하는 경우 사용을 제한하는지 점검</p>
															<p>※ SaaS의 경우, 고객에서 제공하는 서비스 항목/기능별 사용량 측정을 통해 내부 과금정책에 의거 제공하고 있는지 점검</p>
															<p>&nbsp;&nbsp;(서비스 항목/기능별 측정방식 및 내용은 상이하므로 사용자 수/사용량 등 측정항목은 다양할 수 있음)</p>
								                        </td>
								                        <td id="t2_wr_14"></td>
								                        <td id="t2_wr_8"></td>
								                        <td><a href="#"></a></td>
								                        <td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status8" id="exampleRadios15" value="1">
																<label class="form-check-label" for="exampleRadios15">확인</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="status8" id="exampleRadios16" value="0">
																<label class="form-check-label" for="exampleRadios16">반려</label>
															</div>
								                        </td>
								                    </tr>
								                </tbody>
							                </table>
							            </form>
							            
				                        <div class="row">
				                            <div class="col d-block text-right mt-3 mb-5">
				                                <button type="button" id="saveBtn1" class="btn btn-success mr-1">저장</button>
				                                <button type="button" id="onlineBtn2" class="btn btn-info ml-1">진위여부 점검 완료</button>
				                            </div>
				                        </div>

								    </div>
								
								    <!-- tab3 -->
								    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			                            <form id="onlineForm3">
				                            <input type="hidden" id="t3_idx" name="idx">
                                            <input type="hidden" id="t3_wr_id" name="wr_id">
                                            <input type="hidden" id="t3_status">
                                            <input type="hidden" id="t3_actionType" name="actionType" value="1">
											<div class="alert alert-danger" role="alert">
												1.개요
											</div>

			                                <div>
												<table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">1.1. 업체 및 서비스명</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
					                                    <tr>
						                                    <th scope="row" class="w-16">업체명</th>
						                                    <td colspan="2" id="t3_wr_subject"></td>
					                                    </tr>
					                                    <tr>
						                                    <th scope="row" class="w-16">서비스명</th>
						                                    <td>(국문) <span id="t3_wr_2"></span></td>
						                                    <td>(영문) <span id="t3_wr_3"></span></td>
					                                    </tr>
					                                    <tr>
						                                    <th scope="row" class="w-16">클라우드 인프라 위치</th>
						                                    <td>(서비스명) <span id="t3_wr_4"></span></td>
						                                    <td>(인프라 물리적 위치) <span id="t3_wr_5"></span></td>
					                                    </tr>
				                                    </tbody>
			                                    </table>
												<table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">1.2. 서비스 개요</th>
									                    </tr>
									                </tbody>
								                </table>
												<table class="table table-bordered">
													<colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
					                                    <tr>
						                                    <th scope="row" class="w-16">서비스 소개</th>
						                                    <td id="t3_wr_content"></td>
					                                    </tr>
					                                    <tr>
						                                    <th scope="row" class="w-16">주요기능</th>
						                                    <td id="t3_wr_24"></td>
					                                    </tr>
				                                    </tbody>
			                                    </table>
			                                </div>
							                
							                <div class="alert alert-danger" role="alert">
												2.항목별 검증결과
											</div>
			                                
			                                <div>
												<table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.1. 가용성</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
													<colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가용률 / 가용률 유지능력</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요내용</th>
				                                            <td colspan="4" class="text-left">갑작스런 클라우드서비스 장애로 인해 서비스가 중단되는 우려를 최소화하기 위해 가용률 최소 기준을 제시하고, 이를 보장하기 위해 관리 정책ㆍ기술을 보유하고 있는지 점검</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_25"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.1.1. 가용률 정책 수립 및 수준 제시</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가용률 정책 수립 및 수준 제시</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_7"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status1" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status1" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
																	( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" class="form-control" id="t3_reason1" name="reason1" placeholder="2.1.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.1.2. 가용률 유지를 위한 시스템 구성ㆍ운영</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가용률 유지를 위한 시스템 구성ㆍ운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_8"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status2" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status2" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
																	( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason2" name="reason2" class="form-control" placeholder="2.1.2 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.1.3. 가상머신(VM) 모니터링 시스템 운영</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가상머신(VM) 모니터링 시스템 운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_9"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status3" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status3" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
																	( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason3" name="reason3" class="form-control" placeholder="2.1.3 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.1.4. 가용률 관리 절차의 수립 및 운영</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가용률 관리 절차의 수립 및 운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_10"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status4" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status4" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
																	( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason4" name="reason4" class="form-control" placeholder="2.1.4 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.1.5. 가용률 관리 위한 조직 및 역할 규정</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">가용률 관리 위한 조직 및 역할 규정</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_11"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status5" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status5" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason5" name="reason5" class="form-control" placeholder="2.1.5 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
												<table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.2. 응답성</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">응답시간 / 응답시간 유지능력</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_26"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.2.1. 응답시간 수준 및 보상기준 제시</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">응답시간 수준 및 보상기준 제시</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_12"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status6" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status6" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
																	( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason6" name="reason6" class="form-control" placeholder="2.2.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.2.2. 응답시간 관리를 위한 시스템 기능 구성</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">응답시간 수준 및 보상기준 제시</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_13"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status7" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status7" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason7" name="reason7" class="form-control" placeholder="2.2.2 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.2.3. 응답시간 분석 및 관리 프로세스 운영</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">응답시간 분석 및 관리 프로세스 운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_14"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status8" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status8" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason8" name="reason8" class="form-control" placeholder="2.2.3 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.2.4. 응답시간 관리 조직 및 역할</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">응답시간 분석 및 관리 프로세스 운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="wr_15"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status9" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status9" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason9" name="reason9" class="form-control" placeholder="2.2.4 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.3. 확장성</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
			                                        <tr>
			                                            <th scope="row" class="w-16">점검항목</th>
			                                            <td colspan="4" class="text-left">확장성 / 확장가능 지원능력</td>
			                                        </tr>
			                                        <tr>
			                                            <th scope="row" class="w-16">현황</th>
			                                            <td colspan="4" id="t3_wr_27"></td>
			                                        </tr>
			                                        </tr>
			                                    </table>
			                                    <h6>2.3.1. 확장성 제공 방식</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">확장성 제공 방식</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_16"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status10" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status10" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason10" name="reason10" class="form-control" placeholder="2.3.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.3.2. 이용자 확장 요청 처리 프로세스</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">이용자 확장 요청 처리 프로세스</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_17"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status11" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status11" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason11" name="reason11" class="form-control" placeholder="2.3.2 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.3.3. 확장성 제공을 위한 기능 지원</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">확장성 제공을 위한 기능 지원</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_18"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status12" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status12" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason12" name="reason12" class="form-control" placeholder="2.3.3 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.4. 신뢰성(1)</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">백업주기 / 주기적 백업</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_28"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.4.1. 백업 정책 수립</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">백업 정책 수립</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요결과</th>
				                                            <td colspan="4" class="text-left">Cloud Servers의 재해, 재난, 무단 접근 등 위협으로부터 이용자의 데이터를 안전하게 보호/관리하기 위해 백업 대상 및 범위를 정의하고 있음</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" class="text-left">(1)백업 정책 - 백업 대상 및 범위</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status13" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status13" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason13" name="reason13" class="form-control" placeholder="2.4.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.4.2. 백업 시스템 구성</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">백업 시스템 구성</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_20"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status14" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status14" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason14" name="reason14" class="form-control" placeholder="2.4.2 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.4.3. 주기적 백업 시행</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">주기적 백업 시행</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_21"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status15" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status15" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason15" name="reason15" class="form-control" placeholder="2.4.3 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.5. 신뢰성(2)</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">데이터 보관기간 / 데이터 반환 및 폐기</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_29"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.5.1. 데이터 반환 및 폐기 정책 수립</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">데이터 반환 및 폐기 정책 수립</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_22"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status16" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status16" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason16" name="reason16" class="form-control" placeholder="2.5.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.5.2. 데이터 반환 및 폐기 시스템 운영</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">데이터 반환 및 폐기 시스템 운영</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_23"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status17" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status17" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason17" name="reason17" class="form-control" placeholder="2.5.2 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.6. 서비스 지속성</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">서비스 지속성</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요내용</th>
				                                            <td colspan="4" class="text-left">클라우드 서비스 제공자의 재무상태, 조직, 예산계획 등을 수립하고 있는지 점검</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_30"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.6.1. 서비스 지원 조직 및 인력조직</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">조직 및 역할 규정</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요결과</th>
				                                            <td colspan="4" class="text-left">xxx 서비스 지속성을 보장하기 위한 조직을 구성ㆍ운영 중이며, 이에 따른 역할을 규정하고 있음</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" class="text-left">(1)클라우드 사업본부 조직도<br>(2)관리 부서별 직무 및 역할</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status18" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status18" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason18" name="reason18" class="form-control" placeholder="2.6.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.7. 서비스 지원</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">서비스 지원체계 / 이용자 지원 기능</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요내용</th>
				                                            <td colspan="4" class="text-left">이용자의 서비스 만족도를 제공하기 위해 각종 기술지원, 제공방식의 다양성, 서비스 수준 등 이용자 지원을 위한 정책ㆍ기술을 보유하고 있는지 점검</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_31"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status19" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status19" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason19" name="reason19" class="form-control" placeholder="2.7 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.7.1. 이용자 편의 기능 제공</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">이용자 편의 기능 제공</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_19"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status20" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status20" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason20" name="reason20" class="form-control" placeholder="2.7.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
								                    <tbody>
									                    <tr>
									                        <th scope="row" colspan="5" class="text-left text-danger">2.8. 고객대응</th>
									                    </tr>
									                </tbody>
								                </table>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">고객대응체계 / 고객지원 및 대응체계</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">주요내용</th>
				                                            <td colspan="4" class="text-left">서비스에 문제가 발생하는 경우, 이용자에게 신속하게 대응하기 위한 체계를 갖추고 있어야 하며, 장애 통지 절차, 전화, 이메일, 팝업 등을 통해 정애 통지 정책을 수립하고 운영하고 있는 점검</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">현황</th>
				                                            <td colspan="4" id="t3_wr_32"></td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    <h6>2.8.1. 사용자 편의 기능 제공</h6>
			                                    <table class="table table-bordered">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">점검항목</th>
				                                            <td colspan="4" class="text-left">사용자 편의 기능 제공</td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">운영현황</th>
				                                            <td colspan="4" id="t3_wr_33"></td>
				                                        </tr>
				                                        <tr>
				                                            <th scope="row" class="w-16">관리 체계 점검</th>
				                                            <td colspan="4" class="text-left">
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status21" id="inlineRadio1" value="1">
																	<label class="form-check-label" for="inlineRadio1">확인</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input t3-radio" type="radio" name="status21" id="inlineRadio2" value="0">
																	<label class="form-check-label" for="inlineRadio2">반려</label>
																</div>
																<div class="form-check form-check-inline w-50">
                                                                    ( <span style="width:80px;">반려사유</span><span class="pr-2">:</span><input type="text" id="t3_reason21" name="reason21" class="form-control" placeholder="2.8.1 항목 반려 사유" readonly> )
																</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                    
			                                    <table class="table table-bordered mt-3">
				                                    <colgroup>
				                                    	<col width="200px">
				                                    	<col>
				                                    </colgroup>
				                                    <tbody>
				                                        <tr>
				                                            <th scope="row" class="w-16">첨부파일</th>
				                                            <td colspan="4" class="text-left">
                                                                <span class="px-2"><a href="#"></a></span><span><a href="#"></a></span>
				                                            </td>
				                                        </tr>
				                                    </tbody>
			                                    </table>
			                                </div>


			                            </form>
			                            
				                        <div class="row">
				                            <div class="col d-block text-right mt-3 mb-5">
				                                <button type="button" id="saveBtn2" class="btn btn-success mr-1">저장</button>
				                                <button type="button" id="onlineBtn3" class="btn btn-info ml-1">진위여부 점검 완료</button>
				                            </div>
				                        </div>
			                            
								    </div>
								</div>
								
							</div>
							
						</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->

                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
        <script src="/assets/js/admin/apply/detail.js"></script>
	</body>
</html>
