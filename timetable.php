<?php
	$pagename_kor="시간표";
	$pagename="timetable";
?>
<?php include 'header.php'; ?>

	<p class="introtext">
		아래 시간표는 상황에 따라 변경될 수 있습니다.
	</p>
	
	
	<table class="timetable">
		<tr>
			<th>시간</th>
			<th>활동</th>
			<th>설명</th>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">10:00</td>
			<td class=""></td>
			<td class="tt_expl"></td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">10:30</td>
			<td class="tt_block tt_block_red" rowspan="2">
				<div class="tt_trange">10:00 -</div>
				<div class="tt_actname">참가자 입장 시작</div>
			</td>
			<td class="tt_expl" rowspan="2">10시~11시 아무때나 입장해 주시면 됩니다.</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">11:00</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">11:30</td>
			<td class="tt_block tt_block_yellow">
				<div class="tt_trange">11:00 - 11:30</div>
				<div class="tt_actname">개회식</div>
			</td>
			<td class="tt_expl"></td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">12:00</td>
			<td class="tt_block tt_block_blue" rowspan="3">
				<div class="tt_trange">11:30 - 13:00</div>
				<div class="tt_actname">우리말 겨루기!</div>
			</td>
			<td class="tt_expl" rowspan="3">마이리틀포니 지식 퀴즈쇼</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">12:30</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">13:00</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">13:30</td>
			<td class="tt_block tt_block_purple" rowspan="3">
				<div class="tt_trange">13:00 - 14:30</div>
				<div class="tt_actname">드로잉 쇼 &amp; 다과회</div>
			</td>
			<td class="tt_expl" rowspan="3">아티스트들의 그림 실력을 구경하면서<br>맛있는 과자를 먹읍시다</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">14:00</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">14:30</td>
			
		</tr>
		<tr class="tt_row">
			<td class="tt_time">15:00</td>
			<td class="tt_block tt_block_red">
				<div class="tt_trange">14:30 - 15:00</div>
				<div class="tt_actname">보드게임 설명회</div>
			</td>
			<td class="tt_expl">막장 포니 커플링 보드게임,<br>TSSSF 들어보셨나요?<br>친절히 플레이 방법을 설명해 드립니다!</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">15:30</td>
			<td class="tt_block tt_block_yellow" rowspan="4">
				<div class="tt_trange">15:00 - 17:00</div>
				<div class="tt_actname">게임 및 자유시간</div>
			</td>
			<td class="tt_expl" rowspan="4"></td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">16:00</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">16:30</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">17:00</td>
		</tr>
		<tr class="tt_row">
			<td class="tt_time">17:30</td>
			<td class="tt_block tt_block_blue">
				<div class="tt_trange">17:00 - 17:30</div>
				<div class="tt_actname">래플 추첨 및 폐회식</div>
			</td>
			<td class="tt_expl">아쉬운 폐회식...그리고 두근두근 래플 추첨!</td>
		</tr>
	</table>
	
	
<?php include 'footer.php'; ?>
