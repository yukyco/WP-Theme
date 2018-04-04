<?php get_header(); ?>	   
	   <div id="main" class="container"><!-- main start -->
	   
		   <div id="posts"><!-- posts start -->	
		    
		    <?php 
    		    if (have_posts()) :
    		      while (have_posts()):
    		        the_post();
            ?>
    		        	   
			   <div class="post">
				   <div class="post-header">
					   <h2>
						   <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
					   </h2>
					   <div class="post-meta">
					   <?php get_the_date(); ?>【<?php the_category(', '); ?>】
					   </div><!-- post-meta end-->
				    </div><!-- post-header end-->
				  
				   <div class="post-content">
				     <div class="post-image">
					    
					    <?php if (has_post_thumbnail()) : ?>
					    <?php the_post_thumbnail(array(100, 100)); ?>
					    <?php else: ?>
					    <img src="<?php echo get_template_directory_uri(); ?>/img/tanpopo.png
					    <?php endif; ?>
					    
				        </div><!-- post-image end -->
				        <div class="post-body">
                          <?php the_excerpt(); ?>
                        </div><!-- post-body end -->
				   </div><!-- post-content end -->	
	     
				 </div><!-- /post -->
			    
			    <?php
			        endwhile;
			      else:
			      ?>
			      
			      <p>記事はありません！</p>
			      
			      <?php
			        endif;
			      ?>
			      
			  <div class="navigation">
	             <div class="prev"><?php previous_posts_link(); ?></div>
                  <div class="next"><?php next_posts_link(); ?></div>
                </div><!-- navigation end -->
		     </div><!-- posts end -->
		     
            <?php get_sidebar(); ?>

       </div><!-- main end -->

	   <?php get_footer(); ?>
 			 
