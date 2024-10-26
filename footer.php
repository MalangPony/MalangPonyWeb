<?php if (!($vertical_fit===true)): ?>
<div style="height:100px;"></div> <!-- Bottom padding -->
<?php endif; ?>
</div> <!-- End of Content -->
<div class="bgdisp">
	<?php if (rand()%2==0): ?>
		<img src="images/KMR_CloseCrop-SizEq_1000px.png" />
		<div></div>
		<img src="images/HMR_CloseCrop_1000px.png" />
	<?php else: ?>
		<img src="images/CM_CropA_L_1000px.png" style="align-self:flex-start;"/>
		<div></div>
		<img src="images/CM_CropA_R_1000px.png" style="align-self:flex-end;"/>
	<?php endif; ?>
</div>
</body>
</html>
