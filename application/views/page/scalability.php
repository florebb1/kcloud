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
			<div class="p-5">확장성</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">검증기준</a></li>
							<li class="breadcrumb-item active" aria-current="page">확장성</li>
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

<h1 class="t_center">확장성</h1>
<ul class="basic">
	<li>클라우드서비스의 확장성(Scalability)은 이용자의 요청에 따라 자원의 양을 할당할 수 있는 능력을 말한다. </li>
	<li>클라우드서비스 제공자는 서비스의 확장성을 보장하기 위해 적절한 기술 및 시스템을 유지하여야 한다. 이를 위해, 필요한 정책, 인적·물적 자원 등을 관리할 수 있다.</li>
</ul>
<hr>
<h2 class="red">확장성</h2>
<ul class="basic">
	<li>클라우드서비스의 확장성은 이용자가 증가하거나 서비스 기능이 추가되어 확장이 필요한 경우, 클라우드서비스가 정상적으로 유지될 수 있는 시스템 구조 혹은 확장요청 처리시간을 말한다. 
		<ul class="basic2">
			<li>서비스 처리와 관련된 자원(인스턴스)의 양이 증가할수록 서비스 처리 능력도 비례하여 증가할 수 있어야 한다.</li>
			<li>클라우드서비스 제공자는 제시된 시간 내에 서비스 확장이 완료될 수 있도록 지원해야 한다. </li>
		</ul>
	</li>
	<li>클라우드서비스는 사용되는 자원들을 유동적으로 관리하여 서비스 제공자 및 이용자에게 자원의 활용도를 높이는 이점을 제공한다. </li>
	<li>확장성은 다음과 같은 점검항목을 통해 확인할 수 있다.</li>
</ul>
<h3 class="t_center">&lt;표 3-1. 「확장성」 점검항목&gt;</h3>
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
		<td rowspan="3" class="border_none">확장성</td>
		<td rowspan="3">확장성</td>
		<td>확장성 지원능력</td>
		<td>확장성 보장을 위한 관리체계 및 운영정책</td>
		<td width="7%">●</td>
		<td width="7%"></td>
		<td>1.1</td>
	</tr>
	<tr>
		<td>리소스 확장</td>
		<td>수동/자동 리소스 확장 기능</td>
		<td></td>
		<td>●</td>
		<td>1.2</td>
	</tr>
	<tr>
		<td>확장요청 처리시간</td>
		<td>확장요청 처리시간 측정</td>
		<td></td>
		<td>●</td>
		<td>1.3</td>
	</tr>
</tbody></table>
<hr>

<!--1.1확장성 지원능력-->
<h3>1.1.  확장성 지원능력</h3>
<ul class="basic">
	<li>클라우드서비스 이용자가 필요한 경우, 언제든지 IT 자원(HW·SW 등)을 신속하게 확장·축소하여 제공할 수 있도록 하기 위한 관리 정책·기술을 보유하고 있는 것을 말한다. </li>
	<li>클라우드서비스의 안정성 및 지속성을 보장하기 위해, 사용자의 증가나 기능이 추가되어 확장이 필요한 경우 서비스 제공자는 서비스가 유지될 수 있도록 시스템 구조를 갖추고, 서비스 구조를 변경하는 경우 이용자에게 관련 프로세스를 알려줄 수 있다.</li>
