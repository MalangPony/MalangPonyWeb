<?php
	$pagename_kor="등록";
	$pagename="register";
	$vertical_fit=false;
	$skip_header=false;
	$display_sns_float=false;
?>
<?php include 'header.php'; ?>

	<p class="introtext">
		<span class="nobreak">사전등록이 마감되었습니다.</span><br>
	</p>
	<p class="introtext" style="font-size:1.0em;">
		<span class="nobreak">행사장 수용량 한계로</span>
		<span class="nobreak">현장 등록은 받지 않습니다.</span><br>
		<span class="nobreak">사전등록을 못하신 분들은</span>
		<span class="nobreak">다음 행사를 기대해 주세요!</span>
	</p>
	
	<!--
	<p class="introtext">
		<span class="nobreak">아래 버튼을 클릭하여</span>
		<span class="nobreak">사전등록 신청을 하실 수 있습니다.</span>
	</p>

	<a href="https://forms.gle/pdPSzYSH28r5SqBJ8" class="snsbtn snsbtn_larg google">
		<img src="siteicons/favicon_ggl.png"/>사전등록 (구글 폼)
	</a>
	
	<p class="introtext">
		등록 마감까지 <span id="countdown" class="monotext-bold">??</span>일 남았습니다.<br>
		<span style="font-size:0.8em;">
		<span class="nobreak">조기에 마감될 수 있으니 </span>
		<span class="nobreak">빠른 신청 부탁드립니다!</span>
		</span></p>
	<script>
		let eventTime=new Date("2025-01-18T00:00:00+09:00");
		let nowTime=new Date();
		let timeDelta = eventTime.getTime() - nowTime.getTime();
		if (timeDelta<0) timeDelta=0;
		

		let days_whole = Math.ceil(timeDelta/1000/60/60/24);
		document.getElementById("countdown").innerHTML = ""+days_whole;


	</script>
	-->
	
<?php include 'footer.php'; ?>
