
<div class="section2">
			<div class="section2_container1">
				<div class="section2_main">
					<div class="section2_div1">
						<div class="running_chicago">
							<h4 class="link_title">blog</h4>
							<p class="text_gri">A cute little description would go in here</p>
						</div>
					</div>
					
					
						<?php 	
						$i = 0;	
						
						if(is_array($results) && !empty($results))					
						foreach($results as $row){
							
							
							$i++;
							
							switch($i)
					{ 
						case 4: 
							$paragraf = ' ';
						break;

						
						
						
						
						default:
							$paragraf = 'paragraf_lung';
						
					}
								
								?>
					
					<div class="section2_div1"><!-- prima sectiune partea stanga -->
						<?php
						if ($row->img_src != null)
						{
						?>
							<div >
								<img src="<?php echo base_url(); ?>assets/images/<?php echo $row->img_src; ?>" alt="<?php echo $row->img_alt; ?> " /><!-- prima sectiune partea stanga imagine -->
							</div>
							<?php
							}
						?>
						<div class="running_chicago"><!-- container text prima sectiune partea stanga -->
							<a href="#" class="fun"><?php echo $row->categ; ?></a>
							<h4><a href="#" class="link_title"><?php echo $row->title; ?></a></h4><!-- link -->
							<ul class="lista_comentarii"><!-- comentarii-->
								<li class="data_comentariu"><a href="#"><?php echo $row->date; ?></a></li>
								<li class="comentarii"><a href="#"><?php echo $row->comments; ?></a></li>
								<li class="autor"><span class="by">By</span><a href="#"><?php echo $row->author; ?></a></li>
							</ul><!-- end comentarii-->
							<!-- text prima sectiune partea stanga -->
							<?php
								if ($row->par1 != null)
								{
								?>
							
							<p class="<?php echo  $paragraf; ?>"><?php echo $row->par1; ?></p>
								<?php
								}
							?>
							
							<?php
								if ($row->quote != null)
								{
								?>
							<div class="citat ">
								<p class="paragraf_citat"><?php echo $row->quote; ?></p>
								<cite class=""><?php echo $row->cite; ?></cite>
							</div>
							
								<?php
								}
							?>
							
							<?php
								if ($row->par2 != null)
								{
								?>
							
							<p class="<?php echo  $paragraf; ?> "><?php echo $row->par2; ?>
							</p>
							
								<?php
								}
							?>
							
							<?php
								if ($row->link != null)
								{
								?>
							
							<div class="readmore_link">
								<a href="#"><?php echo $row->link; ?></a><!-- link read more -->
							</div>
								<?php
								}
							?>
							<div class="social_icons">
								<ul class="social_list"><!-- links social a 4 a sectiune partea stanga -->
									<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
								</ul><!-- end links social a 4 a sectiune partea stanga -->
							</div>
						</div>
					</div><!-- end prima sectiune partea stanga -->
					
					<?php } ?>		
									
		</div><!-- container stanga sectiunea 2 -->


















		