</ul>
<hr>
<h3 class="t_center">&lt;  「확장성 지원능력」 점검방법&gt;</h3>
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
	<li>확장성 지원능력을 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 3-2. 「확장성 지원능력」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="5" class="border_none">확장성<br>지원 능력</th>
		<td>(1) 확장성 정책수립</td>
		<td class="t_left">클라우드서비스 제공자가 서비스의 확장성 수준을 보장하기 위해 서비스 지원범위, 시스템 구조, 이용량 예측, 인프라 확장계획 등을 포함한 확장성 정책을 수립하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 확장성 수준 제시</td>
		<td class="t_left">클라우드서비스 제공자는 이용자에게 서비스 확장성 수준을 사전에 제시하며, 이용자가 주기적으로 확장성 수준을 알 수 있도록 관련 프로세스를 마련하고 있는지 확인한다.  </td>
	</tr>
	<tr>
		<td>(3) 조직 및 책임 설정</td>
		<td class="t_left">클라우드서비스 제공자는 이용자에게 제시한 확장성 수준을 보장하기 위해 조직 및 인력을 적절히 배치하며, 해당 직무는 책임성 있게 수행하는지 확인한다. </td>
	</tr>
	<tr>
		<td>(4) 시스템 도입·관리</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 이용량에 따라 서비스의 중단 없이 자원을 동적으로 확장하거나 축소할 수 있도록 시스템을 구축하고 있는지 확인한다. 또한 이용량 변화에 신축적으로 대응할 수 있도록 모니터링, 유지/보수, 추가적인 물리적 자원 확보가 가능한지 확인한다.  </td>
	</tr>
	<tr>
		<td>(5) 확장성 분석 예측,<br> 개선 프로세스</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 확장성 한계에 대비하여 이를 예측/분석/개선하고, 필요한 기술 자료를 보유/관리하고 있는지 확인한다.  </td>
	</tr>
</tbody></table>
<hr>
<h3>① 확장성 정책 수립</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 경영목표를 고려하여 서비스의 확장성을 보장하기 위해 클라우드서비스의 확장성과 관련하여 운영에 필요한 사항들을 포함한 정책을 정의할 수 있다.  </li>
</ul>
<hr>
<h3>② 확장성 수준 제시</h3>
<ul class="basic">
	<li>클라우드서비스에서 제시하는 확장성 수준은 사전에 기본 계약, 이용 약관 또는 서비스 수준 협약(SLA) 등을 통해 제시한다. 확장성 수준은 최대 동시접속이용자 수, 최대 동시접속세션 수, 가상머신/스토리지/네트워크 용량 등을 적용하여 정의할 수 있다. </li>
	<li>클라우드서비스 제공자는 클라우드서비스의 확장성 수준을 주기적으로 이용자에게 알리기 위해 확장성 수준 현황, 통지 인력·프로세스, 보고 이력 관리 등의 내용과 절차를 마련할 수 있다. </li>
</ul>
<hr>
<h3>③ 조직 및 책임 설정</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 목표한 서비스의 확장성 수준을 보장하기 위해 조직 및 담당인력을 배치한다. 확장성 담당 조직 또는 담당인력은 해당 직무 활동을 수행하고 검증하는 인력들로서 직무 역할, 책임, 권한, 상호 연관관계 및 타 업무와의 관계 등을 포함하여 정의할 수 있다.  </li>
</ul>
<hr>
<h3>④ 시스템 도입 관리</h3>
<ul class="basic">
	<li>클라우드서비스의 이용량에 따라 서비스의 중단 없이 자원을 동적으로 확장하거나 축소할 수 있는 서버 가상화 또는 애플리케이션 가상화의 방법, 절차, 실제 테스트 방법 등을 명확하게 정의한다. 또한, 서비스의 이용량에 따라 동적으로 확장하거나 축소하기 위한 시스템 아키텍처를 구성한다. 	</li>
	<li>클라우드서비스 제공자는 클라우드서비스의 이용량을 실시간으로 모니터링 할 수 있는 모니터링 기술을 도입·개발하여 모니터링 시스템을 구축하고, 이를 위해 동시접속이용자 수, 동시접속세션 수 등과 같은 모니터링 검토 대상을 포함하여 모니터링 방법, 절차를 정의할 수 있다.</li>
