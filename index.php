<?php
	$pagename_kor="";
	$pagename="index";
	//$display_sns_float=true;
?>
<?php include 'header.php'; ?>
	
	
	
	
	
	<p class="introtext">
		한국의 마이리틀포니 팬 교류회, 2025년 2월 15일 서울에서 만나요!<br>
		포니를 사랑하는 모든 분들을 환영합니다!
	</p>
	
	<div class="snsbar">
		<a href="https://x.com/MalangPony" class="snsbtn snsbtn_larg twitter">
			<img src="siteicons/favicon_x.png"/>공식 트위터(X)
		</a>
		<a class="snsbtn snsbtn_larg bluesky" style="opacity:0.2;">
			<img src="siteicons/favicon_bsky_white.png"/>공식 블루스카이
		</a>
	</div>
	
	<a href="images/Poster_Extension_rev6_NoQR-Crop.png">
		<img src="images/Poster_Extension_rev6_NoQR-Crop_ResizeW1000px-JPG85.jpg" style="max-width:80%;filter:drop-shadow(3px 3px 5px #00000080);"/>
	</a>
	
	<p style="font-size:24px;">행사까지... <span id="countdown" class="monotext-bold">???</span></p>
	<script>
		function update(){
			//let eventTime=new Date("2025-02-15T00:00:00+09:00");
			let eventTime=new Date("2025-02-15T11:00:00+09:00");
			let nowTime=new Date();
			let timeDelta = eventTime.getTime() - nowTime.getTime();
			if (timeDelta<0) timeDelta=0;
			
			
			let seconds=Math.round(timeDelta/1000);
			let minutes = Math.floor(seconds/60);
			seconds = seconds%60;
			let hours = Math.floor(minutes/60);
			minutes = minutes%60;
			let days = Math.floor(hours/24);
			hours = hours%24;
			
			days=""+days;
			hours=""+hours;
			while (hours.length<2) hours="0"+hours;
			minutes=""+minutes;
			while (minutes.length<2) minutes="0"+minutes;
			seconds=""+seconds;
			while (seconds.length<2) seconds="0"+seconds;
			
			let s="D-"+days+", "+hours+":"+minutes+":"+seconds;
			document.getElementById("countdown").innerHTML = s;
			
			/*
			let days_whole = Math.ceil(timeDelta/1000/60/60/24);
			document.getElementById("countdown").innerHTML = "D-"+days_whole;
			*/
		}
		update();
		setInterval(update,1000);
	</script>

	
<?php include 'footer.php'; ?>
