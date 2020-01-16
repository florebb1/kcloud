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
                        <li class="breadcrumb-item active" aria-current="page">취약점 보고서</li>
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
<!--                        <a class="nav-link active" href="/mypage/report">취약점 <br class="m-br">보고서</a>-->
<!--                    </li>-->
                    <li class="nav-item">
							<a class="nav-link" href="/mypage/confirm">확인<br class="m-br">현황</a>
						</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mypage/qna">문의<br class="m-br">하기</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
                <select class="custom-select w-25 mb-3" id="inputGroupSelect02">
                    <option value="5" selected>5개씩 보기</option>
                    <option value="10">10개씩 보기</option>
                    <option value="20">20개씩 보기</option>
                    <option value="50">50개씩 보기</option>
                </select>
                <table class="table table-hover border-bottom">
                    <colgroup>
                        <col style="width:10%;">
                        <col>
                        <col style="width:20%;">
                        <col style="width:10%;">
                    </colgroup>
                    <thead>
                        <tr class="table-active">
                            <th scope="col">No.</th>
                            <th scope="col">항목</th>
                            <th scope="col">점검 일자</th>
                            <th scope="col">보고서</th>
                        </tr>
                    </thead>
                        <tbody>
                        <!-- 게시물 있을시 -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Hostname1의 취약점 점검 결과 보고서</td>
                            <td>2019-06-10</td>
                            <td><img src="/assets/images/icon/file.png" class="w-75" onclick="window.open('http://www.naver.com')"></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Hostname1의 취약점 점검 결과 보고서</td>
                            <td>2019-06-10</td>
                            <td><a><img src="/assets/images/icon/file.png" class="w-75"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Hostname1의 취약점 점검 결과 보고서</td>
                            <td>2019-06-10</td>
                            <td><a><img src="/assets/images/icon/file.png" class="w-75"></a></td>
                        </tr>
                        <!-- 게시물이 없을시 -->
                        <tr>
                            <th colspan="5" scope="row">
                                <div class="bbs-none d-flex justify-content-center align-items-center">로그 기록이 없습니다.</div>
                            </th>
                        </tr>
                    </tbody>
                </table>

                <!-- event log pagenation -->
                <nav class="d-flex justify-content-center mt-4">
                    <ul class="pagination">
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
                </nav>


            </div>
        </div>
    </div>

</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<!--<script src="/assets/js/report.js"></script>-->
</body>
</html>