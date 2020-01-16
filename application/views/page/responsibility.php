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
			<div class="p-5">신뢰성</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">검증기준</a></li>
							<li class="breadcrumb-item active" aria-current="page">신뢰성</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row">
				<div class="col">



<div class="contentview">
				

<style>
	.mobile_table{display:none; }
@media screen and (max-width:700px) {
	.pc_table{display:none;}
	.mobile_table{display:block; }
}
</style>

<h1 class="t_center">신뢰성</h1>
<ul class="basic">
	<li>클라우드서비스의 신뢰성(Reliability)은 클라우스서비스 제공자가 클라우드서비스를 정상적으로 운영할 수 있는 능력을 의미한다.</li>
	<li>클라우드서비스 제공자는 서비스의 지속성을 보장하고 서비스 이용자에게 서비스 중간에 대한 불안을 최소화하기 위해 신뢰성을 확보해야 한다.</li>
</ul>
<hr>
<h2 class="red">1. 서비스 회복시간</h2>
<ul class="basic">
	<li>클라우드서비스의 서비스 회복시간은 클라우드서비스 고장과 정상 운영상태로의 복구 사이까지 걸린 시간이다. </li>
	<li>서비스 회복시간은 다음과 같은 점검항목을 통해 확인할 수 있다.</li>
</ul>
<h3 class="t_center">&lt;표 4-1. 「서비스 회복시간」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" colspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질성능</th>
	</tr>
	<tr>
		<td class="border_none">신뢰성</td>
		<td>서비스 회복시간</td>
		<td>서비스 회복시간</td>
		<td>서비스 중단시점부터<br>정상 상태로 회복까지 소요된 시간</td>
		<td></td>
		<td>●</td>
		<td>1.1</td>
	</tr>
</tbody></table>
<hr>

<!--1.1서비스 회복시간-->
<h3>1.1.  서비스 회복시간</h3>
<ul class="basic">
	<li>서비스 회복시간은 클라우드서비스가 중단된 시점부터 정상적인 상태로 회복되기까지 소요된 시간을 말한다.  
		<ul class="basic2">
			<li> 서비스가 중단된 시점을 장애로 판단하고, 장애 발생 시점부터 서비스의 복구 시점까지 소요되는 시간으로 측정될 수 있다. </li>
		</ul>
	</li>
	<li>서비스 회복시간을 측정하기 위해서는 서비스의 정상상태와 장애상태를 포함한 지속적인 가용상태를 측정하여 장애발생 시점부터 서비스 복구 시점을 파악함으로써 평균적으로 소요되는 서비스 회복시간을 산정할 수 있다. </li>
	<li>클라우드서비스의 회복시간은 정보시스템에서 기기 또는 시스템에 대해 장애가 발생한 시점부터 장애의 수리가 끝나 가동이 가능하게 된 시점까지의 평균 시간(MTTR, Mean Time To Repair)을 측정하는 방법을 적용할 수 있다.</li>
</ul>
<hr>
<h3 class="t_center">&lt;  「서비스 회복시간」 점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>서비스 회복시간을 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 4-2. 「서비스 회복시간」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="2" class="border_none">서비스<br>회복시간</th>
		<td>(1) 평균복구시간(MTTR)</td>
		<td class="t_left">총 장애시간과 장애횟수를 측정하여 평균복구시간을 산정하여 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 최대 서비스 복구시간(MTTSR)</td>
		<td class="t_left">정의된 시간 동안 서비스 복구시간 계산 중 가장 큰 값을 확인한다. </td>
	</tr>
