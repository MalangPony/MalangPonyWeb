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
<?php if ($pagename=="index"): ?>
	<meta property="og:title" content="말랑포니!" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://malangpony.com" />
	<meta property="og:image" content="http://malangpony.com/MPN_Twtr_Header_var1_VECTORIZE_rev6_NoBGCrop_72.png" />
	<meta property="og:description" content="2025년 2월 15일 개최되는 한국의 마이리틀포니 행사입니다!" />
<?php endif; ?>
<meta name="viewport" content="width=700" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">
<link href="styles.css" rel="stylesheet" />
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
	<a href="/"><img src="images/MPN_Twtr_Header_var1_VECTORIZE_rev6_SS-NoBGCrop_72.png" width="600px" height="212px"></a>
	<?php endif; ?>
	<div class="linkbar">
		<a href="/">
			<div class="linkbar_btn <?php if ($pagename=='index') echo 'linkbar_selected'; ?>" style="padding-left:2px;padding-right:2px;">
				<img src="sprites/home_24dp_FFFFFF_FILL1_wght400_GRAD0_opsz24_EXPAND_GLOW++.png" 
					width="48px" height="48px" class="selected_icon" />
				<img src="sprites/home_24dp_A485CE_FILL1_wght400_GRAD0_opsz24_EXPANDED.png" 
					width="48px" height="48px" class="unselected_icon" />
			</div>
		</a>
		
		<a href="about.php">
			<div class="linkbar_btn linkbar_red <?php if ($pagename=='about') echo 'linkbar_selected'; ?>">
			소개
			</div>
		</a>
		
		<a href="register.php">
			<div class="linkbar_btn linkbar_yellow <?php if ($pagename=='register') echo 'linkbar_selected'; ?>">
			사전등록
			</div>
		</a>
		<a href="rules.php">
			<div class="linkbar_btn linkbar_blue <?php if ($pagename=='rules') echo 'linkbar_selected'; ?>">
			규칙
			</div>
		</a>
		<a href="timetable.php">
			<div class="linkbar_btn linkbar_red <?php if ($pagename=='timetable') echo 'linkbar_selected'; ?>">
			시간표
			</div>
		</a>
		<a href="staff.php">
			<div class="linkbar_btn linkbar_purple <?php if ($pagename=='staff') echo 'linkbar_selected'; ?>">
			문의
			</div>
		</a>
		<a href="oc.php">
			<div class="linkbar_btn <?php if ($pagename=='oc') echo 'linkbar_selected'; ?>" style="padding-left:2px;padding-right:2px;">
				<img src="sprites/Hanmari_CM_rev1_80px_Expand128px_Glow++.png" 
					width="48px" height="48px" class="selected_icon" />
				<img src="sprites/Hanmari_CM_rev1_80px_Expand128px.png" 
					width="48px" height="48px" class="unselected_icon" />
			</div>
		</a>
	</div>
