<?php
	$pagename_kor="등록";
	$pagename="register";
?>
<?php include 'header.php'; ?>
	
	<p class="introtext">
		아래 버튼을 클릭하여 참가 신청을 하실 수 있습니다.
	</p>

	<a href="https://forms.gle/pdPSzYSH28r5SqBJ8" class="snsbtn snsbtn_larg google">
		<img src="siteicons/favicon_ggl.png"/>참가 신청 구글 폼
	</a>
	
	<p class="introtext">
		등록 마감까지 <span id="countdown" style="font-family:monospace;font-weight:bold;">??</span>일 남았습니다.<br>
		<span style="font-size:0.8em;">조기에 마감될 수 있으니 빠른 신청 부탁드립니다!</span></p>
	<script>
		let eventTime=new Date("2025-01-18T00:00:00+09:00");
		let nowTime=new Date();
		let timeDelta = eventTime.getTime() - nowTime.getTime();
		if (timeDelta<0) timeDelta=0;
		

		let days_whole = Math.ceil(timeDelta/1000/60/60/24);
		document.getElementById("countdown").innerHTML = ""+days_whole;


	</script>
	
<?php include 'footer.php'; ?>