</ul>
<hr>
<h3>⑤ 확장성 분석 예측, 개선 프로세스</h3>
<ul class="basic">
	<li>클라우드서비스의 확장성 수준을 분석하고 예측하기 위한 동시접속이용자 수의 증가율, 동시접속 세션 수의 증가율 등을 포함한 분석·예측 사항을 정의하고, 이를 실행하기 위한 방법, 절차 및 보고체계 등을 갖출 수 있다.
	<hr>
		<div class="box2 t_center">
		<h3 class="ex">[참고ㆍ예시]</h3>
		<ul class="basic t_left">
			<li>확장성 수준 제시
				<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
					<tbody><tr>
						<th class="border_none">확장성 상세내용</th>
						<th>처리방식</th>
					</tr>	
					<tr>
						<td class="border_none">운영 중 CPU 확장</td>
						<td>On-Demand</td>
					</tr>
					<tr>
						<td class="border_none">운영 중 메모리 확장</td>
						<td>On-Demand</td>
					</tr>
					<tr>
						<td class="border_none">운영 중 스토리지 확장</td>
						<td>On-Demand</td>
					</tr>
					<tr>
						<td class="border_none">확장한 사양의 축소</td>
						<td>작업 의뢰</td>
					</tr>
				</tbody></table>
				<hr>
			</li>
			<li>확장성 분석 및 활용방안
				<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
					<tbody><tr>
						<th class="border_none">대상</th>
						<th>항목</th>
						<th>실시간</th>
						<th>단기</th>
						<th>중장기</th>
					</tr>	
					<tr>
						<td rowspan="7" class="border_none">서버</td>
						<td>CPU</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>메모리</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>내장디스크</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>네트워크연결상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>파일시스템</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>로그파일</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>주요시스템프로세스</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td rowspan="7" class="border_none">네트워크</td>
						<td>네트워크장비 연결상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>네트워크 포트 상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>대역폭 사용율</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>네트워크 Collision율</td>
						<td></td>
						<td>장애 예방 및 제거</td>
						<td></td>
					</tr>
					<tr>
						<td>네트워크 I/O 에러율</td>
						<td></td>
						<td>장애 예방 및 제거</td>
						<td></td>
					</tr>
					<tr>
						<td>구간별 응답시간</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>초당 패킷율</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td rowspan="4" class="border_none">스토리</td>
						<td>사용률 및 가용율</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>평균 응답시간</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>캐시 Hit Ratio</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>초당 디스크 I/O </td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td rowspan="7" class="border_none">DBMS</td>
						<td>엔진상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>DB I/O</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>가용테이블 공간</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>가용 로그 저장 공간</td>
						<td></td>
						<td>튜닝</td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>DBMS 로그</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td>용량증설</td>
					</tr>
					<tr>
						<td>메모리 적중률</td>
						<td>장애 예방 및 제거</td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>평균 Lock 대기율</td>
						<td>장애 예방 및 제거</td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td rowspan="4" class="border_none">미들웨어</td>
						<td>엔진상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>서비스 큐잉 상태</td>
						<td>장애 예방 및 제거</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>초당 처리 건수</td>
						<td></td>
						<td>튜닝</td>
						<td></td>
					</tr>
					<tr>
						<td>에러 및 ABEND 로그</td>
						<td>장애 예방 및 제거</td>
						<td>튜닝</td>
						<td></td>
					</tr>
				</tbody></table>
			</li>
		</ul>
		</div>
	</li>
