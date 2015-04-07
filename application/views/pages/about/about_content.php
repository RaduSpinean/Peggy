		<div class="section2">
			<div class="section2_container1">
				<div class="section2_main">
					<div class="container_elemente">
						<div class="section2_about">
							<?php 
							if(isset($results) and !empty($results)){ ?>
							<h1 class="titlu_about"><?php echo $results[0]->title; ?></h1>
							<img src="<?php echo base_url(); ?>assets/images/<?php echo $results[0]->img_src; ?>" class="img_about" alt="<?php echo $results[0]->img_alt; ?>"/>
							<p><?php echo $results[0]->par1; ?></p>
							<p><?php echo $results[0]->par2; ?></p>
							<p><?php echo $results[0]->par3; ?></p>
							<p><a href="http://twitter.com" class="socials_twitter">Twitter</a>
								<a href="http://facebook.com" class="socials_facebook">Facebook</a>
								<a href="http://instagram.com" class="socials_instagram">Instagram</a>
								<a href="http://flickr.com" class="socials_flickr">Flickr</a>
							</p>
							<?php } ?>
						</div>
					</div>
				</div>
				
					