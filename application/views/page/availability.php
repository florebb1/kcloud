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
			<div class="p-5">가용성</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">검증기준</a></li>
							<li class="breadcrumb-item active" aria-current="page">가용성</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row">
				<div class="col">





<div class="contentview">

				

<h1 class="t_center">가용성</h1>
<ul class="basic">
	<li>클라우드서비스의 가용성(Availability)은 서비스가 장애 없이 정상적으로 운영되는 능력을 말한다
		<ul class="basic2">
			<li>클라우드서비스의 정상적인 운영은 서비스 접근성과 적절한 응답시간이 보장되며, 유효한 서비스 요청에 대해 오류 없이 운영되는 것을 말한다. </li>
		</ul>
	</li>
	<li>클라우드서비스 제공자는 가용성을 측정하여 수준과 목표를 제시함으로써 서비스 지속성을 보장하고, 서비스 이용자에게 서비스 중단에 대한 불안을 최소화하여 서비스에 대한 신뢰성을 확보할 수 있다. </li>
</ul>
<hr>
<h2 class="red">가용률</h2>
<ul class="basic">
	<li>가용률은 정해진 서비스 운영 시간(예정된 가동시간) 대비 클라우드서비스에 접속이 가능한 시간(실제 가동시간)의 비율을 말한다.</li>
	<li>클라우드서비스를 대상으로 서비스가 장애 없이 지속되는지를 확인하고, 가용률을 관리함으로써 이용자에게 서비스 지속성에 대한 신뢰성을 향상시키고, SLA 준수여부를 확인할 수 있다.  </li>
	<li>가용률은 다음과 같은 점검항목을 통해 확인할 수 있다.</li>
</ul>
<h3 class="t_center">&lt;표 1-1. 「가용률」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질<br>성능</th>
	</tr>
	<tr>
		<td rowspan="3" class="border_none">가용성</td>
		<td rowspan="3">가용률</td>
		<td>가용률 유지능력 </td>
		<td>가용률 보장을 위한 관리체계 및 운영정책</td>
		<td width="7%">●</td>
		<td width="7%"></td>
		<td>1.1</td>
	</tr>
	<tr>
		<td>가용성 모니터링 지원</td>
		<td>가용성 정보 제공을 위한 시스템 모니터링 기능</td>
		<td></td>
		<td>●</td>
		<td>1.2</td>
	</tr>
	<tr>
		<td>가용률 측정</td>
		<td>가용률 확인</td>
		<td></td>
		<td>●</td>
		<td>1.3</td>
	</tr>
</tbody></table>
<hr>

<!--1.1가용률 유지능력-->
<h3>1.1. 가용률 유지능력</h3>
<ul class="basic">
	<li>가용률 유지능력은 갑작스런 클라우드서비스의 장애로 인해 서비스가 중단되는 우려를 최소화하기 위해 가용률 기준을 제시하고, 이를 보장하기 위한 관리 정책·기술을 보유하고 있는 것을 말한다. 
	</li>
	<li>클라우드서비스 제공자는 서비스 가용률을 약정된 내용에 따라 상시적으로 제공하기 위해 제반 조치를 관리할 수 있다 </li>
</ul>
<hr>
<h3 class="t_center">&lt;「가용률 유지능력」점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
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
	<li>가용률 유지능력을 확인하기 위한 세부 점검항목은 다음과 같다.</li>
</ul>
<hr>
<h3 class="t_center">&lt;표 1-2.「가용률 유지능력」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="5" class="border_none">가용률<br>유지능력</th>
		<td>(1) 가용률 정책수립</td>
		<td class="t_left">클라우드서비스의 가용률 수준을 보장하기 위해 관리/운영에 필요한 사항들을 정의하여 정책을 수립하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 가용률 목표제시 <br>및 결과 통지</td>
		<td class="t_left">클라우드서비스 제공자는 이용자에게 서비스 가용률 수준을 사전에 제시하고, 주기적으로 가용률 수준을 알 수 있도록 관련 프로세스를 마련하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(3) 조직 및 책임 설정 </td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 가용률 수준을 주기적으로 이용자에게 알리기 위해 서비스 장애시간, 장애 발생 사유, 통지 인력·프로세스, 보고이력의 관리 등의 내용과 절차를 마련하여 계약서, 약관 또는 SLA에 반영하고 있는지 확인한다</td>
	</tr>
	<tr>
		<td>(4) 시스템 도입·관리</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 가용률 수준을 보장하기 위해 가상화, 분산 컴퓨팅 등의 적정한 클라우드 기술/소프트웨어 등을 도입하여 시스템을 구성하였는지 확인한다. 또한 장애에 대비하여 모니터링, 이중화, 유지/보수할 수 있도록 준비하고 있는지 확인한다.</td>
	</tr>
	<tr>
		<td>(5) 가용률 분석 예측, 개선 프로세스</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 가용률 한계에 대비하여 이를 예측/분석/개선하고, 필요한 기술 자료를 보유/관리하는지 확인한다.</td>
	</tr>