</ul>
<!--1.2리소스 확장-->
<hr>
<h3>1.2. 리소스 확장</h3>
<ul class="basic">
	<li>리소스 확장은 사용량 증가, 이용자 요구 등에 따라 컴퓨팅 자원을 추가하는 것뿐만 아니라, 컴퓨팅자원이 더 이상 필요하지 않을 경우 해제되는 기능도 포함한다. </li>
	<li>리소스 확장은 수동 또는 자동으로 수행될 수 있다. 
		<ul class="basic2">
			<li>수동 확장 : 이용자로부터 원하는 리소스의 값(CPU 사양, 인스턴스 수 등)을 입력받아 리소스를 확장하는 방법이다. </li>
			<li>자동 확장 : 예약 시간, 임계 사용량 초과 등의 확장 이벤트 발생 시, 설정된 정책에 따라 리소스를 확장하는 방법이다. </li>
		</ul>
	</li>
	<li>클라우드서비스 확장성 수립을 위해 사용자에게 정확한 정보를 전달하고 있는지, 확장 기능이 정확히 동작하는지 등을 점검할 수 있다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;  「리소스 확장」 점검방법&gt;</h3>
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
	<li>리소스 확장을 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 3-3. 「리소스 확장」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="4" class="border_none">리소스<br>확장</th>
		<td>(1) 확장 정보 제공 정확성</td>
		<td class="t_left">서비스 이용자들에게 서비스 확장에 대한 정보를 제공하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 임계치 설정 및 알람 기능</td>
		<td class="t_left">임계치 설정 또는 알람 기능이 정상적으로 동작하는지 확인한다.</td>
	</tr>
	<tr>
		<td>(3) 수동/자동 리소스 확장</td>
		<td class="t_left">수동 또는 자동 리소스 변경 기능이 정상적으로 동작하는지 확인한다. </td>
	</tr>
	<tr>
		<td>(4) 서비스 지속 및 성능 증가 여부</td>
		<td class="t_left">리소스 변경 후에도 동일한 서비스가 유지되는지, 서비스 부하가 증가함에 따라 서비스 처리량(성능)이 증가하는지 확인한다.</td>
	</tr>
</tbody></table>
<hr>
<h3>① 확장 정보 제공 정확성</h3>
<ul class="basic">
	<li>잘못된 정보 제공을 통한 이용자 혼란을 방지하기 위해, 리소스 확장을 위해 필요한 정보가 정확히 제공되는지, 오류 및 문제 상황 시 적절한 메시지가 제공되는지 등을 점검할 수 있다. </li>
</ul>
<hr>
<h3>② 임계치 설정 및 알람 기능</h3>
<ul class="basic">
	<li>이용자는 리소스 확장 여부를 결정하기 위해 현재의 서비스 이용량을 확인할 수 있으며, 임계치 이상의 부하 발생 시 알람(Auto-scaling event, mail, SMS 등)을 설정할 수 있다.<br>※ 서비스 이용량 확인을 위한 모니터링 항목 예: CPU Utilization, Disk Read/Write, Network In/Out, Status check Fail, 동시 접속자 수, 세션 수 등 </li>
	<li>임계치 설정 및 알람 기능 동작의 정확성 확인을 위해 설정된 임계치 이상의 부하량을 발생시키고, 설정된 알람이 발생하는지 점검할 수 있다.<br>
※ 부하 발생 툴 : Webserver Stress Tool, HeavyLoad, Apache Bench(ab), nGrider, Apache JMeter, HP LoadRunner, Silk Performer 등</li>
</ul>
<hr>
<h3>③ 수동/자동 리소스 확장</h3>
<ul class="basic">
	<li>IaaS, PaaS는 이용자가 수동으로 리소스의 사양을 변경하거나, 설정된 정책에 따라 리소스를 자동으로 변경할 수 있도록 지원하여 서비스 사용량 증가 시에도 안정적인 서비스를 제공할 수 있다. </li>
	<li>수동 리소스 확장 검증을 위해서는 CLI(Command Line Interface), 관리 콘솔, API 등을 통해 리소스의 사양이 변경가능한지 점검할 수 있다. </li>
	<li>자동 리소스 확장 기능은 자동 확장 정책 설정 후 부하(사용량)를 발생시켜 사전에 정의된 정책에 따라 리소스가 확장되는지 점검할 수 있다.</li>
</ul>
<hr>
<div class="box2 t_center">
	<h3 class="ex">[참고ㆍ예시]</h3>
	<ul class="basic t_left">
		<li>확장성 정책간 실행규칙<br>- 다수의 확장 정책 설정 시 여러 상황에 따라 정책간의 충돌이 발생할 수 있으므로, 다양한 입력 조건을 설정 후 규칙에 따라 동작
	하는지 여부를 점검할 필요가 있다.
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
				<tbody><tr>
					<th class="border_none">정책 충돌 상황</th>
					<th>실행 규칙</th>
				</tr>	
				<tr>
					<td class="border_none">리소스 축소 정책과 리소스 확장 정책의 충돌</td>
					<td class="t_left">리소스 확장 정책이 실행된다. </td>
				</tr>
				<tr>
					<td class="border_none">리소스 확장 정책간의 충돌</td>
					<td class="t_left">리소스가 가장 많이 증가하는 정책이 실행된다.</td>
				</tr>
				<tr>
					<td class="border_none">리소스 축소 정책간의 충돌</td>
					<td class="t_left">리소스가 가장 적게 축소되는 정책이 실행된다.</td>
				</tr>
			</tbody></table>
		</li>
	</ul>