</tbody></table>
<hr>
<h3>① 평균복구시간(MTTR, Mean Time To Repair)</h3>
<ul class="basic">
	<li>평균복구시간의 측정 방법은 가용률 측정(1.1.3 (1) ~ (5))을 참고하여 지속적으로 서비스 지속상태를 점검하여 측정결과에 따라 확인이 가능하다. </li>
	<li>지정된 기간의 서비스 지속상태를 측정한 후 측정된 총 고장횟수와 총 고장시간(총 장애시간)를 통해 아래 산식에 따라 평균복구시간을 산출한다.<br><img src="/assets/images/img/s24_img1.jpg" class="img-fluid"><br>※ 총 고장횟수는 측정실패가 지속적으로 발생하는 구간에 대해 1회 고장으로 판단하여 총 고장 횟수를 계산할 수 있으나 복합적인 장애 요인으로 장애가 연속하여 발생하는 경우에는 원인에 따라 고장횟수가 측정되어야 한다.</li>
</ul>
<hr>
<h3>② 최대 서비스 복구시간(MTTSR, Maximum Time to Service Recovery)</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 장애 식별 및 조치 후 서비스를 정상적으로 가동하기까지 소요되는 최대 서비스 복구시간을 측정하고 관리함으로써 사용자의 신뢰성을 향상시킬 수 있다.</li>
	<li>최대 서비스 복구시간은 가용률 측정(1.1.3 (1) ~ (5))을 참고하여 서비스의 중단된 시점부터 서비스가 복구되어 이용 가능한 시점까지의 시간들을 측정하고 이중 최대값을 통해 확인할 수 있다.</li>
</ul>

<!--백업 주기-->
<hr>
<h2 class="red">2. 백업 주기</h2>
<ul class="basic">
	<li>클라우드서비스의 백업 주기는 정기적으로 수행하는 데이터 백업의 주기를 말한다.  </li>	
</ul>
<hr>
<h3 class="t_center">&lt;  「리소스 확장」 점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" colspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질성능</th>
	</tr>
	<tr>
		<td class="border_none">신뢰성</td>
		<td>백업 주기</td>
		<td>주기적 백업 </td>
		<td>백업 시스템 확보 및 관리,<br>주기적 백업 시행 여부 확인</td>
		<td>●</td>
		<td></td>
		<td>2.1</td>
	</tr>
</tbody></table>
<hr>

<!--1.2 주기적 백업-->
<h3>1.2.   주기적 백업</h3>
<ul class="basic">
	<li>서비스 장애 및 오류, 잘못된 조작 등으로 인한 데이터나 정보의 손상에 대비하여, 서비스 제공자는 주기적(일/주/월 등)으로 백업을 할 수 있도록 시스템을 확보하고, 주기적으로 데이터의 백업을 수행한다. </li>
</ul>
<hr>
<h3 class="t_center">&lt; 「주기적 백업」 점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>주기적 백업을 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt; 표 4-4. 「주기적 백업」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">점검 항목</th>
		<th>세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<td rowspan="2" class="border_none">주기적 백업</td>
		<td>(1) 백업시스템 확보 및 관리</td>
		<td>클라우드서비스 제공자는 재해, 재난, 무단 접근 등 위협으로부터 이용자의 데이터를 안전하게 보호/관리하기 위해 백업 시스템을 확보/관리하는지 확인한다.</td>
	</tr>
	<tr>
		<td>(2) 주기적 백업</td>
		<td>데이터 관리 정책이나 계약 등에서 정하는 바에 따라 백업을 시행하고 있는지 확인한다. </td>
	</tr>
</tbody></table>

<hr>
<h3>① 백업시스템 확보 및 관리</h3>
<ul class="basic">
	<li>클라우드서비스 이용자의 데이터를 백업하기 위해 별도의 전산 시스템을 확보하여야 하며, 공식적이고 주기적으로 백업 데이터 목록 및 관리 현황을 관리할 수 있어야 한다. </li>
	<li>서비스 장애 등이 발생하는 경우, 백업 데이터를 신속하게 실행·복구할 수 있도록 주기적으로 테스트를 시행하여야 한다. </li>
</ul>
<hr>
<h3>② 주기적 백업</h3>
<ul class="basic">
	<li>데이터를 안전하게 보호·관리하기 위한 백업 시스템에 대한 모니터링, 백업 수행 절차 및 방법 등을 정의할 수 있어야 한다.</li>
