<div class="links_jos_container"><!-- container links jos-->
			<div class="links_jos">
				<div class="links_jos1"><!-- links jos primul div-->
					<img src="<?php echo base_url(); ?>assets/images/about-me.jpg" alt="about me"/>
					<h4 class="titlu_jos">clare smith</h4>
					<p class="paragraf_lung" style="text-align:center;">My name is Clare and I'm a serial blogger. I love life and more than anything in the whole wide world, I love taking photographs. Oh and did I mention, I quite like blogging?</p>
				</div><!-- end links jos primul div-->
				<?php
					if(is_array($results) && !empty($results))					
					foreach($results as $row)
					{
					?>
					<?php
						if($row->title =='recent posts' ||$row->title =='archives' || $row->title =='categories')
						{
						?>
					<div class="links_jos1"><!-- links jos al 2 lea div-->
						<h4 class="titlu_jos"><?php echo $row->title;?></h4>
							<ul class="aside_list">
								<?php
									for($i=1;$i<=8;$i++)
									{
										$colNumber = 'l'.$i;
										if($row->$colNumber != null)
										{
										?>
										<li><a href="#"><?php echo $row->$colNumber;?></a></li>
										<?php
										}
									}
								?>
							</ul>	
					</div>
						<?php
						}
					?>
					<!-- end meniu lateral <?php echo $row->title;?> -->
					<?php
					}
				?>
			</div>
</div><!-- container links jos-->
		<div class="footer"><!-- footer-->
			<div class="footer_wrap">
				<div class="footer_text">
					© 2015 Peggy. Built by <a href="#">MeanThemes</a>
				</div>
				<div class="footer_links"><!-- footer links-->
					<a href="http://twitter.com" class="socials_twitter">Twitter</a>
					<a href="http://facebook.com" class="socials_facebook">Facebook</a>
					<a href="http://vimeo.com" class="socials_vimeo">Vimeo</a>
					<a href="http://youtube.com" class="socials_youtube">Youtube</a>
					<a href="http://dribble.com" class="socials_dribble">Dribble</a>
				</div><!-- end footer links-->
				<div class="link_top"><!-- mergi sus-->
					<a href="#">TOP</a>
					<i class="fa fa-chevron-up"></i>
				</div><!-- end mergi sus-->
			</div>
		</div><!-- end footer-->
		
    </div><!-- contine tot-->
  </body>
</html>		