</div>

<hr>
<h3>④ 서비스 지속 및 성능 증가 여부</h3>
<ul class="basic">
	<li>리소스 확장/축소 후, 제공되는 서비스가 정상적으로 동작하는지, 리소스가 증가함에 따라 처리량이 늘어나는지 점검할 필요가 있다.
		<hr>
		<div class="box2 t_center">
			<h3 class="ex">[참고ㆍ예시]</h3>
			<ul class="basic t_left">
				<li> SaaS 확장성 점검
					<ul class="basic2">
						<li>SaaS의 확장성은 임계 성능 이상의 부하 발생 시, 초당 처리 속도(tps)가 증가하는 것으로 확인할 수 있다. </li>
						<li>SaaS 서비스 특성(주기능, 부하 트랜잭션, 동시사용자 수 등)을 고려하여 부하 워크로드를 선정해야 하며, multi-tenacy를 고려하여 부하를 발생할 필요도 있다.</li>
						<li>부하량 증가에 따라 처리량이 선형적으로 증가할 경우, 해당 구간에서 서비스가 확장되었음을 확인할 수 있다. 서비스 확장이 정상적으로 이루어지지 않은 경우, 처리량은 증가하지 않거나 오히려 감소할 수도 있다. <br><img src="/img/s23_img1.jpg"><br>※ 서버 인스턴스가 증가했다는 것만으로는 SaaS 서비스 확장을 보장하지 않는다. 애플리케이션 서버에서 분산처리가 이뤄지지 않거나, RDB에 병목이 발생하여 처리량이 증가하지 않을 수도 있다.</li>
					</ul>
				</li>
			</ul>
		</div>
	</li>
	<li>인프라(IaaS)의 확장성은 클라우드서비스의 확장성에 많은 영향을 미치고 있으며, 표준 벤치마크를 활용해 IaaS의 확장성을 정량적, 객관적으로 측정할 수 있다. 
		<ul class="basic2">
			<li> SPEC에서 공개한 SPEC Cloud IaaS 2016 도구를 이용하여 IaaS의 확장성 및 탄력성에 대한 성능 평가를 수행할 수 있다</li>
		</ul>
	</li>
