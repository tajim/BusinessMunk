<?php
/**
 *
 * @package businessmunk
 */
global $munk; 
?>

		<div class="banner">
			<!-- slideshow of the site -->
			<div class="slideshow">
				<div class="flexslider">
					<ul class="slides">
                <?php
				if (isset($munk['general-slides']) && !empty($munk['general-slides'])) {				
				?>					
				<?php foreach( $munk['general-slides'] as $row ) : ?>										
                        <li>
           					<img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="lazy1">
							<div class="banner-text">
								<div class="container">
									<strong class="title"><?php echo $row['title']; ?></strong>
									<p><?php echo $row['description']; ?></p>
									<a href="<?php echo $row['url']; ?>" class="btn-readmore">Read More</a>
								</div>
							</div>
						</li>
                    <?php endforeach; ?>
				<?php				
					}
				?>									
					</ul>
				</div>
			</div>
		</div>