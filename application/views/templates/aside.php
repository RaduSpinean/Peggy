				<div class="aside"><!-- meniu lateral -->
					
					<?php
					if(is_array($results) && !empty($results))					
					foreach($results as $row)
					{
					?>
						<!-- meniu lateral <?php echo $row->title;?> -->
						<div class="aside1">
							<h4 class="titlu3"><?php echo $row->title;?></h4>
							<?php
								if($row->title =='search')
								{					
								?>							
									<input type="text" value="Type and hit enter"class="search" />
								<?php
								}
								else
								{
								?>
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
							<?php
								}
							?>
						</div>
						<!-- end meniu lateral <?php echo $row->title;?> -->
					<?php
					}
					?>
				</div><!-- end meniu lateral -->
			</div><!-- container mare sectiunea 2 -->
		</div><!-- end a doua sectiune -->