<?php
	$pagename_kor="갤러리";
	$pagename="gallery";
	$wide_content=true;
?>
<?php include '../header.php'; ?>
	
	<!-- List loading display, click-through -->
	<div id="list-loading-display" style="display:flex;position:fixed;top:0;bottom:0;left:0;right:0;justify-content:center;align-items:center;z-index:50;pointer-events:none;">
		<div style="padding:24px;background-color:#00000080;color:#FFFFFF;display:flex;flex-direction:row;justify-content:center;align-items:center;gap:16px;">
			<!--<img class="loading-spinner" src="/sprites/hanmari_CM_rev1_100px.png" fetchpriority="high" />-->
			<div class="pulsating">이미지 목록 로딩중...</div>
			<!--<img class="loading-spinner" src="/sprites/hanmari_CM_rev1_100px.png" fetchpriority="high" />-->
		</div>
		
	</div>

	
	<div id="image-overlay-container" style="display:flex;justify-content:center;align-items:center;position:fixed;top:0;bottom:0;left:0;right:0;transition-property: opacity;transition-duration: 0.5s;opacity:0.0;z-index:100;background-color:rgba(0,0,0,0.5);">
		<!-- Image loading display, click-through -->
		<div id="image-overlay-loading" style="display:flex;position:absolute;top:0;bottom:0;left:0;right:0;justify-content:center;align-items:center;z-index:120;pointer-events:none;">
			<div style="padding:24px;background-color:#00000080;color:#FFFFFF;display:flex;flex-direction:row;justify-content:center;align-items:center;gap:16px;">
				<!--<img class="loading-spinner" src="/sprites/hanmari_CM_rev1_100px.png" fetchpriority="high" />-->
				<div class="pulsating">이미지 로딩중...</div>
				<!--<img class="loading-spinner" src="/sprites/hanmari_CM_rev1_100px.png" fetchpriority="high" />-->
			</div>
		</div>
		<!-- Actual image display -->
		<div style="display:flex;justify-content:center;align-items:center;position:absolute;top:8px;bottom:8px;left:8px;right:8px;">
			<img id="image-overlay-image" style="object-fit: contain;z-index:110;max-width:100%;max-height:100%;"/>
		</div>
	</div>
	
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
		<?php include 'gallery_inner_autogen.php'; ?>
	</div>
	
	<div class="normaltext" style="max-width:600px;text-align:center;">
		<!--
		<h2 style="margin-top:0;">문의</h2>
		<div>
			<strong>공식 이메일</strong>
		</div>
		-->
		<div>문의사항은 아래 이메일로 부탁드립니다.</div>
		<img src="/images/email_addr_nocaption.png" style="width:100%; max-width:200px; margin-left: auto; margin-right: auto;"/>
	</div>
	
	<!-- Bottom  -->
	<div style="height:100px;"></div>
	
	<script>
		
		let scrollEnabled=true;
		document.getElementById("content").addEventListener(
			"wheel", function(e){
				if (!scrollEnabled){
					e.preventDefault();
					e.stopPropagation();
				}});
		
		let ioc=document.getElementById("image-overlay-container");
		let ioi=document.getElementById("image-overlay-image");
		let iol=document.getElementById("image-overlay-loading");
		
		document.querySelectorAll(".fanart_container").forEach((n) => {
			n.addEventListener("click",function(e){
				ioi.src="";
				ioi.src=n.querySelector(".fanart_thumb").getAttribute("fsrc");
				ioc.style.opacity=1.0;
				ioc.style.pointerEvents="auto";
				scrollEnabled=false;
				
				imgUnloaded();
				ioi.removeEventListener('load', imgLoaded);
				
				if (ioi.complete) {
					imgLoaded()
				} else {
					ioi.addEventListener('load', imgLoaded);
				}
			});
			n.style.cursor="pointer";
		});
		ioc.addEventListener(
			"click",function(e){
				ioc.style.opacity=0.0;
				ioc.style.pointerEvents="none";
				scrollEnabled=true;
		});
		ioc.style.pointerEvents="none";
		
		function imgLoaded(e){
			iol.style.display="none";
		}
		function imgUnloaded(e){
			iol.style.display="flex";
		}
		
		let lld=document.getElementById("list-loading-display");
		let intID=0;
		intID=window.setInterval(function(){
			let allLoaded=true;
			document.querySelectorAll(".fanart_gallery img").forEach((n) => {
				if (!n.complete) allLoaded=false;
			});
			if (allLoaded) window.clearInterval(intID);
			lld.style.display=allLoaded?"none":"flex";
		},100);
	</script>
	

<?php include '../footer.php'; ?>