</tbody></table>
<hr>
<h3>① 가용률 정책수립</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 경영 목표를 고려하여 서비스의 가용률을 보장하기 위해 클라우드서비스의 가용률과 관련하여 운영에 필요한 사항들을 포함한 정책을 정의할 수 있다. 
	</li>
	<li>가용률 정책에는 물리적 자원의 보유 및 가상화 등 클라우드 관련 기술의 적용 현황과 클라우드서비스 운영에 필요한 SLA의 수립과 시행 절차, 서비스 장애 관리 절차, 클라우드서비스 제공을 위한 전산시설의 고도화 및 장비도입 계획과 시행절차, 유지보수 계획 및 절차 등이 포함 될 수 있다. </li>
</ul>
<hr>
<h3>② 가용률 목표제시 및 결과통지</h3>
<ul class="basic">
	<li>정전이나 내부 서버의 오작동 등과 같은 갑작스런 클라우드서비스의 장애로 인해 서비스가 중단되는 우려를 최소화하기 위해, 가용률·장애의 정의 및 책임 범위에 대해 명확히 정의한다.  
	</li>
	<li>클라우드 시스템의 유지/보수 등으로 인해 발생하는 예정된 장애 시간에 대해 원칙적으로 클라우드서비스 제공자는 서비스 이용자의 업무시간 내에 장애가 발생하지 않도록 예정된 장애시간을 제시하며, 장애 예정일로부터 사전에 서비스 이용자에게 예정된 장애시기·내용·대처 방법 및 조치 시간 등을 포함할 수 있다.</li>
	<li>클라우드서비스 제공자는 클라우드서비스의 가용률 수준을 주기적으로 이용자에게 알리기 위해 서비스 장애시간, 장애 발생 사유, 통지 인력·프로세스, 보고이력의 관리 등의 내용과 절차를 마련하여 계약서, 약관 또는 SLA에 반영할 수 있다.</li>
</ul>
<hr>
<h3>③ 조직 및 책임설정</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 목표한 클라우드서비스의 가용률 수준을 보장하기 위해 조직 또는 담당인력을 배치·운영한다. 가용률 담당 조직 또는 인력은 해당 직무 활동을 수행하고 검증하는 인력들로서 직무 역할, 책임, 권한, 상호 연관관계 및 타 업무와의 관계 등을 포함하여 정의할 수 있다. </li>
</ul>
<hr>
<h3>④ 시스템 도입·관리</h3>
<ul class="basic">
	<li>클라우드서비스는 가용률을 제공하기 위해 서버, 스토리지, 네트워크 등 전산 장비 및 모니터링 시스템을 구축·유지하며, 가상화, 분산 컴퓨팅, 자동화 기술 등의 클라우드서비스 관련 기술 및 솔루션을 확보하여 시스템을 구축·운영할 수 있다.</li>
	<li>클라우드서비스 장애가 발생하는 경우 서버 모니터링, 가상머신(VM) 단위 모니터링 등을 포함한 서비스 모니터링 기술을 확보하여 시스템을 구축할 수 있으며, 프로세서 상태, 메모리 및 CPU 부하율, 디스크 상태 등의 모니터링 검토 대상을 정의할 수 있다. </li>
	<li>클라우드서비스 장애가 발생하는 경우에 대비하여 이중화 시스템을 구축하기 위한 대상과 절차를 포함할 수 있다. </li>
