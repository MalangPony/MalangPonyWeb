<!DOCTYPE html>
<!--
Website code by SheepPony
Sorry for the spaghetti.
-->
<?php include 'environment.php'; ?>
<?php
// Page variables (declare before including this file):
// $header_image_override
//   IF SET, will change the header to $webroot/$header_image_override
// $pagename
//   IF SET, doesn't really do anything.
//   if value is "index", will set the OpenGraph meta tags.
// $pagename_kor 
//   IF SET, use it in the title.
// $vertical_fit
//   IF SET and value is TRUE, make the content fit the page height.
// $wide_content
//   IF SET and value is TRUE, make the content fit the page width.
// $skip_header
//   IF SET and value is TRUE, skip the header content.

// Available variables (Use after including this file):
// $webroot
//   set in the environment.php. Root of the page hiearchy.
// $webdomain
//   set in the environment.php. The root domain.
// $header_image_path
//   processed header image path
// $page_title
//   processed page title. Use in <title> and other places.
// $pagename
//   as declared before.
// $vertical_fit,$wide_content,$skip_header
//  flags. Guarenteed to be declared.

$header_image_path= $webroot . "/images/MPN_LogoV2_PNG-400dpi-NoBG_RszY500.png";
if (isset($header_image_override)){
	$header_image_path = $webroot . $header_image_override;
}

$page_title="말랑포니!";
if (isset($pagename_kor) and ($pagename_kor!="")){
	$page_title="말랑포니! - " . $pagename_kor;
}

if (!isset($pagename)) $pagename="";

if (!isset($vertical_fit)) $vertical_fit=false;

if (!isset($wide_content)) $wide_content=false;

if (!isset($skip_header)) $skip_header=false;
?>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php echo $page_title;?>
</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<?php if ($pagename=="index"): ?>
	<meta property="og:title" content="<?php echo $page_title;?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $webroot;?>" />
	<meta property="og:image" content="<?php echo $header_image_path;?>" />
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
	<a href="<?php echo $webroot;?>"><img src="<?php echo $header_image_path;?>" id="headerimage" width="589px" height="240px"></a>
	<?php endif; ?>

