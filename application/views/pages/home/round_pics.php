		<div class="section1"><!-- inceput prima sectiune -->
			<h1 class="titlu1">My fave moments</h1>
			<div class="section1_div1"><!-- container interior prima sectiune -->
				<div class="content_div1"> <!-- container poze rotunde prima sectiune -->
					<?php 		
						$i = 0;
						if(is_array($results) and !empty($results))			
							
							
							
						
							foreach($results as $row){
							
							$i++;	
							
							switch($i)
							{
							case 2: 
								$class = "pic2";
							break;
							
							case 3: 
							$class = "pic3";
							break;
							
							case 4: 
							$class = "pic4";
							break;
							
							case 5: 
							$class = "pic5";
							break;
							
							case 6: 
							$class = "pic6";
							break;
							
							default:
							$class = "";
							
							}
							
							
							?>
								<div class="round_div <?php echo $class;?>">
									<a href="#"><img src="<?php echo base_url(); ?>assets/images/<?php echo $row->img_src; ?>" class="round_img" alt="<?php echo $row->img_alt; ?>"></a><!--  poza rotunda prima sectiune -->
									<div class="section1_links"><!--  links sub poza rotunda-->
									<a href="#" class="cute"><?php echo $row->categ; ?></a>
									<a href="#" class="lollipop"><?php echo $row->header; ?></a>
									<a href="#" class="date"><?php echo $row->date; ?></a>
									</div><!--  end links sub poza rotunda-->
								</div>
					<?php } ?>	
					<!-- end container poze rotunde prima sectiune -->
					<div class="container_bullets"><!--  bullets sub poze rotunde-->
						<div class="continut_bullets">
							<div class="bullets">
								<span class="span_bullets"></span>
							</div>
							<div class="bullets">
								<span class="span_bullets"></span>
							</div>
						</div>
					</div><!--  end bullets sub poze rotunde-->
			</div><!-- end container interior prima sectiune -->
		</div> <!-- sfarsit prima sectiune -->
	</div>