</ul>
<hr>
<div class="box2 t_center">
	<h3 class="ex">[참고ㆍ예시]</h3>
	<ul class="basic t_left">
		<li>  SPEC Cloud IaaS 2016
			<ul class="basic2">
				<li> SPEC에서 공개한 SPEC Cloud IaaS 2016 도구는 YCSB(Yahoo Cloud Serving Benchmark)와 HiBench를 이용하여 IaaS의 확장성 및 탄력성에 대한 성능 평가를 수행할 수 있다</li>
				<li> SPEC Cloud IaaS 2016의 확장성 결과는 성능이 선형적으로 증가하는 최대 유효 애플리케이션 인스턴스의 개수와 그 시점의 성능 점수를 아래와 같은 표시방법에 따라 표시하며, 탄력성 결과는 인스턴스 개수 변화에 따른 성능 점수의 탄력도를 백분율로 표시하고 있다. </li>
				<li> SPEC Cloud IaaS 2016으로 측정한 확장성 및 탄력성 결과는 아래와 같이 표시될 수 있다. </li>
			</ul>
			<hr>
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center pc_table">
			<colgroup><col width="20%"><col width="20%"><col width="20%"><col width="20%"><col width="20%">
				</colgroup><tbody><tr>
					<th class="border_none">Vender Name</th>
					<th>Scalability</th>
					<th>Elasticity</th>
					<th>Total Instance</th>
					<th>Avg.Instance Provisioning Time</th>
				</tr>	
				<tr>
					<td class="border_none">ABC Cloud</td>
					<td>9.2@10 Application Instance</td>
					<td>50.0%</td>
					<td>50</td>
					<td>500</td>
				</tr>
			</tbody></table>
			<!--//모바일화면용-->
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center mobile_table">
				<tbody><tr>
					<th class="border_none">Vender Name</th>
					<th>Scalability</th>
					<th>Elasticity</th>
				</tr>	
				<tr>
					<td class="border_none">ABC Cloud</td>
					<td>9.2@10 Application Instance</td>
					<td>50.0%</td>
				</tr>
				<tr>				
					<th class="border_none">Total Instance</th>
					<th colspan="2">Avg.Instance Provisioning Time</th>
				</tr>
				<tr>					
					<td class="border_none">50</td>
					<td colspan="2">500</td>
				</tr>
			</tbody></table>
			<!--모바일화면용//-->
			<hr>
			<h3 class="t_center">&lt;상세내역&gt;</h3>
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center pc_table">
			<colgroup><col width="16.5%"><col width="16.5%"><col width="16.5%"><col width="16.5%"><col width="16.5%">
				</colgroup><tbody><tr>
					<th colspan="6" class="border_none">Scalability/Elasticity Summary Results for YCSB for 5 Valid Application Instance</th>
				</tr>	
				<tr>
					<td class="border_none">Av. Throughput<br> (ops/s)</td>
					<td>Av. Insert Latency <br>99%(ms)</td>
					<td>Av. Read Latency<br>99%(ms)</td>
					<td>Av. Provisioning<br>Time(s)</td>
					<td>Scalability</td>
					<td>Elasticity(%)</td>
				</tr>
				<tr>
					<td class="border_none">5000.0</td>
					<td>5.000</td>
					<td>5.000</td>
					<td>500.0</td>
					<td>5.1</td>
					<td>50.0</td>
				</tr>
			</tbody></table>			
			<!--//모바일화면용-->
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center mobile_table">
				<tbody><tr>
					<th colspan="2" class="border_none">Scalability/Elasticity Summary Results for YCSB for 5 Valid Application Instance</th>
				</tr>	
				<tr>
					<td class="border_none">Av. Throughput<br> (ops/s)</td>
					<td>5000.0</td>
				</tr>
				<tr>
					<td class="border_none">Av. Insert Latency <br>99%(ms)</td>
					<td>5.000</td>
				</tr>
				<tr>
					<td class="border_none">Av. Read Latency<br>99%(ms)</td>
					<td>5.000</td>
				</tr>
				<tr>
					<td class="border_none">Av. Provisioning<br>Time(s)</td>
					<td>500.0</td>
				</tr>
				<tr>
					<td class="border_none">Scalability</td>
					<td>5.1</td>
				</tr>
				<tr>
					<td class="border_none">Elasticity(%)</td>
					<td>50.0</td>
				</tr>
			</tbody></table>	
			<!--//모바일화면용-->
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center pc_table">
			<colgroup><col width="25%"><col width="25%"><col width="25%"><col width="25%">
				</colgroup><tbody><tr>
					<th colspan="4" class="border_none">Scalability/Elasticity Summary Results for KMeans for 5 Valid Application Instance</th>
				</tr>	
				<tr>
					<td class="border_none">Av. Completion Time(s)</td>
					<td>Av. Provisioning Time(s)</td>
					<td>Scalability</td>
					<td>Elasticity(%)</td>
				</tr>
				<tr>
					<td class="border_none">500</td>
					<td>500</td>
					<td>5.2</td>
					<td>60.0</td>
				</tr>
			</tbody></table>
			<!--모바일화면용//-->
			<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center mobile_table">
				<tbody><tr>
					<th colspan="2" class="border_none">Scalability/Elasticity Summary Results for KMeans for 5 Valid Application Instance</th>
				</tr>	
				<tr>
					<td class="border_none">Av. Completion Time(s)</td>
					<td>500</td>
				</tr>
				<tr>
					<td class="border_none">Av. Provisioning Time(s)</td>
					<td>500</td>
				</tr>
				<tr>
					<td class="border_none">Scalability</td>
					<td>5.2</td>
				</tr>
				<tr>
					<td class="border_none">Elasticity(%)</td>
					<td>60.0</td>
				</tr>
			</tbody></table>
			<!--//모바일화면용-->
			※ 상세 도구 사용방법은 안내서 30페이지 ’[참고] IaaS 및 PaaS에 대한 성능 측정’ 참조
		</li>
	</ul>