</ul>
<hr>
<h3>⑤ 가용률 분석 예측, 개선 프로세스</h3>
<ul class="basic">
	<li>클라우드서비스의 가용률을 분석하고 예측하기 위한 방법과 절차 등을 포함한 분석·예측 검토 사항을 정의할 수 있으며, 이를 실행하기 위한 방법, 절차 및 보고체계 등을 운영할 수 있다.</li>
</ul>
<div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s21_img1.jpg" class="img-fluid"></div>

<!--1.2가용성 모니터링 지원-->
<hr>
<h3>1.2. 가용성 모니터링 지원</h3>
<ul class="basic">
	<li>가용성 모니터링은 클라우드서비스 및 시스템의 서비스 지속상태 확인을 위해 서비스 제공자 혹은 이용자에게 가용성 정보를 제공하는 것을 말하며, 이를 통해 현재 서비스 상태와 가용성 수준을 확인 할 수 있다
	</li>
	<li>가용성 모니터링을 통해 클라우드서비스 제공자는 현재의 운영 상태 및 잠재적인 문제를 미리 조치함으로써 가용성 수준을 유지·개선할 수 있고, 클라우드서비스 이용자는 가용성 수준에 대한 객관적인 정보를 제공받을 수 있다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;「가용성 모니터링 지원」 점검방법 &gt;</h3>
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
	<li>가용성 모니터링 지원을 확인하기 위한 세부 점검항목은 다음과 같다.</li>
</ul>
<hr>
<h3 class="t_center">&lt;표 1-3.「가용성 모니터링 지원」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="3" class="border_none">가용성<br>모니터링 지원</th>
		<td>(1) 가용성 모니터링 기능</td>
		<td class="t_left">가용성 측정 데이터 수집 및 분석 결과를 제공하는 도구의 제공 여부와 기능이 정상동작하는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 운영상태 로그 기능</td>
		<td class="t_left">모니터링 대상에 대한 운영상태를 기록하는 로그 기능의 제공 여부와 기능이 정상 동작하는지 확인한다.
</td>
	</tr>
	<tr>
		<td>(5) 장애 알림 기능</td>
		<td class="t_left">서비스 중단에 대한 알림 기능이 제공되는지 확인한다.</td>
	</tr>
</tbody></table>
<hr>
<h3>① 가용성 모니터링 기능</h3>
<ul class="basic">
	<li>클라우드서비스에 대한 가용성 모니터링은 클라우드서비스 제공자가 보유한 측정 도구를 통해 측정된 결과를 이용자에게 제공하거나 이용자가 측정도구를 설치하여 직접 모니터링할 수 있다.</li>
	<li>가용성 모니터링 기능을 통해 가상머신의 온·오프라인 상태, 서비스 장애 및 가용률 정보 등이 제공될 수 있으며, 모니터링에 대한 지원방법이나 제공되는 정보는 서비스 혹은 측정 도구에 따라 다를 수 있다. </li>
	<li>가용성 모니터링 결과를 기반으로 장애를 판단하고 서비스에 대한 장애 조치를 취할 수 있으므로 제공되는 모니터링 기능이 정확한 장애 및 상태 정보를 제공하는지 확인되어야 한다.</li>
</ul>
<hr>
<h3>② 운영상태 로그 기능</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 모니터링 대상이 되는 클라우드서비스 및 시스템에 대해 가용성을 관리하고, 장애에 대한 원인 분석을 위해 일정기간 운영상태에 대한 로그를 보유하고 관리해야 한다.</li>
	<li>클라우드서비스의 운영상태 로그는 가용성 분석 이외에 장애를 식별하고 원인 분석 등을 위한 유용한 정보로 활용될 수 있다.</li>
</ul>
<hr>
<h3>③ 장애 알림 기능</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 시스템 및 서비스의 중단 등으로 가용성에 영향을 미치는 장애가 발생하는 경우 즉시 이를 통지하여 조치를 취할 수 있도록 장애 알림 기능을 제공할 수 있다.</li>
	<li>클라우드서비스의 가용성 수준을 확보하기 위해 장애를 식별하여 자동으로 장애를 복구하는 기능을 제공할 수 있으며, 자동 복구가 안되는 경우에는 SMS, 이메일 통지 등을 통해 서비스 관리자에게 적시에 장애가 통보될 수 있도록 한다</li>
