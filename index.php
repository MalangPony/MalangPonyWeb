<?php
	$pagename_kor="";
	$pagename="index";
	//$display_sns_float=true;
?>
<?php //We skip the header include. ?>
<!DOCTYPE html>
<!--
Website code by SheepPony
Sorry for the spaghetti.
-->
<html>
<head>
<meta charset="UTF-8">
<title>
말랑포니!<?php if ($pagename_kor!='') echo " - {$pagename_kor}"; ?>
</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<?php if ($pagename=="index"): ?>
	<meta property="og:title" content="말랑포니!" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://malangpony.com" />
	<meta property="og:image" content="http://malangpony.com/images/MPN_Twtr_Header_var1_VECTORIZE_rev6_NoBGCrop_72.png" />
	<meta property="og:description" content="한국의 마이리틀포니 행사, 말랑포니입니다!" />
<?php endif; ?>
<!--<meta name="viewport" content="width=480" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">
<link href="/styles.css" rel="stylesheet" />
<?php if ($vertical_fit): ?>
<style>
html{height:100%;}
body{height:100%;}
#content{height:100%;}
</style>
<?php endif; ?>
</head>
<body>
<div id="content">
	<div style="height:10px;"></div>
	<?php if (!($skip_header===true)): ?>
	<a href="/"><img src="/images/MPN_Twtr_Header_var1_VECTORIZE_rev6_SS-NoBGCrop_72.png" id="headerimage" width="600px" height="212px"></a>
	<?php endif; ?>

	<p class="introtext">
		<span class="nobreak">여러분들의 많은 참여 덕분에</span>
		<span class="nobreak">말랑포니가 성공적으로 끝났습니다.</span>
		<span class="nobreak">다음 행사에서 만나요!</span>
	</p>
	
	
	<div class="flexrow mobile-pivot-late">
		<a href="https://x.com/MalangPony" class="snsbtn snsbtn_larg twitter">
			<img src="siteicons/favicon_x.png"/>공식 트위터(X)
		</a>
		<a href="https://bsky.app/profile/malangpony.bsky.social" class="snsbtn snsbtn_larg bluesky">
			<img src="siteicons/favicon_bsky_white.png"/>공식 블루스카이
		</a>
	</div>
	
	<a href="https://2025.malangpony.com" class="snsbtn snsbtn_larg malang">
		<img src="sprites/hanmari_CM_rev1_100px.png"/>
		1회 말랑포니 웹사이트
	</a>

<?php //We skip the footer include. ?>
</body>
</html>
