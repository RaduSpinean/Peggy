 <body>
    <div class="container"><!-- contine tot-->  
		<div class="header"> 
			<div class="content_menu">
				<div class="menu">
					<div class="logo_left"><!-- logo -->
						<a href="<?php echo base_url(); ?>site/home" id="top">Peggy</a>
					</div><!-- end logo -->
					<div class="nav"><!-- containerul meniului top -->
						<div class="menu_top"><!-- meniul de stanga sus -->
							<ul>
								<li><a href="<?php echo base_url(); ?>site/home" 
								 class="<?php if($this->uri->segment(2)=="home"){echo "active";}?>">Home</a></li>
								<li><a href="<?php echo base_url(); ?>site/about" 
								class="<?php if($this->uri->segment(2)=="about"){echo "active";}?>">About me</a></li>
								<li><a href="<?php echo base_url(); ?>site/blog"  class="<?php if($this->uri->segment(2)=="blog"){echo "active";}?>">Blog</a></li>
								<li><a href="<?php echo base_url(); ?>site/contact" class="<?php if($this->uri->segment(2)=="contact"){echo "active";}?>" >Contact me</a></li>
								<li><a href="#"><i class="fa fa-cog"></i></a></li>
							</ul>
						</div><!-- end meniul de stanga sus -->
						<div class="socials"><!-- meniul de links sociale dreapta sus -->
							<a href="http://twitter.com" class="socials_twitter"></a>
							<a href="http://facebook.com" class="socials_facebook"></a>
							<a href="http://linkedin.com" class="socials_linkedin"></a>
							<a href="http://instagram.com" class="socials_instagram"></a>
							<a href="http://flickr.com" class="socials_flickr"></a>
							<a href="#"><i class="fa fa-search"></i></a>
						</div><!-- end meniul de links sociale dreapta sus -->
					</div><!-- end containerul meniului top -->
					
				</div>
			</div>
		</div>