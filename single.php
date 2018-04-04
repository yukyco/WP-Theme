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
					   </div>
				    </div>
				    				  
				   <div class="post-content">
                          <?php the_content(); ?>
                       </div>
                  </div><!-- /post -->

	          <div class="navigation">
	             <div class="prev"><?php previous_post_link(); ?></div>
                  <div class="next"><?php next_post_link(); ?></div>
              </div><!-- navigation end -->

			    
			    <?php
			        endwhile;
			      else:
			      ?>
			      
			      <p>記事はありません！</p>
			      
			      <?php
			        endif;
			      ?>
			      
		     </div><!-- /posts -->
            <?php get_sidebar(); ?>

       </div><!-- main end -->

	   <?php get_footer(); ?>
 			 