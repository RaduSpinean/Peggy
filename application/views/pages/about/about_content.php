		<div class="section2"><!-- a doua sectiune -->
			<div class="section2_container1"><!-- container mare sectiunea 2 -->
				<div class="section2_main"><!-- container stanga sectiunea 2 -->
					<div class="container_elemente"><!-- prima sectiune partea stanga -->
						<div class="section2_about">
						<?php
							if(is_array($results) && !empty($results))		
							{
							?>	
						
							<h1 class="titlu_about"><?php echo $results[0]->title;?></h1>
							<img src="<?php echo base_url(); ?>assets/images/<?php echo $results[0]->img_src;?>" class="img_about" alt="<?php echo $results[0]->img_alt;?>"/><!-- prima sectiune partea stanga imagine -->
							<!-- text prima sectiune partea stanga -->
							<p><?php echo $results[0]->par1;?>
							</p>
							<p><?php echo $results[0]->par2;?></p>
							<p>
							<?php echo $results[0]->par3;?></p><!-- end text prima sectiune partea stanga -->
							
							<?php
							}
						?>
							<!-- links social prima sectiune partea stanga -->
							<p><a href="http://twitter.com" class="socials_twitter">Twitter</a>
								<a href="http://facebook.com" class="socials_facebook">Facebook</a>
								
								<a href="http://instagram.com" class="socials_instagram">Instagram</a>
							<a href="http://flickr.com" class="socials_flickr">Flickr</a></p>
							<!-- end links social prima sectiune partea stanga -->
						</div>
						</div><!-- end links jos primul div-->
					</div>
			
				
					