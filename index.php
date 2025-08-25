<?php
	$pagename_kor="";
	$pagename="index";
	//$display_sns_float=true;
?>
<?php include 'header.php'; ?>


	<p class="introtext">
		<span class="nobreak">여러분들의 많은 참여 덕분에</span>
		<span class="nobreak">말랑포니가 성공적으로 끝났습니다.</span>
		<span class="nobreak">다음 행사에서 만나요!</span>
	</p>
	
	<iframe width="560" height="315" style="max-width:88vw;max-height:49.5vw;" src="https://www.youtube.com/embed/ZtCIdW_r-U8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	
	<a href="gallery" class="snsbtn snsbtn_larg malang">
		<img src="<?php echo $webroot;?>/sprites/photo_camera_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.png" style="filter:drop-shadow(0 0 2px #5f4385);"/>
		1회 말랑포니 사진 갤러리
	</a>
	
	<a href="<?php echo $webdomain;?>/old/pre25" class="snsbtn snsbtn_larg malang">
		<img src="<?php echo $webroot;?>/sprites/hanmari_CM_rev1_100px.png"/>
		1회 말랑포니 웹사이트
	</a>
	
	<div class="flexrow mobile-pivot-late">
		<a href="https://x.com/MalangPony" class="snsbtn snsbtn_larg twitter">
			<img src="<?php echo $webroot;?>/siteicons/favicon_x.png"/>공식 트위터(X)
		</a>
		<a href="https://bsky.app/profile/malangpony.bsky.social" class="snsbtn snsbtn_larg bluesky">
			<img src="<?php echo $webroot;?>/siteicons/favicon_bsky_white.png"/>공식 블루스카이
		</a>
	</div>
	
	
	
	

<?php include 'footer.php'; ?>