</ul>

<!--1.3 가용률 측정-->
<hr>
<h3>1.3.  가용률 측정</h3>
<ul class="basic">
	<li>가용률은 정해진 서비스 운영 시간(예정된 가동시간) 대비 클라우드서비스에 접속이 가능한 시간(실제 가동시간)의 비율을 가리키며, 가용률 측정을 통해서만 가용률을 확인하고 가용성을 보장할 수 있다.	</li>
	<li>클라우드서비스 제공자는 가용률 측정을 위한 세부적인 측정 방법 및 절차를 제시하고, 이에 따른 측정 결과를 제공할 수 있다. </li>
	<li>가용성에 대한 이용자 신뢰성 제공을 위해 가용률은 실시간으로 측정된 로그 정보를 기반으로 객관적이고 정량적으로 산정되어야 한다. </li>
</ul>
<hr>

<h3 class="t_center">&lt;「가용률 측정」 점검방법  &gt;</h3>
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
	<li>가용률 측정을 위한 절차별 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 1-4. 「가용률 측정」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="6" class="border_none">가용률 측정</th>
		<td>(1) 측정 절차</td>
		<td class="t_left">가용률 측정을 위한 절차를 확인한다.</td>
	</tr>
	<tr>
		<td>(2) 측정 대상 및 구간</td>
		<td class="t_left">가용률 측정 대상과 구간을 확인한다.</td>
	</tr>
	<tr>
		<td>(3) 측정 방법 및 도구</td>
		<td class="t_left">가용률 측정 방법 및 도구를 확인한다. </td>
	</tr>
	<tr>
		<td>(4) 측정 주기 및 기간</td>
		<td class="t_left">가용률 측정 주기 및 기간을 확인한다. </td>
	</tr>
	<tr>
		<td>(5) 측정 수행</td>
		<td class="t_left">가용률 측정절차, 방법 등에 따라 가용률을 측정하고 측정 결과를 확인한다.  </td>
	</tr>
	<tr>
		<td>(6) 가용률 산정방식</td>
		<td class="t_left">가용률 측정 데이터를 기반으로 산정방식에 따라 가용률을 산정하여 확인한다. </td>
	</tr>
</tbody></table>
<hr>
<h3>① 측정 절차</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 가용률 측정을 위한 세부적인 측정 방법 및 절차를 제시하고, 이에 따른 측정결과를 제공할 수 있다. </li>
	<li>가용률 측정을 위해 다음을 참고하여 세부적인 절차를 정할 수 있다.</li>
</ul>
<hr>
<div class="box2 t_center">
<h3 class="ex">[참고ㆍ예시]</h3>
<h3 class="t_center">&lt;가용률 측정 절차&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">단계</th>
		<th>주요 내용</th>
	</tr>	
	<tr>
		<td class="border_none">요구사항 분석</td>
		<td class="t_left">- 측정 대상 서비스 혹은 시스템 선정<br>- 측정 구간 결정</td>
	</tr>
	<tr>
		<td class="border_none">계획 수립</td>
		<td class="t_left">- 측정 방법 및 측정도구 결정<br>- 측정주기 및 측정기간 결정</td>
	</tr>
	<tr>
		<td class="border_none">측정환경 준비</td>
		<td class="t_left">- 측정을 위한 서비스 환경 준비<br>※ 실제 운영환경에서 측정이 어려운 경우, 시험환경 구축 필요<br>- 측정 도구 설치 및 정상 동작 확인</td>
	</tr>
	<tr>
		<td class="border_none">측정 수행 및 결과 분석</td>
		<td class="t_left">- 측정을 시작하여 예정된 종료시점까지 지속<br>※ 시험환경을 구축하여 측정하는 경우, 실 환경과 유사한 워크로드를 측정 대상 시스템에서 실행 후 측정<br>- 측정 데이터를 취합하여 결과 분석</td>
	</tr>
	<tr>
		<td class="border_none">가용률 산정</td>
		<td class="t_left">- 측정 결과를 기반으로 가용률 산정</td>
	</tr>
