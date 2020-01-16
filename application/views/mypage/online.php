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

<!--    <div>-->
<!--        --><?php //echo $this->session->userdata['id'] ?>
<!--    </div>-->
    <div class="container">
	    
        <div class="row mt-5">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">MYPAGE</a></li>
                        <li class="breadcrumb-item active" aria-current="page">온라인 신청</li>
                    </ol>
                </nav>
            </div>
        </div>
        
		<div class="row mt-3 mb-5">
			<div class="col">
				<ul class="nav nav-tabs-mobile mt-3">
					<li class="nav-item">
						<a class="nav-link active" href="/mypage/online">온라인 <br class="m-br">신청</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/mypage/monitor">성능 <br class="m-br">모니터</a>
					</li>
<!--					<li class="nav-item">-->
<!--						<a class="nav-link" href="/mypage/report">취약점 <br class="m-br">보고서</a>-->
<!--					</li>-->
					<li class="nav-item">
						<a class="nav-link" href="/mypage/confirm">확인<br class="m-br">현황</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/mypage/qna">문의<br class="m-br">하기</a>
					</li>
				</ul>
			</div>
		</div>

        <div class="row my-5">
            <div class="col-12"><h2>검증 진행 현황</h2></div>
            <!-- 품질, 성능 검증 -->
            <div class="col-12 col-md-4 mb-4">
	            <div class="border h-100 p-4">
	                <div class="text-center py-3"><h3>품질ㆍ성능 검증</h3></div>
	                <div class="row">
	                    <div class="col-6">진위 여부 진단 (8지표)</div>
	                    <div class="col">확인 <span>0</span></div>
	                    <div class="col">반려 <span>0</span></div>
	                    <div class="col-12"></div>
	                    <div class="col-6">관리 체계 진단 (결과)</div>
	                    <div class="col text-center"><a class="text-danger" data-toggle="popover" title="반려 사유" data-content="그냥">반려</a></div>
	                </div>
	            </div>
            </div>
            <!-- 품질, 성능 시험 -->
            <div class="col-12 col-md-4 mb-4">
	            <div class="border h-100 p-4">
	                <div class="text-center py-3"><h3>품질ㆍ성능 시험</h3></div>
	                <div class="row">
	                    <div class="col-4">진행 상태</div>
	                    <div class="col text-center">미접수</div>
	                    <div class="col-12"></div>
	                    <div class="col-4">문의 : </div>
	                    <div class="col text-center">TTA 000 책임 02-000-0000</div>
	                </div>
                </div>
            </div>
            <!-- 확인서 발급 -->
            <div class="col-12 col-md-4 mb-4">
	            <div class="border h-100 p-4">
	                <div class="text-center py-3"><h3>확인서 발급</h3></div>
	                <div class="row">
	                    <div class="col-4">발급 상태</div>
	                    <div class="col text-center">미접수</div>
	                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col contentview">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">품질성능 검증 신청 절차</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">진위여부 자가진단 절차</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">관리체계 자가진단 절차</a>
                    </li>
                </ul>

                <div class="tab-content mt-5" id="myTabContent">
                    <!-- tab result -->
                    <input type="hidden" id="form1Res" value="0">
                    <input type="hidden" id="form2Res" value="0">
                    <input type="hidden" id="form3Res" value="0">
                    <!-- tab1 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form id="onlineForm" action="/api/apply1" method="post" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <thead>
	                                <tr>
		                                <th colspan="5" scope="col">신청회사 정보</th>
	                                </tr>
                                </thead>
                                <tbody>
	                                <tr>
	                                    <th rowspan="2" scope="row" class="w-16">회사(기관)명</th>
	                                    <td><input class="form-control" type="text" name="wr_1" placeholder="(한글명)"></td>
	                                    <th class="w-16">홈페이지</th>
	                                    <td><input class="form-control" type="url" name="wr_10"></td>
	                                </tr>
	                                <tr>
	                                    <td><input class="form-control" type="text" name="wr_2" placeholder="(영문명)"></td>
	                                    <th>사업자번호</th>
	                                    <td><input class="form-control" type="number" id="wr_4" name="wr_4" placeholder="'-'를 제외한 10자리 숫자"></td>
	                                </tr>
	                                <tr>
	                                    <th scope="row">대표자</th>
	                                    <td><input class="form-control required" type="text" name="wr_name"></td>
	                                    <th>대표자 E-mail</th>
	                                    <td><input class="form-control" type="email" id="wr_email" name="wr_email"></td>
	                                </tr>
	                                <tr>
	                                    <th scope="row">대표 전화번호</th>
	                                    <td colspan="3"><input class="form-control" type="number" name="wr_6"></td>
	                                </tr>
	                                <tr>
	                                    <th scope="row">주소</th>
	                                    <td colspan="3"><input class="form-control" type="text" name="wr_7"></td>
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
	                                    <td><input class="form-control" type="text" name="wr_11"></td>
	                                    <th class="w-16">부서/직급</th>
	                                    <td><input class="form-control" type="text" name="wr_12"></td>
	                                </tr>
	                                <tr>
	                                    <th>전화번호</th>
	                                    <td><input class="form-control" type="number" name="wr_13"></td>
	                                    <th>핸드폰번호</th>
	                                    <td><input class="form-control" type="number" name="wr_14"></td>
	                                </tr>
	                                <tr>
	                                    <th>E-mail</th>
	                                    <td><input class="form-control" type="email" id="wr_15" name="wr_15"></td>
	                                    <th>FAX</th>
	                                    <td><input class="form-control" type="text" name="wr_16"></td>
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
                                    <td><input type="text" name="wr_subject" placeholder="(한글명)" class="form-control required"></td>

                                </tr>
                                <tr>
                                    <td colspan="3"><input class="form-control" type="text" name="wr_8" placeholder="(영문명)"></td>
                                </tr>
                                <tr>
                                    <th scope="row">서비스 제공 웹사이트</th>
                                    <td colspan="3"><input class="form-control" type="url" name="wr_9" placeholder="(홈페이지 주소)"></td>
                                </tr>
                                <tr>
                                    <th scope="row">서비스 모델</th>
                                    <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="wr_3" id="radios1" value="IaaS" checked>
                                            <label class="form-check-label" for="radios1">IaaS(Instructure as a Service)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="wr_3" id="radios2" value="PaaS">
                                            <label class="form-check-label" for="radios2">PaaS(Platform as a Service)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="wr_3" id="radios3" value="SaaS">
                                            <label class="form-check-label" for="radios3">SaaS(Software as a Service)</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">서비스 소개</th>
                                    <td colspan="3"><textarea id="content" name="wr_content" class="form-control required" rows="5" maxlength="65536"></textarea></td>
                                </tr>
                                <tr>
                                    <th scope="row">기타사항</th>
                                    <td colspan="3"><textarea class="form-control" rows="5" id="etc" name="wr_5" maxlength="65536"></textarea></td>
                                </tr>
