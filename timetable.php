<?php
	$pagename_kor="시간표";
	$pagename="timetable";
?>
<?php include 'header.php'; ?>

	<p class="introtext">
		아래 시간표는 상황에 따라 변경될 수 있습니다.
	</p>
	
	
	<table class="timetable">
		<!-- kinda self evident
		<tr>
			<th>시간</th>
			<th>활동</th>
			<th>설명</th>
		</tr>
		-->
		<tr >
			<td class="tt_time" rowspan="2" style="height:0;">10:00</td>
			<td class=""></td>
			<td class="tt_expl"></td>
		</tr>
		<tr >
			<td class="tt_block tt_block_aj" rowspan="4">
				<div class="tt_trange">10:00 - 11:00</div>
				<div class="tt_actname">참가자 입장</div>
			</td>
			<td class="tt_expl" rowspan="4"></td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">10:30</td>
		</tr>
		<tr ></tr>
		<tr >
			<td class="tt_time" rowspan="2">11:00</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_pp" rowspan="2">
				<div class="tt_trange">11:00 - 11:30</div>
				<div class="tt_actname">개회식</div>
			</td>
			<td class="tt_expl" rowspan="2"></td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">11:30</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_fs" rowspan="6">
				<div class="tt_trange">11:30 - 13:00</div>
				<div class="tt_actname">우리'말' 겨루기</div>
			</td>
			<td class="tt_expl" rowspan="6">팀으로 진행되는 마이리틀포니 퀴즈쇼! <br>포니를 얼마나 알고 있는지 확인해보세요. <br>1등과 2등에게는 상품이 수여됩니다!</td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">12:00</td>
		</tr>
		<tr ></tr>
		<tr >
			<td class="tt_time" rowspan="2">12:30</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">13:00</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_rd" rowspan="6">
				<div class="tt_trange">13:00 - 14:30</div>
				<div class="tt_actname">드로잉 쇼 &amp; 다과회</div>
			</td>
			<td class="tt_expl" rowspan="6">간식과 함께하는 아티스트 초청 드로잉쇼!</td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">13:30</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">14:00</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">14:30</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_ry" rowspan="2">
				<div class="tt_trange" rowspan="2">14:30 - 15:00</div>
				<div class="tt_actname" rowspan="2">보드게임 설명회</div>
			</td>
			<td class="tt_expl" rowspan="2">막장 포니 커플링 보드게임, <br>TSSSF의 플레이 방법을 설명해 드립니다!</td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">15:00</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_ts" rowspan="8">
				<div class="tt_trange">15:00 - 17:00</div>
				<div class="tt_actname">보드게임 &amp; 자유시간</div>
			</td>
			<td class="tt_expl" rowspan="8">TSSSF, Prance, Stardust, PUNO 등 <br>여러 포니 보드게임을 하며 친목을 다져보세요!</td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">15:30</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">16:00</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">16:30</td>
		</tr>
		<tr></tr>
		<tr >
			<td class="tt_time" rowspan="2">17:00</td>
		</tr>
		<tr >
			<td class="tt_block tt_block_sp" rowspan="2">
				<div class="tt_trange">17:00 - 17:30</div>
				<div class="tt_actname">래플 추첨 &amp; 폐회식</div>
			</td>
			<td class="tt_expl" rowspan="2">행사 마지막 추첨을 통해 <br>경품을 얻을 수 있는 기회가 주어집니다!!</td>
		</tr>
		<tr >
			<td class="tt_time" rowspan="2">17:30</td>
		</tr>
		<tr></tr>
	</table>
	
	
<?php include 'footer.php'; ?>