</div>


<!--1.3확장요청 처리시간-->
<hr>
<h3>1.3. 확장요청 처리시간</h3>
<ul class="basic">
	<li>확장요청 처리시간은 클라우드서비스가 리소스 변경 요청을 처리하여 제공하기까지 소요되는 시간을 의미한다.
	<hr>
	<div class="box2 t_center">
		<h3 class="ex">[참고ㆍ예시]</h3>
		<ul class="basic t_left">
			<li> ISO/IEC 17788 IT-Cloud computiong –overview and vocabulary
				<ul class="basic2">
					<li> 10.4.4 Elasticity component<br>• Elasticity Speed : The elasticity speed describes how fast a cloud service is able to react to a resource request when :<br> a. the CSC makes a resource re-allocation request (in the case of manual elasticity), or<br> b. workload changes take place(in the case of automatic elasticity)<br> • The speed quantity can be expressed within thresholds. This Quantity can be determined by measurement process and therfore defines a metric</li>
				</ul>
			</li>
		</ul>
	</div>
	<h3 class="t_center">&lt; 「확장요청 처리시간」 점검방법&gt;</h3>
	<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
		<tbody><tr>
			<th class="border_none">유형</th>
			<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 관리체계 검증</td>
			<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 품질·성능 시험</td>
		</tr>	
		<tr>
			<th class="border_none">적용 대상 서비스</th>
			<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
			<td width="23%" colspan="2"><input type="checkbox" name="nocheck" disabled=""> PaaS</td>
			<td width="23%"><input type="checkbox" name="nocheck" disabled=""> SaaS</td>
		</tr>
	</tbody></table>
	</li>
	<li>확장요청 처리시간 측정을 위한 세부 점검항목은 다음과 같다. 	
	<hr>
	<h3 class="t_center">&lt; 표 3-4. 「확장요청 처리시간」 점검항목&gt;</h3>
	<table cellpadding="0" cellspacing="0" border="0" class="table1 t_center">
		<tbody><tr>
			<th class="border_none">점검 항목</th>
			<th>세부 점검항목</th>
			<th>설명</th>
		</tr>	
		<tr>
			<td class="border_none">확장요청 처리시간 </td>
			<td>(1) 확장요청 처리시간 측정</td>
			<td>리소스 확장에 소요되는 평균시간은 얼마인지 확인한다.</td>
		</tr>
	</tbody></table>
	</li>
</ul>
<hr>
<h3>① 확장요청 처리시간 측정</h3>
<ul class="basic">
	<li>확장요청 처리시간 측정을 위해 리소스 확장이 발생하는 시간에 대한 식별이 필요하다. 이 시간은 이용자가 요청 버튼을 클릭하는 시간이거나, 스케줄된 시간 또는 확장을 위한 알람 이벤트 (예: AutoScale Group의 알람)가 발생하는 시간일 수 있다.   </li>
	<li>처리 완료 시간은 서버 인스턴스가 추가되어 이용가능한 시점이 될 수 있다. </li>
	<li>확장처리 소요시간은 관리 콘솔, 리소스 관리 API, 로그 등에서 제공하는 timestamp를 확인하거나, SPEC Cloud IaaS 2016 Benchmark 등과 같은 자동 측정 도구를 이용하여 측정할 수 도 있다 </li>
</ul>
<hr></div>



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