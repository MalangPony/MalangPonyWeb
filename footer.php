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
	<?php $roll=rand()%4; ?>
	<?php if ($roll==0): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="images/KMR_CloseCrop-SizEq_1000px.png" />
		</div>
		<div class="bg_spacer">Art by SheepPony</div>
		<div class="bg_container bg_btm bg_right">
			<img src="images/HMR_CloseCrop_1000px.png" />
		</div>
	<?php elseif ($roll==1): ?>
		<div class="bg_container bg_top bg_left">
			<img src="images/CM_CropA_L_1000px.png"/>
		</div>
		<div class="bg_spacer"></div>
		<div class="bg_container bg_btm bg_right">
			<img src="images/CM_CropA_R_1000px.png" />
		</div>
	<?php elseif ($roll==2): ?>
		<div class="bg_container bg_btm bg_left">
			<img src="images/CESS_OpenMeet_20240906_EDIT_ISOLATED-Harder.png"/>
		</div>
		<div class="bg_spacer">Art by TruthOrMare</div>
		<div class="bg_container bg_btm bg_right">
			<img src="images/Cute_Mare_Enjoyers_6_EDIT.png"/>
		</div>
	<?php else: ?>
		<div class="bg_container bg_top bg_left">
			<img src="images/detail_hanmari_rot180.png"/>
		</div>
		<div class="bg_spacer">Art by DETAIL &amp; Interrupter</div>
		<div class="bg_container bg_btm bg_right">
			<img src="images/interrupter_hanmari1_NoBG.png"/>
		</div>
	<?php endif; ?>
</div>
</body>
</html>
