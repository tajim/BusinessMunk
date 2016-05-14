<?php
/**
 *
 * @package corporatemunk
 */
global $munk; 
?>

			<section class="section bg-blue footer-t">
				<div class="container">
					<div class="icon bg-blue">
                    
                    <?php if ($munk['contact-block-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['contact-block-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon9.png" alt="img description" class="lazy">                    
                    <?php
					}
					?>
                    </div>
					<div class="heading">
						<h1 class="title"><?php echo $munk['seventh-block-header']; ?></h1>
					</div>
					<div class="row">
						<div class="col-sm-5 col-sm-offset-1">
							<ul class="contact-info">
								<li class="location"><?php echo $munk['address']; ?></li>
								<li class="phone"><?php echo $munk['phone']; ?></li>
								<li class="email"><?php echo $munk['topbar-email']; ?></li>
							</ul>
						</div>
						<div class="col-sm-5 col-sm-offset-1">
							<ul class="social-networks">
								<li class="facebook"><a href="<?php echo $munk['facebook']; ?>"><?php echo $munk['facebook']; ?></a></li>
								<li class="twitter"><a href="<?php echo $munk['twitter']; ?>"><?php echo $munk['twitter']; ?></a></li>
								<li class="google-plus"><a href="<?php echo $munk['gplus']; ?>"><?php echo $munk['gplus']; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>    