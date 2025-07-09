<!DOCTYPE html>
<?php include 'environment.php'; ?>
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
	<meta property="og:url" content="<?php echo $webroot;?>" />
	<meta property="og:image" content="<?php echo $webroot;?>/images/MPN_Twtr_Header_var1_VECTORIZE_rev6_NoBGCrop_72.png" />
	<meta property="og:description" content="한국의 마이리틀포니 행사, 말랑포니입니다!" />
<?php endif; ?>
<!--<meta name="viewport" content="width=480" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">
<link href="<?php echo $webroot;?>/styles.css" rel="stylesheet" />
<?php if ($vertical_fit): ?>
<style>
html{height:100%;}
body{height:100%;}
#content{height:100%;}
</style>
<?php endif; ?>
<?php if ($wide_content): ?>
<style>
#content{max-width:100% !important;}
</style>
<?php endif; ?>
</head>
<body>
<div id="content">
	<div style="height:10px;"></div>
	<?php if (!($skip_header===true)): ?>
	<a href="/"><img src="<?php echo $webroot;?>/images/MPN_Twtr_Header_var1_VECTORIZE_rev6_SS-NoBGCrop_72.png" id="headerimage" width="600px" height="212px"></a>
	<?php endif; ?>