</tbody></table>
</div>
<hr>
<h3>② 측정 대상 및 구간</h3>
<ul class="basic">
	<li>가용률 측정 대상은 서비스 제공자가 서비스 이용자에게 제공하는 서비스 및 시스템이며, 측정 구간은 측정 대상과 측정을 시도하는 시스템 간의 구간을 말한다.</li>
	<li>클라우드서비스 제공자가 직접적으로 운영·관리하기 어려운 네트워크 상의 장애 등이 가용률에 미치는 영향을 최소화하기 위해 측정용 시스템을 1개 이상의 지역에 위치시키고, 모든 측정 결과가 서비스 불가로 판단되는 경우를 장애로 간주하여 가용률을 측정할 수 있다.</li>
</ul>

<hr>
<div class="box2 t_center">
<h3 class="ex">[참고ㆍ예시]</h3>
<h3 class="t_center">&lt;서비스 모델별 측정 대상&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">서비스</th>
		<th>측정 대상</th>
	</tr>	
	<tr>
		<td class="border_none">IaaS</td>
		<td class="t_left">- 가상머신 인스턴스 서비스 / - IaaS 서비스 운영지원 웹페이지 / - 클라우드 스토리지 서비스</td>
	</tr>
	<tr>
		<td class="border_none">PaaS</td>
		<td class="t_left">- 서비스 플랫폼 / - PaaS 서비스 운영지원 웹페이지</td>
	</tr>
	<tr>
		<td class="border_none">SaaS</td>
		<td class="t_left">- 서비스 애플리케이션 / - SaaS 서비스 운영지원 웹페이지</td>
	</tr>
