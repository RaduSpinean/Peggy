
<div class="section2">
			<div class="section2_container1">
				<div class="section2_main">
					
					
						<?php 	
						$i = 0;	
						
						if(is_array($results) && !empty($results))					
						foreach($results as $row){
							
							
							$i++;
							
							switch($i)
					{ 
						case 2: 
							$comentarii = 'lista_comentarii1';
						break;

						case 4: 
						$comentarii = 'lista_comentarii1';
						break;
						
						
						
						default:
							$comentarii = 'lista_comentarii';
						
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
							<ul class="<?php echo $comentarii; ?>"><!-- comentarii-->
								<li class="data_comentariu"><a href="#"><?php echo $row->date; ?></a></li>
								<li class="comentarii"><a href="#"><?php echo $row->comments; ?></a></li>
								<li class="autor"><span class="by">By</span><a href="#"><?php echo $row->author; ?></a></li>
							</ul><!-- end comentarii-->
							<!-- text prima sectiune partea stanga -->
							<?php
								if ($row->par1 != null)
								{
								?>
							
							<p class="paragraf_lung "><?php echo $row->par1; ?></p>
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
							
							<p class="paragraf_lung "><?php echo $row->par2; ?>
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


















		