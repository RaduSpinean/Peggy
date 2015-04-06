<div class="main_image"> <!-- imaginea mare -->
			<div><img src="<?php echo base_url(); ?>assets/images/lead1.jpg" class="img1" alt="peggy"/></div>
			<div class="dissapear"><!-- div negru care dispare -->
				<div class="titlu_peggy">
					<?php			
						foreach($results as $row){
							$header =  $row->heading; 
							$par =  $row->paragraph; 	
						}
						echo heading("$header", 1);
						echo '<p>' . $par . '</p>';	
					?>
				</div>
				<!-- <div class="dissapear_hover"></div> -->
			</div><!-- div negru care dispare -->
			
</div><!-- end imaginea mare -->	