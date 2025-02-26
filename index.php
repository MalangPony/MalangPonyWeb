<?php
	$pagename_kor="";
	$pagename="index";
	$vertical_fit=false;
	$skip_header=false;
	$display_sns_float=false;
?>
<?php include 'header.php'; ?>
	
	
	
	
	<style>
	/* sorry */
	@media (width<330px) {#hack_nl{display:inline;}}
	@media (width>=330px) {#hack_nl{display:none;}}
	</style>
	<p class="introtext">
		<span class="nobreak">한국의 마이리틀포니 팬 교류회, </span>
		<span class="nobreak">2025년 2월 15일 <br id="hack_nl">
		서울에서 만나요!</span><br>
		<span class="nobreak">포니를 사랑하는 </span>
		<span class="nobreak">모든 분들을 환영합니다!</span>
	</p>
	
	<div class="flexrow mobile-pivot-late">
		<a href="https://x.com/MalangPony" class="snsbtn snsbtn_larg twitter">
			<img src="siteicons/favicon_x.png"/>공식 트위터(X)
		</a>
		<a href="https://bsky.app/profile/malangpony.bsky.social" class="snsbtn snsbtn_larg bluesky">
			<img src="siteicons/favicon_bsky_white.png"/>공식 블루스카이
		</a>
	</div>
	
	<div class="image-with-text">
		<a href="images/Poster_Extension_rev6_NoQR-Crop.png">
			<img src="images/Poster_Extension_rev6_NoQR-Crop_ResizeW1000px-JPG85.jpg" style="width:100%; max-width:540px;filter:drop-shadow(3px 3px 5px #00000080);"/>
		</a>
		<div class="imgdesc">
			포스터 제작 : 
			<a class="actual_link link_with_icon" href="https://x.com/Libbly_Libby">
				Libby
				<img src="siteicons/favicon_x.png" 
					class="imgdesc_snsicon"
					width="24px" height="24px">
			</a>
		</div>
	</div>
	
	<p class="introtext">
	<span class="nobreak">행사까지... </span>
	<span class="nobreak"><span id="countdown" class="monotext-bold">???</span></span></p>
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

		}
		update();
		setInterval(update,1000);
	</script>

	
<?php include 'footer.php'; ?>