</ul>
<hr>
<div class="box2 t_center">
	<h3 class="ex">[참고ㆍ예시]</h3>
	<ul class="basic t_left">
		<li>백업시스템 구축 절차<br><img src="/assets/images/img/s24_img2.jpg" class="img-fluid"></li>
		<li>백업시스템 운영현황
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
				<tbody><tr>
					<th rowspan="2" class="border_none">구분</th>
					<th colspan="2">유형</th>
					<th colspan="2">매체</th>
					<th rowspan="2">연결방식</th>
				</tr>	
				<tr>
					<th>Type</th>
					<th>Num.</th>
					<th>Slot</th>
					<th>Media</th>
				</tr>
				<tr>
					<td class="border_none">STK 7000e</td>
					<td>9940B</td>
					<td>5</td>
					<td>220</td>
					<td>220</td>
					<td>FC</td>
				</tr>
				<tr>
					<td class="border_none">STK L7000</td>
					<td>9840A</td>
					<td>6</td>
					<td>678</td>
					<td>520</td>
					<td>FC</td>
				</tr>
			</tbody></table><hr>
		</li>
		<li>백업 정책 수립
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
				<tbody><tr>
					<th class="border_none">백업대상</th>
					<th>백업주기</th>
					<th>백업방법</th>
					<th>매체관리</th>
				</tr>
				<tr>
					<td class="border_none ">- 데이터베이스 데이터 파일<br>- 데이터베이스 로그파일</td>
					<td>일간</td>
					<td>증분 백업</td>
					<td rowspan="3">주/월/연간 단위 백업보관<br>(월간단위 데이터 소산)</td>
				</tr>
				<tr>
					<td class="border_none">- 데이터베이스 환경 파일<br>- 데이터베이스 기타 파일</td>
					<td>일간, 월간, 연간</td>
					<td>전체 백업</td>
				</tr>
				<tr>
					<td class="border_none">- 운영파일<br>- 응용프로그램 파일<br>- 사용자 파일</td>
					<td>일간, 주간, 월간, 연간</td>
					<td>전체 백업, 증분 백업</td>
				</tr>
			</tbody></table><hr>
		</li>
		<li>백업 시스템 구성도<br><img src="/assets/images/img/s24_img3.jpg" class="img-fluid"></li>
	</ul>
</div>

<!--백업 주기-->
<hr>
<h2 class="red">3.백업 준수율</h2>
<ul class="basic">
	<li>클라우드서비스의 백업 준수율은 계획된 총 백업 건수(정기 및 수시 백업) 중 정상적으로 실시된 백업의 비율을 말한다.</li>	
</ul>
<hr>
<h3 class="t_center">&lt;  표 4-5. 「백업 준수율」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" colspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질성능</th>
	</tr>
	<tr>
		<td class="border_none">신뢰성</td>
		<td>백업 준수율</td>
		<td>백업시행 및 복구테스트 </td>
		<td>백업 준수율 및 백업 및<br>복원 기능 확인</td>
		<td>●</td>
		<td>●</td>
		<td>3.1</td>
	</tr>
</tbody></table>
<hr>

<!--1.3 백업시행 및 복구 테스트 -->
<h3>1.3.  백업시행 및 복구 테스트 </h3>
<ul class="basic">
	<li>클라우드서비스의 백업은 클라우드 장비의 고장 및 사고에 대비하여 파일이나 데이터를 별도의 장소 및 매체에 복사하는 것을 말하고, 복구는 백업된 데이터를 통해 백업 시점의 상태로 서비스 혹은 시스템을 회복하는 것을 말한다. </li>
	<li>클라우드서비스는 이용자의 데이터를 외부 데이터 센터에 저장하는 만큼 데이터가 손상되거나 유실될 경우를 대비하여 이용자 데이터에 대한 주기적인 백업을 지원할 수 있어야 하며, 실제 데이터가 손실될 경우에는 백업된 데이터로부터 복구할 수 있어야 한다. </li>
	<li>클라우드서비스의 백업 및 복구 기능의 정확성을 위해 해당 기능은 사전에 검증된 백업 및 복구 도구를 사용해야 하며, 실제 서비스 환경에 적용되기 전에 테스트를 통해 검증되어야 한다. </li>
	<li>백업 및 복구 테스트는 실제 운영환경에 영향을 미치지 않도록 별도의 테스트 영역을 설정하여 테스트를 수행해야 한다. </li>
