<?php
	$pagename_kor="갤러리";
	$pagename="gallery";
	$wide_content=true;
?>
<?php include 'header.php'; ?>

	<!--
	<div class="normaltext">
		<h2>말랑포니 2025 갤러리</h2>
		<p style="font-size:0.8em;">우와</p>
	</div>
	-->
	<p class="introtext">
		<span class="nobreak">1회 말랑포니 행사의</span>
		<span class="nobreak">공식 사진들입니다.</span><br>
	</p>
	
	<div class="fanart_gallery" style="width:100%; margin-top:-10px;">
		<?php include 'gallery_inner.php'; ?>
	</div>
	
	<div class="normaltext" style="max-width:600px;text-align:center;">
		<!--
		<h2 style="margin-top:0;">문의</h2>
		<div>
			<strong>공식 이메일</strong>
		</div>
		-->
		<div>문의사항은 아래 이메일로 부탁드립니다.</div>
		<img src="images/email_addr_nocaption.png" style="width:100%; max-width:200px; margin-left: auto; margin-right: auto;"/>
	</div>
	
	<!-- Bottom  -->
	<div style="height:100px;"></div>
	
	<!-- Load Zooming library -->
	<!-- Below library doesn't really work with mobile devices-->
	<!--
	<script src="https://unpkg.com/zooming/build/zooming.min.js"></script>

	<script>
		// Listen to images after DOM content is fully loaded
		document.addEventListener('DOMContentLoaded', function () {
		new Zooming({
			//bgColor:"#E3D8E9",
			bgColor:"#000000",
			bgOpacity:0.5
			
		}).listen('.fanart_gallery img')
		})
	</script>
	-->
	
	<!-- Below doesn't allow you to zoom more -->
	<!--
	<script src="https://unpkg.com/medium-zoom@0/dist/medium-zoom.min.js"></script>
	<script>
		mediumZoom(document.querySelectorAll('.fanart_thumb'));
	</script>
	-->

<?php include 'footer.php'; ?>