</tbody></table>
※ 각 서비스별 운영지원 웹페이지는 서비스 이용자가 웹UI로 제공받는 서비스의 상태를 확인하고 서비스를 추가, 삭제할 수 있도록 지원하는 대시보드 등의 형태로 제공되는 웹페이지를 말한다.
</div>
<hr>
<h3>③ 측정 방법 및 도구</h3>
<ul class="basic">
	<li>클라우드서비스에 대한 가용률은 서비스 접근 상태 등을 지속적으로 측정함으로써 확인이 가능하다</li>
	<li>가용률 측정도구는 클라우드서비스 제공자가 제공하는 측정용 SW를 이용하거나 ping, nc(netcat) 등 OS에서 제공하는 도구를 통해 측정할 수 있다. </li>
	<li>제시된 측정 방법은 IaaS, PaaS, SaaS에 대해 모두 적용이 가능하나 서비스 접근 방식(웹접근, SSH 등)에 따라 측정 방법이 적용되지 않을 수도 있으므로, 서비스 제공 형태를 고려하여 정할 수 있다.</li>
	<h4 class="red">클라우드서비스 접근성 분석을 통한 가용률 측정</h4>
	<ul class="none">
		<li>ⓐ 시스템 가용성 체크
			<ul class="basic2">
				<li>클라우드서비스에 접근하기 위해 이용자에게 개방되어 있는 DNS 혹은 IP로 시스템 접근이 가능한지를 지속적으로 측정하여 가용성을 확인할 수 있다. </li>
				<li>시스템의 접근성을 확인하는 가장 일반적이며 오버헤드가 없는 실행 방법은 ICMP(Internet Control Message Protocol, 인터넷 제어 메시지 프로토콜) 통신규약(RFC792 표준)을 따르는 ping 프로그램 등을 통해 지속적으로 대상 시스템에 접근을 시도해보는 것이다.<br>
				※ Ping을 통해 측정하기 위해서는 대상 서버의 방화벽 등에서 ICMP 프로토콜을 허용해 주어야 정상적인 측정이 가능하다. </li>
				<li>장애 판단은 Ping의 응답 결과에 오류가 있으면 시스템 장애로 판단한다.</li>
			</ul>
			<br>
			<div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s21_img2.jpg" class="img-fluid"></div>
		</li>
		<li>ⓑ 서비스(포트) 가용성 체크
			<ul class="basic2">
				<li> 클라우드서비스에 접근하기 위해 이용자에게 개방되어 있는 DNS 혹은 IP와 포트로 서비스 접근이 가능한지를 지속적으로 측정하여 가용성을 확인할 수 있다. 시스템 접근성 뿐만 아니라 실제 이용자의 요청을 받아들일 수 있는 서비스 대기상태인지를 확인할 수 있다. </li>
				<li> 클라우드서비스 상에서 이용자의 요청을 받아들이기 위해 대기하고 있는 서비스 포트로 접근을 시도함으로써 인터넷 프로토콜의 전송계층(Layer 4)을 통해 대상 서비스가 이용자 요청을 받아들일 수 있는 상태인지 확인할 수 있다. </li>
				<li>장애 판단은 포트 접속이 안되거나 응답에 오류가 있으면 서비스 장애로 판단한다.</li>
			</ul>
			<br>
			<div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s21_img3.jpg" class="img-fluid"></div>
		</li>
		<li>ⓒ 웹사이트(URL) 가용성 체크
			<ul class="basic2">
				<li>클라우드서비스 이용자가 서비스를 제공받기 위해 접근하는 웹사이트에 오류 없이 접근이 가능한지를 지속적으로 측정하여 가용성을 확인할 수 있다. </li>
				<li>장애 판단은 웹사이트로 접근이 안되거나 HTTP 상태코드가 오류코드를 포함하는 경우를 서비스 장애로 판단한다</li>
			</ul>
			<br>
			<div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s21_img4.jpg" class="img-fluid"></div>
		</li>
	</ul>
	<hr>	
	<h4 class="red">운영환경의 장애 로그 분석을 통한 가용률 측정</h4>
	<ul class="none">
		<li>ⓐ 클라우드서비스 및 시스템에 발생하는 장애에 대한 로그가 가능한 경우, 측정 기간 동안의 로그를 수집 분석하여 가용성을 확인할 수 있다.</li>
		<li>ⓑ 운영환경의 로그에 서비스 상태가 정확하게 기록되어 있어야 하며, 분석을 위해 로그 형식이 가능한 표준형식을 따르도록 해야 한다. </li>
		<li>ⓒ 가용률 측정을 위해서는 별도의 로그 분석과 필요 데이터를 추출하는 작업이 선행되어야 하며, 별도의 로그 분석도구를 이용할 수 있다. </li>
		<li>ⓓ 장애 판단은 사전에 정의한 장애에 해당하는 로그를 확인하여 장애로 판단한다. </li>
	</ul>
	<hr>	
	<h4 class="red">서비스 품질(정확성) 분석을 통한 가용률 측정</h4>
	<ul class="none">
		<li>ⓐ 클라우드서비스는 이용자의 요청에 대해 의도한 기능을 정확하게 수행하고 결과를 제한된 시간내에 제공하여야 한다. 서비스의 주요 기능에 대해 오류가 있는 경우는 이용자가 서비스를 지속적으로 이용하지 못하는 장애 상황과 동일하다. </li>
		<li>ⓑ 서비스의 정확성 분석을 통한 가용률 측정은 이용자의 전체 서비스 요청한 수 대비 제한된 시간내에 오류가 없는 정확한 결과를 응답받은 수의 비율로 측정할 수 있다.</li>
		<li>ⓒ 장애 판단은 서비스 결과에 대해 다음 사항을 분석하여 판단할 수 있다.<br>
		- 요청한 서비스의 부재<br>
		- 오류를 포함하거나 잘못된 응답 결과<br>
		- 제한된 시간을 초과하는 응답 등</li>
		<li>ⓓ 서비스 기능에 대한 품질 측면의 가용성은 서비스 접근성이 기본적으로 수반되어야 하며, 클라우드서비스 제공자는 요청한 서비스 기능에 대한 처리결과가 정상적이지 않은 상황을 장애로 인식하고 지속적으로 개선해 나감으로써 고품질의 클라우드서비스를 제공할 수 있다. </li>
	</ul>
		<br>
		<div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s21_img5.jpg" class="img-fluid"></div>
</ul>


<hr>
<h3>④ 측정 주기 및 기간</h3>
<ul class="basic">
	<li>클라우드서비스의 가용률 측정 주기는 대상 시스템 및 서비스 특성에 따라 정할 수 있다. 가용성에 대한 객관성과 신뢰성을 확보하기 위해서는 지속적으로 가용성이 측정되어야 한다.<br> - 가용성 측정주기는 대상 클라우드서비스의 상태를 1회 측정하는 간격이다.</li>
	<li>측정주기가 길면 측정직후와 다음 측정직전에 발생한 서비스 장애를 식별하기 어려울 수 있고, 측정주기가 짧으면 서비스 부하를 발생시킬 수 있으므로 서비스 특성을 고려하여 측정주기를 정할 수 있다.</li>