<!--                                <tr>-->
<!--                                    <th scope="row">비밀번호</th>-->
<!--                                    <td colspan="3" class="text-left"><input type="password" name="wr_password" class="w-25"></td>-->
<!--                                </tr>-->
                                <tr>
                                    <th scope="row">첨부파일</th>
                                    <td>
<!--
                                        <div class="custom-file my-2 text-left">
                                            <input type="file" name="bf_file[]" id="validatedCustomFile1">
                                        </div>
                                        <div class="custom-file my-2">
                                            <input type="file" name="bf_file[]" id="validatedCustomFile2">
                                        </div>
-->
                                        
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="validatedCustomFile1" name="bf_file[]" required>
											<label class="custom-file-label" for="validatedCustomFile1">선택된 파일 없음</label>
											<div class="invalid-feedback">Example invalid custom file feedback</div>
										</div>
										
										<div class="custom-file mt-2">
											<input type="file" class="custom-file-input" id="validatedCustomFile2" name="bf_file[]" required>
											<label class="custom-file-label" for="validatedCustomFile2">선택된 파일 없음</label>
											<div class="invalid-feedback">Example invalid custom file feedback</div>
										</div>
                                        
                                    </td>
                                </tr>
<!--                                <tr>-->
<!--                                    <th scope="row">자동등록방지</th>-->
<!--                                    <td colspan="3">-->
<!--                                        <div class="d-flex">-->
<!--                                            <img src="https://cloudqos.or.kr/plugin/kcaptcha/kcaptcha_image.php?t=1565077864415" alt="" id="captcha_img" style="border: 1px solid;">-->
<!--                                            <input type="text" name="" class="w-25 mx-2">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
                                </tbody>
                            </table>
                        </form>
                        <div class="row">
                            <div class="col d-block text-right mt-3 mb-5">
