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
        <div class="p-5">확인 현황 - 상세</div>
    </div>

    <div class="container">

        <div class="row mt-5">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">확인 현황</a></li>
                        <li class="breadcrumb-item active" aria-current="page">상세</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col contentview">
                <table class="table1 border-bottom border-dark border-top">
                    <colgroup>
                        <col style="width: 10%;">
                        <col style="width: 15%;">
                        <col style="width: 15%;">
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <tbody class="text-center">
                        <tr>
                            <td colspan="2" rowspan="3"><img src="/assets/images/icon/nipa.jpg"></td>
                            <th>회사명</th>
                            <td id="wr_subject"></td>
                            <th>서비스명</th>
                            <td id="wr_1"></td>
                        </tr>
                        <tr>
                            <th>서비스 유형</th>
                            <td id="wr_2"></td>
                            <th>대표자명</th>
                            <td id="wr_3"></td>
                        </tr>
                        <tr>
                            <th>서비스 신청 바로가기</th>
                            <td colspan="3">
                                <a href="http://www.emaintec.com" target="_blank" id="wr_link1" class="d-block"></a>
                                <a href="http://www.emaintec.com" target="_blank" id="wr_link2" class="d-block"></a>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2">담당자</th>
                            <th rowspan="2" id="wr_4"></th>
                            <th>성명</th>
                            <td colspan="3" id="wr_13"></td>
                        </tr>
                        <tr>
                            <th>연락처 / 이메일</th>
                            <td colspan="3" id="wr_15"></td>
                        </tr>
                        <tr>
                            <th>서비스개요</th>
                            <td colspan="5" class="text-left" id="wr_6"></td>
                        </tr>
                        <tr>
                            <th rowspan="3">확인서</th>
                            <th rowspan="3" id="wr_7"></th>
                            <th>발급번호</th>
                            <td colspan="3" id="wr_8"></td>
                        </tr>
                        <tr>
                            <th>발급일자</th>
                            <td colspan="3" id="wr_9"></td>
                        </tr>
                        <tr>
                            <th>발급기관</th>
                            <td id="wr_11">정보통신산업진흥원</td>
                            <th>첨부파일</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>주요기능</th>
                            <td colspan="5" class="text-left" id="wr_5"></td>
                        </tr>
                        <tr>
                            <th>특징 및 장점</th>
                            <td colspan="5" class="text-left" id="wr_content"></td>
                        </tr>
                        <tr>
                            <th>서비스<br>제공 사례</th>
                            <td colspan="5" class="text-left"></td>
                        </tr>
                    </tbody>
                </table>


                <nav class="d-flex mt-4 justify-content-end">
                    <button class="btn btn-secondary" type="button" onclick="history.back()">목록보기</button>
                </nav>


            </div>
        </div>
    </div>

</div>

<div class="footer white border-top">
    <?php $this->load->view('layout/front/footer'); ?>
</div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/quality/details.js"></script>
</body>
</html>