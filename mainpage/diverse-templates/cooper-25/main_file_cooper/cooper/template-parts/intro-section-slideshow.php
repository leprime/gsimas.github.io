            <!-- Hero section   -->
            <div class="hero-wrap fl-wrap full-height">			
                <div class="hero-item">
                    <!-- hero-wrap-image-slider-holder  end -->
                    <div class="slideshow-holder fl-wrap full-height">
                        <div class="overlay"></div>
                        <div class="num-holder3"></div>
                        <!-- hero-wrap-image-slider  -->
                        <div class="slideshow-slider   hero-slider  fl-wrap full-height">
							<!-- item  -->		
                            <?php $cooper_images = rwmb_meta( 'rnr_intro-section-image','type=image&size=' );
                                      foreach ( $cooper_images as $image ){
                                        echo "<div class='item fl-wrap full-height'><div class='bg' data-bg='{$image['url']}'></div></div>";
                                };?>							
						</div>	
                    <!-- hero-wrap-image-slider  end -->
                    </div>
                <!-- hero-wrap-image-slider-holder  end -->
                </div>
                <div class="hero-wrap-item  left-her alt">
                    <div class="container">
                        <div class="fl-wrap section-entry">
							<?php if (( get_post_meta($post->ID,'rnr_intro-section-content',true))):?>		
							<p> <?php echo balanceTags(get_post_meta($post->ID,'rnr_intro-section-content',true)) ?></p>
							<?php endif;?>
						
							<?php if (( get_post_meta($post->ID,'rnr_intro-section-title',true))):?>
							<h2><?php echo balanceTags(get_post_meta($post->ID,'rnr_intro-section-title',true)) ?></h2>
							<?php else:?>
							<h2><?php the_title();?></h2>
							<?php endif;?>
							
							<?php if (( get_post_meta($post->ID,'rnr_intro-section-subtitle',true))):?>
							<h3><?php echo esc_attr(get_post_meta($post->ID,'rnr_intro-section-subtitle',true)); ?></h3>
							<?php endif;?>
							
							<?php if (( get_post_meta($post->ID,'rnr_intro-section-button',true))):?>
							<?php if (( get_post_meta($post->ID,'rnr_intro-section-button-scrollto',true))=='yes'){?>											
							<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_intro-section-button-url',true)); ?>" class="btn hide-icon custom-scroll-link"><i class="fa fa-flag-checkered"></i><span><?php echo esc_attr(get_post_meta($post->ID,'rnr_intro-section-button',true)); ?></span></a>
							<?php } else {?>
							<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_intro-section-button-url',true)); ?>" class="btn hide-icon"><i class="fa fa-flag-checkered"></i><span><?php echo esc_attr(get_post_meta($post->ID,'rnr_intro-section-button',true)); ?></span></a>
							<?php };?>	
							<?php endif;?>	 
                        </div>
                    </div>
                </div>	
			</div>
			<!-- hero-wrapper  end -->