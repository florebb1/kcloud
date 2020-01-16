<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('/layout/admin/meta'); ?>
    <title><?php echo $title; ?></title>
    <style>
        /* 필수입력 */
        .required, textarea.required {background-image:url('/assets/images/icon/require.png')  !important;background-repeat:no-repeat   !important;background-position:right top  !important;}
    </style>
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
                    <li class="breadcrumb-item">확인 현황</li>
                    <li class="breadcrumb-item">확인 현황 및 분류</li>
                    <li class="breadcrumb-item active" aria-current="page">등록</li>
                </ol>
            </nav>

            <hr>

            <div class="row mb-5">
                <div class="col contentview">
                    <form id="editForm">
                        <input type="hidden" id="wr_id" name="wr_id">
                        <table class="table1 border bg-white">
                            <colgroup>
                                <col style="width:15%;">
                                <col style="width:15%;">
                                <col style="width:15%;">
                                <col style="width:20%;">
                                <col style="width:15%;">
                                <col style="width:15%;">
                            </colgroup>
                            <tbody class="text-center">
                                <tr>
                                    <td colspan="2" rowspan="3"><img src="/assets/images/icon/nipa.jpg"></td>
                                    <th>회사명</th>
                                    <td>
                                        <input type="text" id="wr_subject" name="wr_subject" class="form-control form-control-sm required" placeholder="회사명">
                                    </td>
                                    <th>서비스명</th>
                                    <td>
                                        <input type="text" id="wr_1" name="wr_1" class="form-control form-control-sm" placeholder="서비스명">
                                    </td>
                                </tr>
                                <tr>
                                    <th>서비스 유형</th>
                                    <td>
                                        <input type="text" id="wr_2" name="wr_2" class="form-control form-control-sm" placeholder="서비스명">
                                    </td>
                                    <th>대표자명</th>
                                    <td>
                                        <input type="text" id="wr_3" name="wr_3" class="form-control form-control-sm" placeholder="대표자명">
                                    </td>
                                </tr>
                                <tr>
                                    <th>서비스 신청 바로가기</th>
                                    <td colspan="3">
                                        <input type="text" id="wr_link1" name="wr_link1" class="form-control form-control-sm mb-1" placeholder="http://">
                                        <input type="text" id="wr_link2" name="wr_link2" class="form-control form-control-sm" placeholder="http://">
                                    </td>
                                </tr>
                                <tr>
                                    <th rowspan="2">담당자</th>
                                    <td rowspan="2">
                                        <input type="text" id="wr_4" name="wr_4" class="form-control form-control-sm" placeholder="담당자">
                                    </td>
                                    <th>성명</th>
                                    <td colspan="3">
                                        <input type="text" id="wr_13" name="wr_13" class="form-control form-control-sm" placeholder="성명">
                                    </td>
                                </tr>
                                <tr>
                                    <th>연락처 / 이메일</th>
                                    <td colspan="3">
                                        <input type="text" id="wr_15" name="wr_15" class="form-control form-control-sm" placeholder="연락처/이메일">
                                    </td>
                                </tr>
                                <tr>
                                    <th>서비스개요</th>
                                    <td colspan="5" class="text-left">
                                        <input type="text" id="wr_6" name="wr_6" class="form-control form-control-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <th rowspan="3">확인서</th>
                                    <th rowspan="3">
                                        <textarea class="form-control mb-0" id="wr_7" name="wr_7" rows="5"></textarea>
                                    </th>
                                    <th>발급번호</th>
                                    <td colspan="3">
                                        <input type="text" id="wr_8" name="wr_8" class="form-control form-control-sm" placeholder="발급번호">
                                    </td>
                                </tr>
                                <tr>
                                    <th>발급일자</th>
                                    <td colspan="3">
                                        <input type="text" id="wr_9" name="wr_9" class="form-control form-control-sm" placeholder="발급일자">
                                    </td>
                                </tr>
                                <tr>
                                    <th>발급기관</th>
                                    <td>
                                        <input type="text" id="wr_11" name="wr_11" class="form-control form-control-sm" placeholder="발급기관">
                                    </td>
                                    <th>첨부파일</th>
                                    <td>
                                        <input type="file" id="bf_file" name="bf_file[]">
                                    </td>
                                </tr>
                                <tr>
                                    <th>주요기능</th>
                                    <td colspan="5" class="text-left">
                                        <textarea id="wr_5" name="wr_5" class="form-control mb-0" rows="5"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>특징 및 장점</th>
                                    <td colspan="5" class="text-left">
                                        <textarea id="wr_content" name="wr_content" class="form-control mb-0" rows="5"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>서비스<br>제공 사례</th>
                                    <td colspan="5" class="text-left">
                                        <textarea id="wr_12" name="wr_12" class="form-control mb-0" rows="5"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>인증상태</th>
                                    <td colspan="5" class="text-left">
                                        <select id="wr_14" name="wr_14">
                                            <option value="유효">유효</option>
                                            <option value="무효">무효</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <button id="edtBtn" class="btn btn-primary" type="button">수정</button>
                            <button id="delBtn" class="btn btn-danger mr-1" type="button">삭제</button>
                        </div>
                        <div class="col-6 mt-3 text-right">
                            <button class="btn btn-secondary" type="button" onclick="history.back()">목록보기</button>
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
<script src="/assets/js/admin/confirm/write.js"></script>
</body>
</html>
