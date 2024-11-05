<?php if (!($vertical_fit===true)): ?>
<div style="height:100px;"></div> <!-- Bottom padding -->
<?php endif; ?>
</div> <!-- End of Content -->

<?php if ($display_sns_float===true): ?>
<div class="bottom_floater">
	<a href="https://x.com/MalangPony" class="snsbtn snsbtn_larg twitter">
		<img src="siteicons/favicon_x.png"/>공식 트위터(X)
	</a>
	<a class="snsbtn snsbtn_larg bluesky" style="opacity:0.2;">
		<img src="siteicons/favicon_bsky_white.png"/>공식 블루스카이
	</a>
</div>
<?php endif; ?>

<div class="bgdisp">
	<?php $roll=rand()%6; ?>
	<?php if ($roll==0): ?>
		<div class="bg_container bg_top bg_left">
			<img src="bgimg/0L_CM.png"/>
		</div>
		<div class="bg_spacer"></div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/0R_CM.png" />
		</div>
	<?php elseif ($roll==1): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="bgimg/1L_SheepPony.png" />
		</div>
		<div class="bg_spacer">Art by SheepPony</div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/1R_SheepPony.png" />
		</div>
	<?php elseif ($roll==2): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="bgimg/2L_Marenlicious.png"/>
		</div>
		<div class="bg_spacer">Art by Marenlicious &amp; Interrupter</div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/2R_Interrupter.png"/>
		</div>
	<?php elseif ($roll==3): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="bgimg/3L_PaperSurgery.png"/>
		</div>
		<div class="bg_spacer">Art by PaperSurgery</div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/3R_PaperSurgery.png"/>
		</div>
	<?php elseif ($roll==4): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="bgimg/4L_TruthOrMare.png"/>
		</div>
		<div class="bg_spacer">Art by TruthOrMare</div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/4R_TruthOrMare.png"/>
		</div>
	<?php else: ?>
		<div class="bg_container bg_top bg_left">
			<img src="bgimg/5L_DETAIL.png"/>
		</div>
		<div class="bg_spacer">Art by DETAIL &amp; TastiMelon</div>
		<div class="bg_container bg_btm bg_right">
			<img src="bgimg/5R_TastiMelon.png"/>
		</div>
	<?php endif; ?>
</div>
</body>
</html>