</ul>
<hr>
<h3 class="t_center">&lt; 「백업시행 및 복구테스트」 검증방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>백업시행 및 복구테스트를 확인하기 위한 세부 점검항목은 다음과 같다.  </li>
</ul>
<hr>
<h3 class="t_center">&lt; 표 4-6. 「백업시행 및 복구테스트」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">점검 항목</th>
		<th>세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<td rowspan="2" class="border_none">백업시행 및<br>복구테스트</td>
		<td>(1) 백업 테스트</td>
		<td>백업 요구사항에 따라 백업이 정상적으로 수행되었는지를 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 복구 테스트</td>
		<td>정상적으로 백업한 데이터 복구 시 정상적으로 복원되었는지를 확인한다.</td>
	</tr>
</tbody></table>

<hr>
<h3>① 백업 테스트</h3>
<ul class="basic">
	<li>백업 기능을 통해 데이터 및 시스템 등 백업 대상, 자동 백업 설정 등의 요구사항에 따라 올바르게 백업이 되는지 사전 백업 테스트를 수행한다.</li>
	<li>백업 중에 장애가 발생하거나 데이터 손상이 있는 경우에는 로그나 사용자 메시지 등을 통해 오류를 확인할 수 있는 방법이 제공하며, 백업 중 오류가 발견되면 다시 백업을 수행할 수 있도록 한다. </li>
</ul>
<hr>
<h3>② 복구 테스트</h3>
<ul class="basic">
	<li>복구 테스트는 정상적으로 백업한 데이터를 복구해봄으로써 정상적인 복구여부를 사전 복구 테스트를 통해 확인한다. </li>
	<li>정상 백업한 데이터 복구 중 오류가 발생한 경우에는 로그나 사용자 메시지 등을 통해 오류를 확인할 수 있는 방법을 제공한다. </li>
	<li>복구 테스트는 실제 운영환경에 영향을 미칠 수 있으므로 독립적인 테스트 영역에서 수행하며, 복원한 데이터가 백업 시점의 데이터와 일치하는지 복구 결과를 비교하여 확인할 수 있다.</li>
</ul>
<hr>
<h3 class="t_center">&lt;  「백업시행 및 복구테스트」 검증방법 &gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>백업시행 및 복구테스트를 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt; 표 4-7. 「백업시행 및 복구테스트」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">점검 항목</th>
		<th>세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<td rowspan="2" class="border_none">백업시행 및<br>복구테스트</td>
		<td>(1) 백업 준수율</td>
		<td>데이터 관리 정책이나 계약 등에서 정하는 바에 따라 백업을 시행하는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 주기적 데이터 백업<br> 및 복구 테스트</td>
		<td>서비스 장애 등이 발생하는 경우, 배업 데이터를 신속하게 실행/복구할 수 있도록 주기적으로 테스트를 하고 있는지 확인한다. 
</td>
	</tr>
</tbody></table>
<hr>
<h3>① 백업 준수율</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 수립한 데이터 관리 정책 및 이용자와의 계약, SLA 등에서 정하는 바에 따라 백업을 수행하며, 공식적이고 주기적인 백업 실시 결과에 대해 이력관리를 한다.</li>
</ul>
<hr>
<h3>② 주기적 데이터 백업 및 복구테스트</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 서비스의 신뢰성을 확보하기 위해 주기적으로 백업 데이터를 복구하기 위한 방법과 절차 등을 정의하고, 특정 기간 동안 일정 횟수의 복구 테스트를 실시하여 복구 가능 여부를 점검한다. </li>
</ul>