</ul>
<hr>
<div class="box2 t_center">
<h3 class="ex">[참고ㆍ예시]</h3>
<h3 class="t_center">&lt;측정주기 및 기간&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">단계</th>
		<th>주요 내용</th>
	</tr>	
	<tr>
		<td class="border_none">측정 주기</td>
		<td class="t_left">- 1분 간격, 5분 간격, 10분 간격 등</td>
	</tr>
	<tr>
		<td class="border_none">측정 기간</td>
		<td class="t_left">- 1일(24시간), 일주일(7일), 30일, 6개월, 1년 등</td>
	</tr>
</tbody></table>
</div>

<hr>
<h3>⑤ 측정 수행</h3>
<ul class="basic">
	<li>가용률 측정 방법 및 절차 등에 따라 실제 가용률을 측정한다. </li>
	<li>실제 가용률 측정을 시작하기 전에 해당 서비스가 정상적으로 서비스 되는지 확인하고, 방화벽을 통해 통신 포트 혹은 프로토콜이 허용되도록 설정한다. </li>
	<li>사전에 의도한 가용률 측정기간이 끝나면, 측정 결과가 올바른지 확인 절차를 거친 후에 측정결과를 분석하여 가용률을 산정한다. </li>
	<li>시험환경을 구축하여 측정하는 경우, 실제 서비스 환경과 유사한 환경에서의 측정이 될 수 있도록 서비스 제공자와 협의하여 워크로드를 측정대상 시스템에 실행 후 측정할 수 있다.  </li>
</ul>
<hr>
<h3>⑥ 가용률 산정 방식</h3>
<ul class="basic">
	<li>가용률 산정은 측정 방식과 측정결과 데이터를 기반으로 아래 산정식 중 적용이 가능한 방식을 선정하여 산출한다.
	<br>- 클라우드서비스의 정해진 운영 시간(예정된 가동시간) 대비 클라우드서비스에 접속이 가능한 시간(실제 가동시간)의 비율(%) 표시<br>
		<img src="/assets/images/img/s21_img6.jpg" class="img-fluid"><br><br>- 클라우드서비스 대상 시스템의 평균고장간격(MTBF)과 평균복구시간(MTTR)의 합 대비 평균 고장간격(MTBF)의 비율(%) 표시<br><img src="/assets/images/img/s21_img7.jpg" class="img-fluid"><br><br>- 클라우드서비스 이용자가 서비스를 요청한 총 횟수 대비 성공적으로 서비스를 이용한 총 횟수의 비율(%)로 표시<br><img src="/assets/images/img/s21_img8.jpg" class="img-fluid">
	</li>
</ul>
<hr>
<div class="box2 t_center">
<h3 class="ex">[참고ㆍ예시]</h3>
<ul class="basic t_left">
	<li>가용률 표시 : 100%, 99.9999%, 99.9%</li>
	<li>가용률에 따른 서비스 불능 시간</li>
</ul>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">가용률</th>
		<th>연간 서비스불능시간</th>
		<th>월간 서비스불능시간</th>
		<th>주간 서비스불능시간</th>
	</tr>	
	<tr>
		<td class="border_none">99.9999%</td>
		<td>31.50초</td>
		<td>2.59초</td>
		<td>0.605초</td>
	</tr>
	<tr>
		<td class="border_none">99.999%</td>
		<td>5.26분</td>
		<td>25.9초</td>
		<td>6.05초</td>
	</tr>
	<tr>
		<td class="border_none">99.99%</td>
		<td>52.56분</td>
		<td>4.32분</td>
		<td>1.01분</td>
	</tr>
	<tr>
		<td class="border_none">99.9%</td>
		<td>8.76시간</td>
		<td>43.8분</td>
		<td>10.1분</td>
	</tr>
	<tr>
		<td class="border_none">99%</td>
		<td>3.65일</td>
		<td>7.2시간</td>
		<td>1.68시간</td>
	</tr>
</tbody></table>
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