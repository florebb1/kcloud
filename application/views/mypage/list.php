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
                        <li class="breadcrumb-item active" aria-current="page">온라인 신청 목록</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
                <div class="d-flex">
                    <div class="col-6 mb-2 align-self-center">Total 10건</div>
                    <div class="col-6 mb-2 text-right p-0">
                        <button class="btn btn-primary" onclick="location.href='/mypage/online'">신청서 작성</button>
                    </div>
                </div>
                <table class="table table-hover border-bottom">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                        <col style="width:120px;">
                        <col style="width:100px;">
                        <col style="width:140px;">
                    </colgroup>
                    <thead>
                    <tr class="table-active">
                        <th scope="col">No.</th>
                        <th scope="col">제목</th>
                        <th scope="col">글쓴이</th>
                        <th scope="col">조회</th>
                        <th scope="col">날짜</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- 게시물 있을시 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                    <!-- 게시물이 없을시 -->
                    <tr>
                        <th colspan="5" scope="row">
                            <div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div>
                        </th>
                    </tr>
                    </tbody>
                </table>


                <nav class="d-flex justify-content-between mt-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="pe-7s-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div>
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
                    </div>
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