<!-- 백업 데이터 보관 기간-->
<hr>
<h2 class="red">4. 백업 데이터 보관 기간</h2>
<ul class="basic">
	<li>클라우드서비스의 백업 데이터를 보호·유지하는 기간을 말한다. </li>	
	<li>백업 데이터 보관 기간은 백업대상 데이터 용량과 함께 백업시스템의 용량을 산정하는 중요한 기준이 된다. 보관 기간은 데이터의 중요도에 따라 다르게 적용되는데, 각 기관별로 보유한 자료보존연한 등 시스템 외부적인 요인에 의해 결정될 수 있다. </li>	
	<li>백업 데이터 보관 기간은 다음과 같은 점검항목을 통해 확인할 수 있다. </li>	
</ul>
<hr>
<h3 class="t_center">&lt; 표 4-8. 「백업 데이터 보관 기간」 기준에 대한 평가기준&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" colspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질성능</th>
	</tr>
	<tr>
		<td class="border_none">신뢰성</td>
		<td>백업 데이터<br>보관 기간</td>
		<td>데이터 반환 및 폐기</td>
		<td>데이터 반환 및 폐기 정책의<br>수립 및 준수 여부</td>
		<td>●</td>
		<td></td>
		<td>4.1</td>
	</tr>
</tbody></table>
<hr>

<!--1.4  데이터 반환 및 폐기 -->
<h3>1.4.   데이터 반환 및 폐기 </h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 이용자의 데이터를 폐기하기 위한 정책을 수립하여야 하며, 주요내용으로는 폐기 범위, 절차, 방법, 시점 등을 포함할 수 있다.</li>
</ul>
<hr>
<h3 class="t_center">&lt; 「데이터 반환 및 폐기」 점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>데이터 반환 및 폐기를 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 4-9. 「데이터 반환 및 폐기」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
	<tbody><tr>
		<th class="border_none">점검 항목</th>
		<th>세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<td rowspan="2" class="border_none">데이터 반환 <br>및 폐기</td>
		<td>(1) 데이터 반환 정책</td>
		<td>클라우드서비스 이용자의 요청이 있거나, 또는 법령에서 정하는 경우 등에 대비하여 데이터를 반환하기 위한 정책을 수립하고, 이를 시행하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 데이터 폐기 정책</td>
		<td>클라우드서비스 이용자의 요청이 있거나, 또는 법령에서 정하는 경우 등에 대비하여 데이터를 폐기하기 위한 정책을 수립하고, 이를 시행하고 있는지 확인한다. </td>
	</tr>
</tbody></table>

<hr>
<h3>① 데이터 반환 정책</h3>
<ul class="basic">
	<li>클라우드서비스 이용자에게 데이터를 반환하기 위해 데이터 반환 절차 등을 포함한 정책을 수립·운영한다. </li>
</ul>
<hr>
<h3>② 데이터 폐기 정책</h3>
<ul class="basic">
	<li>데이터 폐기에 대한 범위, 절차, 시점, 방법 등이 포함된 정책을 수립·운영해야 하고, 폐기 내역 기록서 등을 통해 저장 매체의 폐기 기록을 관리한다. 또한, 즉시 폐기가 이루어지지 않을 경우 폐기시까지 데이터를 안전하게 보관할 수 있도록 한다.</li>
