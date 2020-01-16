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
                        <li class="breadcrumb-item"><a href="#">성능 모니터</a></li>
                        <li class="breadcrumb-item active" aria-current="page">로그 상세</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
                <div class="row mb-2">
                    <div class="col-6"><h4>이벤트 알림 로그 상세</h4></div>
                    <div class="col-6 text-right">
                        <select class="custom-select w-25" id="inputGroupSelect02">
                            <option value="5" selected>5개씩 보기</option>
                            <option value="10">10개씩 보기</option>
                            <option value="20">20개씩 보기</option>
                            <option value="50">50개씩 보기</option>
                        </select>
                        <button type="button" class="btn btn-secondary" onclick="history.back()">돌아가기</button>
                    </div>
                </div>
                <table class="table table-hover border-bottom">
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:20%;">
                        <col>
                    </colgroup>
                    <thead>
                    <tr class="table-active">
                        <th scope="col">No.</th>
                        <th scope="col">발송 일자</th>
                        <th scope="col">이벤트 알림 내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- 게시물 있을시 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>WEB01 CPU Interruption 임계치 초과 <span class="text-danger px-2">New</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>WEB01 CPU Interruption 임계치 초과</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>WEB01 CPU Interruption 임계치 초과</td>
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
        <hr>
        <div class="row mb-5">
            <div class="col">
                <div class="row mb-2">
                    <div class="col-6"><h4>경고 로그 상세</h4></div>
                    <div class="col-6 text-right">
                        <select class="custom-select w-25" id="inputGroupSelect02">
                            <option value="5" selected>5개씩 보기</option>
                            <option value="10">10개씩 보기</option>
                            <option value="20">20개씩 보기</option>
                            <option value="50">50개씩 보기</option>
                        </select>
                        <button type="button" class="btn btn-secondary" onclick="history.back()">돌아가기</button>
                    </div>
                </div>
                <table class="table table-hover border-bottom">
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:20%;">
                        <col>
                    </colgroup>
                    <thead>
                    <tr class="table-active">
                        <th scope="col">No.</th>
                        <th scope="col">발송 일자</th>
                        <th scope="col">경고 알림 내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- 게시물 있을시 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory <span class="text-danger px-2">New</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>2019-06-10 13:10 21</td>
                        <td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory</td>
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
</body>
</html>