<!--                                <button type="button" class="btn btn-secondary mr-1" onclick="location.href='/mypage/onlineList'">취소</button>-->
                                <button type="button" id="onlineBtn" class="btn btn-info ml-1">신청서 제출</button>
                            </div>
                        </div>
                    </div>

                    <!-- tab2 -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="contentview">
                            <form id="onlineForm2" action="/api/apply2" method="post" enctype="multipart/form-data">
	                            <input type="hidden" name="idx" id="idx1">
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">업체명</th>
                                        <td colspan="4"><input type="text" id="wr_name" name="wr_name" class="required form-control" placeholder="업체명"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">서비스명</th>
                                        <td colspan="4"><input type="text" id="wr_homepage" name="wr_homepage" class="required form-control" placeholder="서비스명"></td>
                                    </tr>
<!--                                    <tr>-->
<!--                                        <th scope="row" class="w-16">비밀번호</th>-->
<!--                                        <td colspan="4"><input type="text" name="pw" class="required" placeholder="비밀번호"></td>-->
<!--                                    </tr>-->
                                </table>
                                <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
                                    <tr>
                                        <th scope="row" colspan="5" class="text-left text-danger">1.서류 점검(3개 지표)</th>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">1.1 클라우드 서비스 기능 정의서</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">- 클라우드 서비스를 제공하기 위해 관리/우녕에 필요한 사항들을 포함한 서비스 설명서 및 관리자 매뉴얼을 제공하고 있는가?</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_9" name="wr_9" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_1" id="exampleRadios1" value="Y">
                                                <label class="form-check-label" for="exampleRadios1">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_1" id="exampleRadios2" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios2">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_1" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_1" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_1">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">1.2 클라우드 서비스 Framework</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">- 클라우드 서비스를 제공하기 위해 관리/운영에 필요한 Framework 및 기능을 정의하여 문서화하고 있는가?</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_subject" name="wr_subject" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_2" id="exampleRadios3" value="Y">
                                                <label class="form-check-label" for="exampleRadios3">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_2" id="exampleRadios4" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios4">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_2" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_2" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_2">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">1.3 클라우드 서비스 시스템 및 서비스 구성도</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">- 클라우드 서비스를 제공하기 위해 관리/운영에 필요한 시스템 및 구성도를 문서화하고 있는가?</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_content" name="wr_content" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_3" id="exampleRadios5" value="Y">
                                                <label class="form-check-label" for="exampleRadios5">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_3" id="exampleRadios6" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios6">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_3" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_3" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_3">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4" style="border-top: 1px solid #d9d9d9;">
                                    <tr>
                                        <th scope="row" colspan="5" class="text-left text-danger">2.시스템 점검(5개 지표)</th>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">2.1 사용자 중심의 요청기반 셀프서비스</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">
                                            - 사용자 중심의 요청기반 셀프서비스(On-Demand Self Service)를 제공하고 있는가?<br>
                                            ※ 서버 자원, 네트워크 자원, 저장장치 등 컴퓨팅 자원을 서비스 제공자의 간섭없이 고객 스스로 필요한 서비스를 설치, 관리 할 수 있는지 점검<br>
                                            ※ SaaS의 경우, 서비스 이용자가(CSC)가 서비스 제공자의 간섭없이 고객 스스로 필요한 서비스 기능을 선택하여 이용 할 수 있는지 점검
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_10" name="wr_10" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_4" id="exampleRadios7" value="Y">
                                                <label class="form-check-label" for="exampleRadios7">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_4" id="exampleRadios8" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios8">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_4" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_4" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_4">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">2.2 범용 네트워크 접속</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">
                                            - 범용 네트워크 접속(Broad Network Access) 제공·관리 기능을 갖추고 있는가?<br>
                                            ※ 클라우드 서비스를 이용하기 위해 사용하는 단말기 플랫폼(스마트폰, 노트북, 태블릿 PC 등)에 관계없이 클라우드 서비스를 제공하는 네트워크에 접속할 수 있도록 표준 접근 매커니즘을 제공하는지 점검
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_11" name="wr_11" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_5" id="exampleRadios9" value="Y">
                                                <label class="form-check-label" for="exampleRadios9">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_5" id="exampleRadios10" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios10">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_5" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_5" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_5">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">2.3 신속한 탈력성</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">
                                            - 범용 네트워크 접속(Broad Network Access) 제공·관리 기능을 갖추고 있는가?<br>
                                            ※ 클라우드 서비스를 이용하기 위해 사용하는 단말기 플랫폼(스마트폰, 노트북, 태블릿 PC 등)에 관계없이 클라우드 서비스를 제공하는 네트워크에 접속할 수 있도록 표준 접근 매커니즘을 제공하는지 점검
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_12" name="wr_12" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_6" id="exampleRadios11" value="Y">
                                                <label class="form-check-label" for="exampleRadios11">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_6" id="exampleRadios12" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios12">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_6" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_6" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_7">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">2.4 IT 자원의 공동이용</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">
                                            - IT 자원을 풀(Pool) 형태로 유지하며, 이용자의 요청에 따라 할당 및 회수가 가능한 기능을 갖추고 있는가?<br>
                                            ※ 물리적 자원을 이용자가 독점적으로 임대하는 것이 아닌 다중 임대(Multi-Tenant) 방식으로 IT 자원은 풀 형태로 유지되며, 이용자의 요청에 따라 동적으로 할당/회수 되는지 점검
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_13" name="wr_13" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_7" id="exampleRadios13" value="Y">
                                                <label class="form-check-label" for="exampleRadios13">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_7" id="exampleRadios14" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios14">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_7" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_7" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_7">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered my-4">
                                    <tr>
                                        <th scope="row" class="w-16">점검항목</th>
                                        <td colspan="4">2.5 서비스 측정</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-16">주요내용</th>
                                        <td colspan="4" class="text-left">
                                            - 미터링(Metering) 기능을 이용하여 자원의 제공·관리할 수 있는 기능을 갖추고 있는가?<br>
                                            ※ 미터링 기능을 이용하여 자원 사용량을 측정하여 최적화하고 임계치를 초과하는 경우 사용을 제한하는지 점검<br>
                                            ※ SaaS의 경우, 고객에서 제공하는 서비스 항목/기능별 사용량 측정을 통해 내부 과금정책에 의거 제공하고 있는지 점검<br>
                                            (서비스 항목/기능별 측정방식 및 내용은 상이하므로 사용자 수/사용량 등 측정항목은 다양할 수 있음)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">운영현황</th>
                                        <td colspan="4"><input type="text" id="wr_14" name="wr_14" class="required form-control" placeholder="운영현황"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">수립여부</th>
                                        <td colspan="3" style="line-height:36px; text-align:left; padding-left:15px; ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_8" id="exampleRadios15" value="Y">
                                                <label class="form-check-label" for="exampleRadios15">Y</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="wr_8" id="exampleRadios16" value="N" checked>
                                                <label class="form-check-label" for="exampleRadios16">N</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">증적자료 등록</th>
                                        <td colspan="4">