</ul>
<hr>
<div class="box2 t_center">
	<h3 class="ex">[참고ㆍ예시]</h3>
	<ul class="basic t_left">
		<li> 백업 요구사항
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center pc_table">
				<tbody><tr>
					<th rowspan="2" class="border_none">서버</th>
					<th colspan="9">백업요구사항</th>
					<th rowspan="2">비고</th>
				</tr>	
				<tr>
					<th>대상구분</th>
					<th>형식</th>
					<th>방식</th>
					<th>용량</th>
					<th>주기</th>
					<th>보관주기</th>
					<th>복구목표시간</th>
					<th>매체</th>
					<th>구분</th>
				</tr>
				<tr>
					<td rowspan="4" class="border_none">DB서버01<br>(신규)</td>
					<td>OS 및 주요파일</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>12GB</td>
					<td>월간, 수시</td>
					<td>3일</td>
					<td>1시간</td>
					<td>DAT</td>
					<td>수동</td>
					<td>script</td>
				</tr>
				<tr>
					<td>DBMS 엔진</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>38GB</td>
					<td>월간, 수시</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
					<td></td>
				</tr>
				<tr>
					<td>DB데이터</td>
					<td>Raw<br>device</td>
					<td>오프라인</td>
					<td>120GB</td>
					<td>일간</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
					<td></td>
				</tr>
				<tr>
					<td>DB 로그 데이터</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>38GB</td>
					<td>월간</td>
					<td>3주</td>
					<td>1시간</td>
					<td>LTI</td>
					<td>자동</td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="3" class="border_none">DB서버01<br>(기존)</td>
					<td>OS 및 주요파일</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>20GB</td>
					<td>일간</td>
					<td>3일</td>
					<td>1시간</td>
					<td>DAT</td>
					<td>수동</td>
					<td>script</td>
				</tr>
				<tr>
					<td>시스템<br>소프트웨어 엔진</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>35GB</td>
					<td>월간, 수시</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
					<td></td>
				</tr>
				<tr>
					<td>사용자 파일</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>35GB</td>
					<td>일간</td>
					<td>3주</td>
					<td>1시간</td>
					<td>LTO</td>
					<td>자동</td>
					<td></td>
				</tr>
			</tbody></table>			
		</li>
		<!--//모바일화면용-->
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center mobile_table">
				<tbody><tr>
					<th class="border_none" colspan="9">백업요구사항</th>
				</tr>					
				<tr>					
					<th colspan="9">서버 : DB서버01 (신규)</th>
				</tr>
				<tr>
					<th width="60px">대상구분</th>
					<th>형식</th>
					<th>방식</th>
					<th>용량</th>
					<th>주기</th>
					<th>보관주기</th>
					<th>복구목표시간</th>
					<th>매체</th>
					<th>구분</th>
				</tr>
				<tr>
					<td>OS 및 주요파일<span class="mobile_br" style="letter-spacing:-1.5px; color:#888;">비고:script</span></td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>12GB</td>
					<td>월간, 수시</td>
					<td>3일</td>
					<td>1시간</td>
					<td>DAT</td>
					<td>수동</td>
				</tr>
				<tr>
					<td>DBMS 엔진</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>38GB</td>
					<td>월간, 수시</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
				</tr>
				<tr>
					<td>DB데이터</td>
					<td>Raw<br>device</td>
					<td>오프라인</td>
					<td>120GB</td>
					<td>일간</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
				</tr>
				<tr>
					<td>DB 로그 데이터</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>38GB</td>
					<td>월간</td>
					<td>3주</td>
					<td>1시간</td>
					<td>LTI</td>
					<td>자동</td>
				</tr>				
				<tr>					
					<th colspan="9">서버 : DB서버01 (기존)</th>
				</tr>
				<tr>
					<td>OS 및 주요파일<span class="mobile_br" style="letter-spacing:-1.5px; color:#888;">비고:script</span></td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>20GB</td>
					<td>일간</td>
					<td>3일</td>
					<td>1시간</td>
					<td>DAT</td>
					<td>수동</td>
				</tr>
				<tr>
					<td>시스템<br>소프트웨어 엔진</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>35GB</td>
					<td>월간, 수시</td>
					<td>3주</td>
					<td>2시간</td>
					<td>LTO</td>
					<td>자동</td>
				</tr>
				<tr>
					<td>사용자 파일</td>
					<td>파일<br>시스템</td>
					<td>온라인</td>
					<td>35GB</td>
					<td>일간</td>
					<td>3주</td>
					<td>1시간</td>
					<td>LTO</td>
					<td>자동</td>
				</tr>
			</tbody></table>
			<!--모바일화면용//-->
	</ul>
</div></div>



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