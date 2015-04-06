		<div class="section2"><!-- a doua sectiune -->
			<h1 class="titlu2">my other moments</h1><!--  titlu a 2 a sectiune-->
			<div class="section2_container1"><!-- container mare sectiunea 2 -->
				<div class="section2_main"><!-- container stanga sectiunea 2 -->
					
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
	
	
				<div class="section2">
					<div class="section2_container1">
						<div class="section2_main">
							
							<div class="section2_div1">
								<div class="running_chicago">
									<h4 class="link_title">blog</h4>
									<p class="text_gri">A cute little description would go in here</p>
								</div>
							</div>
							<div>
								<img src="../images/sun1.jpg" class="imagine_mare" alt="sun"/>
							</div>
							<div class="section2_div1">
								<div class="running_chicago">
									<a href="#" class="fun">blog</a>
									<h4><a href="#" class="link_title">the sunny day</a></h4>
									<ul class="lista_comentarii">
										<li class="data_comentariu"><a href="#">jan 21, 2015</a></li>
										<li class="comentarii"><a href="#">2 comments</a></li>
										<li class="autor"><span class="by">By</span><a href="#">Clare Smith</a></li>
									</ul>
									<div class="social_icons">
										<ul class="social_list">
											<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="section2_div1">
								<div>
									<img src="../images/chairs.jpg" alt="chairs"/>
								</div>
								<div class="running_chicago">
									<a href="#" class="fun">blog</a>
									<h4><a href="#" class="link_title">the meeting</a></h4>
									<ul class="lista_comentarii">
										<li class="data_comentariu"><a href="#">jan 2, 2015</a></li>
										<li class="comentarii"><a href="#">0 comments</a></li>
										<li class="autor"><span class="by">By</span><a href="#">Clare Smith</a></li>
									</ul>
									<p class="paragraf_lung">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar.</p>
									<div class="citat">
										<p class="paragraf_citat">“THERE ARE ALWAYS TWO PEOPLE IN EVERY PICTURE: THE PHOTOGRAPHER AND THE VIEWER.”</p>
										<cite>ANSEL ADAMS</cite>
									</div>
									<p class="paragraf_lung">Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi. Morbi ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et.	
									</p>
									<div class="readmore_link">
										<a href="#">read more</a>
									</div>
									<div class="social_icons">
										<ul class="social_list">
											<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="section2_div1">
								<div>
									<img src="../images/bridge1.jpg" alt="bridge" />
								</div>
								<div class="running_chicago">
									<a href="#" class="fun">blog</a>
									<h4><a href="#" class="link_title">the bridge</a></h4>
									<ul class="lista_comentarii">
										<li class="data_comentariu"><a href="#">dec 31, 2014</a></li>
										<li class="comentarii"><a href="#">0 comments</a></li>
										<li class="autor"><span class="by">By</span><a href="#">Clare Smith</a></li>
									</ul>
									<p class="paragraf_lung">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar.</p>
									<div class="citat">
										<p class="paragraf_citat">“THERE ARE ALWAYS TWO PEOPLE IN EVERY PICTURE: THE PHOTOGRAPHER AND THE VIEWER.”</p>
										<cite>ANSEL ADAMS</cite>
									</div>
									<p class="paragraf_lung">Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi. Morbi ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et.	
									</p>
									<div class="readmore_link">
										<a href="#">read more</a>
									</div>
									<div class="social_icons">
										<ul class="social_list">
											<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="section2_div1">
								<div class="running_chicago">
									<a href="#" class="fun">blog</a>
									<h4><a href="#" class="link_title">as an aside</a></h4>
									<ul class="lista_comentarii">
										<li class="data_comentariu"><a href="#">jun 2, 2014</a></li>
										<li class="comentarii"><a href="#">0 comments</a></li>
										<li class="autor"><span class="by">By</span><a href="#">Clare Smith</a></li>
										
									</ul>
									<p>Sometimes days seem long sometimes they seem short.</p>
									<div class="social_icons">
										<ul class="social_list">
											<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>