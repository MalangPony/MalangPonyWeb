<?php
	$pagename_kor="";
	$pagename="index";
	$display_sns_float=true;
?>
<?php include 'header.php'; ?>
	
	
	<p id="countdown" style="font-size:24px;"> </p>
	<script>
		//let eventTime=new Date("2025-02-15T12:00:00+09:00");
		let eventTime=new Date("2025-02-15T00:00:00+09:00");
		let nowTime=new Date();
		let timeDelta = eventTime.getTime() - nowTime.getTime();
		if (timeDelta<0) timeDelta=0;
		let seconds=timeDelta/1000;
		let days = Math.ceil(timeDelta/1000/60/60/24);		
		document.getElementById("countdown").innerHTML = "D-"+days;
	</script>
	
	
	<p class="introtext">
		한국의 마이리틀포니 팬 교류회, 2025년 2월 15일 서울에서 만나요!<br>
		포니를 사랑하는 모든 분들을 환영합니다!
	</p>
	<!--
	<div class="snsbar">
		<a href="https://x.com/MalangPony" class="snsbtn twitter">
			<img src="siteicons/favicon_x.png"/>공식 트위터(X)
		</a>
		<a class="snsbtn bluesky" style="opacity:0.2;">
			<img src="siteicons/favicon_bsky_white.png"/>공식 블루스카이
		</a>
	</div>-->
	
	<a href="images/Poster_Extension_rev6_NoQR-Crop.png">
		<img src="images/Poster_Extension_rev6_NoQR-Crop_ResizeW1000px-JPG85.jpg" style="max-width:80%;filter:drop-shadow(3px 3px 5px #00000080);"/>
	</a>

	
<?php include 'footer.php'; ?>
