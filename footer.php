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
	<?php $roll=rand()%3; ?>
	<?php if ($roll==0): ?>
		<img src="images/KMR_CloseCrop-SizEq_1000px.png" />
		<div></div>
		<img src="images/HMR_CloseCrop_1000px.png" />
	<?php elseif ($roll==1): ?>
		<img src="images/CM_CropA_L_1000px.png" style="align-self:flex-start;"/>
		<div></div>
		<img src="images/CM_CropA_R_1000px.png" style="align-self:flex-end;"/>
	<?php else: ?>
		<img src="images/detail_hanmari_rot180.png" style="align-self:flex-start;"/>
		<div></div>
		<img src="images/interrupter_hanmari1_NoBG.png" style="align-self:flex-end;"/>
	<?php endif; ?>
</div>
</body>
</html>