<!--
                                            <div class="custom-file my-2">
                                                <input type="file" id="bf_file_8" name="bf_file[]">
                                            </div>
-->
                                            
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="bf_file_8" name="bf_file[]" required>
												<label class="custom-file-label" for="bf_file_8">선택된 파일 없음</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
                                            
                                            
                                        </td>
                                    </tr>
                                </table>
<!--                                <div class="d-flex">-->
<!--                                    <img src="https://cloudqos.or.kr/plugin/kcaptcha/kcaptcha_image.php?t=1565077493762" alt="" id="captcha_img" style="border: 1px solid">-->
<!--                                    <input type="text" class="mx-2">-->
<!--                                </div>-->
<!--                                자동등록방지 숫자를 순서대로 입력하세요.-->
                            </form>
                            <div class="col d-block text-right mt-3 mb-5">
<!--                                <button type="button" class="btn btn-secondary mr-1" onclick="location.href='/mypage/onlineList'">취소</button>-->
                                <button type="button" id="onlineBtn2" class="btn btn-info ml-1">작성 완료</button>
                            </div>
                        </div>
                    </div>

                    <!-- tab3 -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="text-center">[양식] 클라우드 서비스 관리체계 작성 자료</h2>
                        <div class="contentview">
                            <form id="onlineForm3" action="/api/apply3" method="post" enctype="multipart/form-data">
	                            <input type="hidden" name="idx" id="idx2">
                                <h4 class="alert alert-info">1. 개요</h4>
                                <div>
                                    <h4>1.1. 업체 및 서비스명</h4>
                                    
                                    <table class="table table-bordered">
	                                    <tr>
		                                    <th scope="row" class="w-16">업체명</th>
		                                    <td colspan="2"><input type="text" id="wr_subject_3" name="wr_subject" class="form-control required"></td>
	                                    </tr>
	                                    <tr>
		                                    <th scope="row" class="w-16">서비스명</th>
		                                    <td><div class="mb-2">(국문)</div><input class="form-control" type="text" name="wr_2"></td>
		                                    <td><div class="mb-2">(영문)</div><input class="form-control" type="text" name="wr_3"></td>
	                                    </tr>
	                                    <tr>
		                                    <th scope="row" class="w-16">클라우드 인프라 위치</th>
		                                    <td><div class="mb-2">(서비스명)</div><input class="form-control" type="text" name="wr_4"></td>
		                                    <td><div class="mb-2">(인프라 물리적 위치)</div><input class="form-control" type="text" name="wr_5"></td>
	                                    </tr>
                                    </table>

                                    <h4>1.2. 서비스 개요</h4>
									<table class="table table-bordered">
	                                    <tr>
		                                    <th scope="row" class="w-16">서비스 소개</th>
		                                    <td><textarea id="wr_content_3" name="wr_content" class="form-control required" rows="5"></textarea></td>
	                                    </tr>
	                                    <tr>
		                                    <th scope="row" class="w-16">주요기능</th>
		                                    <td><textarea name="wr_24" class="form-control" rows="5"></textarea></td>
	                                    </tr>
                                    </table>
                                </div>

                                <h4 class="alert alert-info">2. 항목별 검증결과</h4>
                                <div>
                                    <h4>2.1. 가용성</h4>
                                    <table class="table table-bordered">
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
                                            <td colspan="4" class="text-left"><input type="text" name="wr_25" class="form-control" placeholder="서비스명(국문)"></td>
                                        </tr>
                                    </table>
                                    <h5>2.1.1. 가용률 정책 수립 및 수준 제시</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">가용률 정책 수립 및 수준 제시</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_7" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)가용률 정책 수립 : 000 서비스 이용약관&#13;&#10;(2)가용률 수준 제시 : 000 서비스 SLA"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.1.2. 가용률 유지를 위한 시스템 구성ㆍ운영</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">가용률 유지를 위한 시스템 구성ㆍ운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_8" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)가용률 유지를 위한 시스템 구성"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.1.3. 가상머신(VM) 모니터링 시스템 운영</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">가상머신(VM) 모니터링 시스템 운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_9" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)000 infra TCP/IP Monitoring&#13;&#10;(2)Syslog Monitoring&#13;&#10;(3)In/Outbound Traffice Monitoring"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.1.4. 가용률 관리 절차의 수립 및 운영</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">가용률 관리 절차의 수립 및 운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_10" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)가용률 관리 절차"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.1.5. 가용률 관리 위한 조직 및 역할 규정</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">가용률 관리 위한 조직 및 역할 규정</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_11" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)클라우드사업본부 조직도&#13;&#10;(2)관리 부서별 직무 및 역할"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.2. 응답성</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">응답시간 / 응답시간 유지능력</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_26" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.2.1. 응답시간 수준 및 보상기준 제시&#13;&#10;2.2.2. 응답시간 관리를 위한 시스템 기능 구성&#13;&#10;2.2.3. 응답시간 분석 및 관리 프로세스 운영&#13;&#10;2.2.4. 응답시간 관리 조직 및 역할"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.2.1. 응답시간 수준 및 보상기준 제시</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">응답시간 수준 및 보상기준 제시</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_12" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)응답시간 수준 제시 : 000 서비스 SLA&#13;&#10;(2)보상기준 : 000 서비스 SLA"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.2.2. 응답시간 관리를 위한 시스템 기능 구성</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">응답시간 수준 및 보상기준 제시</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_13" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)이용자 관리콘솔 작업 이력 확인 가능&#13;&#10;(2)관리자 콘솔 작업 이력 확인 가능"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.2.3. 응답시간 분석 및 관리 프로세스 운영</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">응답시간 분석 및 관리 프로세스 운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_14" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)응답시간 분석 및 관리 프로세스"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.2.4. 응답시간 관리 조직 및 역할</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">응답시간 분석 및 관리 프로세스 운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_15" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)클라우드사업본부 조직도&#13;&#10;(2)관리 부서별 직무 및 역할"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.3. 확장성</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">확장성 / 확장가능 지원능력</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_27" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.3.1. 확장성 제공 방식&#13;&#10;2.3.2. 이용자 확장 요청 처리 프로세스&#13;&#10;2.3.3 확장성 제공을 위한 기능 지원"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.3.1. 확장성 제공 방식</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">확장성 제공 방식</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_16" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)확장성 제공 방식"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.3.2. 이용자 확장 요청 처리 프로세스</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">이용자 확장 요청 처리 프로세스</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_17" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)확장 요청 처리 프로세스"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.3.3. 확장성 제공을 위한 기능 지원</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">확장성 제공을 위한 기능 지원</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_18" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)관리콘솔을 통한 가상 리소스 스펙 확장/축소 기능&#13;&#10;(2)볼륨 관리 기능&#13;&#10;(3)하드웨어 Spec. 관리 기능"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.4. 신뢰성(1)</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">백업주기 / 주기적 백업</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_28" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.4.1. 백업 정책 수립&#13;&#10;2.4.2. 백업시스템 구성&#13;&#10;2.4.3. 주기적 백업 시행"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.4.1. 백업 정책 수립</h5>
                                    <table class="table table-bordered">
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
                                    </table>
                                    <h5>2.4.2. 백업 시스템 구성</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">백업 시스템 구성</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_20" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)백업 시스템 운영 현황"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.4.3. 주기적 백업 시행</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">주기적 백업 시행</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_21" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)주기적 백업 시행"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.5. 신뢰성(2)</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">데이터 보관기간 / 데이터 반환 및 폐기</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_29" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.5.1. 데이터 변환 및 폐기 저앷ㄱ 수립&#13;&#10;2.5.2. 데이터 반환 및 폐기 시스템 운영"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.5.1. 데이터 반환 및 폐기 정책 수립</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">데이터 반환 및 폐기 정책 수립</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_22" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)데이터 반환 및 폐기 정책"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.5.2. 데이터 반환 및 폐기 시스템 운영</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">데이터 반환 및 폐기 시스템 운영</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_23" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)가상서버 및 리소스 폐기 기능 제공"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.6. 서비스 지속성</h4>
                                    <table class="table table-bordered">
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
                                            <td colspan="4" class="text-left">
                                                <textarea name="wr_30" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.6.1 클라우드 서비스 재무현황&#13;&#10;2.6.2 비전 및 중장기 목표 수립&#13;&#10;2.6.3 서비스 지원 조직 및 인력&#13;&#10;2.6.4 서비스 지원 교육 프로그램&#13;&#10;2.6.5 클라우드 서비스 예산계획 수립&#13;&#10;2.6.6 클라우드 서비스 운영관리 정책(재무통제 및 승인정책 프로세스)&#13;&#10;2.6.7 서비스 개선 계획 및 정책"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <h5>2.6.3. 서비스 지원 조직 및 인력조직</h5>
                                    <table class="table table-bordered">
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
                                            <td colspan="4" class="text-left">(1)클라우드 사업본부 조직도<br>(2)관리 부서별 직무 및 역할"></td>
                                        </tr>
                                    </table>
                                    <h4>2.7. 서비스 지원</h4>
                                    <table class="table table-bordered">
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
                                            <td colspan="4" class="text-left">
                                                <textarea name="wr_31" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.7.1. 이용자 편의 기능 제공"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <h5>2.7.1. 이용자 편의 기능 제공</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">이용자 편의 기능 제공</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_19" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)사용자 메뉴얼&#13;&#10;(2)서비스 활용 가이드(FAQ)&#13;&#10;(3)온라인 고객지원 체계"></textarea></td>
                                        </tr>
                                    </table>
                                    <h4>2.8. 고객대응</h4>
                                    <table class="table table-bordered">
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
                                            <td colspan="4" class="text-left"><textarea name="wr_32" class="form-control" rows="5" placeholder="(예시)&#13;&#10;2.8.1. 고객요청 처리절차"></textarea></td>
                                        </tr>
                                    </table>
                                    <h5>2.7.1. 사용자 편의 기능 제공</h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row" class="w-16">점검항목</th>
                                            <td colspan="4" class="text-left">사용자 편의 기능 제공</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="w-16">운영현황</th>
                                            <td colspan="4" class="text-left"><textarea name="wr_33" class="form-control" rows="5" placeholder="(예시)&#13;&#10;(1)고객지원 및 대응절차"></textarea></td>
                                        </tr>
                                    </table>
                                    
                                    <table class="table table-bordered mt-3">
                                        <tr>
                                            <th scope="row" class="w-16">첨부파일</th>
                                            <td colspan="4" class="text-left">
	                                            
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="validatedCustomFile3" name="bf_file[]" required>
													<label class="custom-file-label" for="validatedCustomFile3">선택된 파일 없음</label>
													<div class="invalid-feedback">Example invalid custom file feedback</div>
												</div>
												
												<div class="custom-file mt-2">
													<input type="file" class="custom-file-input" id="validatedCustomFile4" name="bf_file[]" required>
													<label class="custom-file-label" for="validatedCustomFile4">선택된 파일 없음</label>
													<div class="invalid-feedback">Example invalid custom file feedback</div>
												</div>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col d-block text-right mt-3 mb-5">
<!--                                    <button type="button" class="btn btn-secondary mr-1" onclick="location.href='/mypage/onlineList'">취소</button>-->
                                    <button type="button" id="onlineBtn3" class="btn btn-info ml-1">작성 완료</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/mypage/online.js"></script>
</body>
</html>